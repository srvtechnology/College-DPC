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
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </nav>
                <a href="{{ route('school.fees.fee-payment') }}" class="btn rounded-pill btn-primary text-white">Back</a>
            </div>
            <x-alert></x-alert>
            <div class="row">
                <div class="col-md-12">
                    <div class="my-3">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form id="myForm" action="{{ route('school.fees.fee-payment.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="fee_structure_id" id="fee_structure_id">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <div class="form-group">
                                                <label for="field1">Class:</label>
                                                <h4>{{ $student->assignClasses[0]->class->name }}</h4>
                                                <input type="hidden" name="class_id" id="class_id" value="{{ $student->assignClasses[0]->class->id }}">
                                                {{--  <select name="class_id" id="class_id"
                                                    class="form-control @error('class_id') is-invalid @enderror">
                                                    <option value="">Select</option>
                                                    @if (count($classes))
                                                        @foreach ($classes as $class)
                                                            <option value="{{ $class->id }}">{{ $class->name }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>  --}}
                                            </div>
                                            @error('class_id')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-group">
                                                <label for="field1">Student:</label>
                                                <input type="hidden" name="student_id" id="student_id" value="{{ $student->id }}">
                                                <h4>{{ $student->first_name }} {{ $student->last_name }}</h4>
                                            </div>
                                            @error('student_id')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field1">Month:</label>
                                                <input type="month" min="{{ date("Y-m", strtotime($current_session->start_date)) }}" max="{{ date("Y-m", strtotime($current_session->end_date)) }}"
                                                        class="form-control @error('month') is-invalid @enderror" id="month"
                                                        name="month" value="{{ old('month') }}">

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
                                                    <option value="partial">Partial</option>
                                                    <option value="completed">Completed</option>
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
                                                    name="amount" value="{{ old('amount') }}">
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
            var class_id = $("#class_id").val();
            if(class_id)
            {
                $.ajax({
                    url: '{{ url('school/get-students-by-class-id/') }}' + '/' + class_id,
                    type: 'GET',
                    success: function(response) {
                        $("#amount").attr("max",response.fee_structure.amount);
                        $("#fee_structure_id").val(response.fee_structure.id);
                    },
                    error: function(xhr, status, error) {
                        console.error('failed');
                    }
                });
            }
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
