@extends('school.layouts.main')
@section('page_title', 'Fees Payment')
@section('content')

    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="d-flex justify-content-between">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style2 mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('school.dashboard') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('school.fees.fee-payment') }}">Fees Payment</a>
                        </li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </nav>
                <a href="{{ route('school.fees.fee-payment.detail',$fee_payment_history->student_id) }}" class="btn rounded-pill btn-primary text-white">Back</a>
            </div>
            <x-alert></x-alert>
            <div class="row">
                <div class="col-md-12">
                    <div class="my-3">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form id="myForm" action="{{ route('school.fees.fee-payment.specific.update') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $fee_payment_history->id }}">
                                    <input type="hidden" name="fee_structure_id" id="fee_structure_id" value="{{ $fee_payment_history->fee_structure_id }}">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <div class="form-group">
                                                <label for="field1">Class:</label>
                                                <input type="hidden" name="class_id" id="class_id" value="{{ $fee_payment_history->class->id }}">
                                                <h4>{{ $fee_payment_history->class->name }}</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-group">
                                                <label for="field1">Student:</label>
                                                <h4>{{ $fee_payment_history->student->first_name }} {{ $fee_payment_history->student->last_name }}</h4>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field1">Month:</label>
                                                <input type="month"  min="{{ date("Y-m", strtotime($current_session->start_date)) }}" max="{{ date("Y-m", strtotime($current_session->end_date)) }}"
                                                    class="form-control @error('month') is-invalid @enderror" id="month"
                                                    name="month" value="{{ old('month',$fee_payment_history->fees_month) }}">
                                            </div>
                                            @error('month')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field1">Payment Type:</label>
                                                <select name="type" id="type" class="form-control">
                                                    <option value="">Select</option>
                                                    <option value="partial" {{ $fee_payment_history->payment_type == "partial" ? "selected" : "" }}>Partial</option>
                                                    <option value="completed" {{ $fee_payment_history->payment_type == "completed" ? "selected" : "" }}>Completed</option>
                                                </select>
                                            </div>
                                            @error('type')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field1">Amount:</label>
                                                <input type="number" min="0"
                                                    class="form-control @error('amount') is-invalid @enderror" id="amount"
                                                    name="amount" value="{{ old('amount',$fee_payment_history->amount) }}">
                                            </div>
                                            @error('amount')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-2 submitBtn">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->
        <div class="content-backdrop fade"></div>
    </div>

    @push('footer-script')
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>

        <script>
            $("#class_id").on("change", function() {
                var class_id = $(this).val();
                $("#student_id").html('');
                $("#student_id").append('<option value="">Select</option>');
                if(class_id)
                {
                    $.ajax({
                        url: '{{ url('school/get-students-by-class-id/') }}' + '/' + class_id,
                        type: 'GET',
                        success: function(response) {
                            $("#student_id").html('');
                            $("#student_id").append('<option value="">Select</option>');
                            $(response.students).each(function(index, element) {
                                $("#student_id").append('<option value="' + element.id + '">' + element
                                    .first_name+' '+element.last_name + '</option>');
                            });
                            $("#amount").attr("max",response.fee_structure.amount);
                            $("#fee_structure_id").val(response.fee_structure.id);
                        },
                        error: function(xhr, status, error) {
                            console.error('failed');
                        }
                    });
                }
            });
            $("#type").on("change",function(){
                var type = $(this).val();
                var class_id = $("#class_id").val();
                if(type && type == "completed")
                {
                    $.ajax({
                        url: '{{ url('school/get-students-by-class-id/') }}' + '/' + class_id,
                        type: 'GET',
                        success: function(response) {
                            $("#amount").attr("max",response.fee_structure.amount);
                            $("#amount").val(response.fee_structure.amount);
                            $("#amount").attr("readonly",true);
                            $("#fee_structure_id").val(response.fee_structure.id);
                        },
                        error: function(xhr, status, error) {
                            console.error('failed');
                        }
                    });
                }
                else
                {
                    $("#amount").val("");
                    $("#amount").attr("readonly",false);
                }
            });
        </script>
    @endpush
@endsection
