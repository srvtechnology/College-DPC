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
                        <li class="breadcrumb-item active">Fees Payment</li>
                    </ol>
                </nav>
                {{--  <a href="{{ route('school.fees.fee-payment.create') }}" class="btn rounded-pill btn-primary text-white">Create Fees Payment</a>  --}}
            </div>
            <x-alert></x-alert>
            {{--  <div class="row">
                <div class="col-md-12">
                    <div class="my-3">
                        <!-- Basic Bootstrap Table -->
                        <div class="card">
                            <h5 class="card-header">Fees Payment</h5>
                            <div class="card-body">
                                <form action="" method="GET">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field1">Class:</label>
                                                <select name="class_id" id="class_id"
                                                    class="form-control @error('class_id') is-invalid @enderror">
                                                    <option value="">Select</option>
                                                    @if (count($classes))
                                                        @foreach ($classes as $class)
                                                            <option value="{{ $class->id }}" @if(request()->class_id == $class->id) selected @endif>{{ $class->name }}
                                                            </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group mb-3">
                                                <label for="">Section *</label>
                                                <select name="section_id" id="section_id" class="form-control">
                                                    <option value="">Select</option>
                                                </select>
                                                <span class="text-danger d-none" id="section_id_error">Section is
                                                    required</span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary mt-1">Filter</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  --}}
            {{--  @if(!empty(request()->class_id))  --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="my-3">
                        <!-- Basic Bootstrap Table -->
                        <div class="card">
                            <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-header">Fees Payment</h5>
                            <a href="{{ route('school.fees.admin-fee-payment.create') }}" class="btn btn-primary" style="margin-right:30px;">Add Fee payment</a>
                        </div>
                            <div class="table-responsive text-nowrap">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Student</th>
                                            <th>Year</th>
                                            <th>Department</th>
                                            <th>Total Amount</th>
                                            <th>Amount Add</th>
                                            <th>Discount Amount</th>
                                            <th>Amount Receive</th>
                                            <th>Due amount</th>
                                            <th>Refferal name</th>
                                            <th>Refferal amount</th>
                                            <th>Refferal Contact</th>
                                            <th>Received Payment Type</th>
                                            <th>Seat Booking Amount</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($studentsfee_payment) > 0)
                                        @foreach ($studentsfee_payment as $student_fee)

                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $student_fee->student->first_name }} {{ $student_fee->student->last_name }}</td>
                                                <td>{{ $student_fee->section->name ?? '' }}</td>
                                                <td>{{ $student_fee->class->name ?? '' }}</td>
                                                <td>{{ $student_fee->actual_fee ?? '0' }}</td>
                                                <td>{{ $student_fee->amount ?? '0' }}</td>
                                                <td>{{ $student_fee->discount_amount ?? '0' }}</td>
                                                <td>{{ $student_fee->receive_amount ?? '0' }}</td>
                                                <td>{{ $student_fee->due_amount ?? '0' }}</td>
                                                <td>{{ $student_fee->refferel_name ?? '' }}</td>
                                                <td>{{ $student_fee->refferel_amount ?? '0' }}</td>
                                                <td>{{ $student_fee->refferel_phone ?? '0' }}</td>
                                                 <td>{{ $student_fee->payment_received_type ?? '' }}</td>
                                                <td>{{ $student_fee->seat_booking_amount ?? '0' }}</td>
                                                <td>
                                                    <a href="{{ route("school.fees.admin-fee-payment-invoice",$student_fee->id) }}" class="btn btn-success btn-sm" title="Invoice"><i class='bx bxs-file-pdf'></i></a>
                                                    <!--<a href="{{ route("school.fees.admin-fee-payment-delete",$student_fee->id) }}" class="btn btn-danger btn-sm" title="Detail"><i class='bx bxs-trash'></i></a>-->

                                                </td>
                                            </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            @if(count($studentsfee_payment) > 0)
                            <div class="pagination_custom_class">
                            {{ $studentsfee_payment->links() }}
                            </div>
                            @endif
                        </div>
                        <!--/ Basic Bootstrap Table -->
                    </div>
                </div>
            </div>
            {{--  @endif  --}}
        </div>
        <!-- / Content -->
        <div class="content-backdrop fade"></div>
    </div>

    @push('footer-script')
    <script type="text/javascript">
        $(document).ready(function() {
            var class_id = '{{ request()->class_id }}';
            var section_id = '{{ request()->section_id }}';
            if (class_id) {
                var class_url = "{{ route('school.students.getSectionByClass', ['id' => ':param']) }}";
                class_url = class_url.replace(':param', class_id);
                $.ajax({
                    url: class_url,
                    method: 'GET',
                    success: function (response) {
                        $('#section_id').html('');
                        $('#section_id').append('<option value="" selected disabled>Select</option>');
                        $.each(response.sections, function (index, data) {
                            var selected_section = (section_id == data.id) ? 'selected' : '';
                            $('#section_id').append('<option value="' + data.id + '" ' + selected_section + '>' + data.name + '</option>');
                        });
                    },
                    error: function (xhr, status, error) {
                        $('#section_id').html('');
                        $('#section_id').append('<option selected disabled>Select</option>');
                        console.log(error);
                    }
                });
            }



            $('#class_id').on('change', function() {
                    var selectedValue = $(this).val();
                    var class_url = "{{ route('school.students.getSectionByClass', ['id' => ':param']) }}";
                    class_url = class_url.replace(':param', selectedValue);
                    $.ajax({
                        url: class_url,
                        method: 'GET',
                        success: function(response) {
                            $('#section_id').html('');
                            $('#section_id').append(
                                '<option value="" selected disable>Select</option>');
                            $.each(response.sections, function(index, data) {
                                $('#section_id').append('<option value="' + data.id + '">' +
                                    data.name + '</option>');
                            });
                        },
                        error: function(xhr, status, error) {
                            $('#section_id').html('');
                            $('#section_id').append('<option selected disable>Select</option>');
                            console.log(error);
                        }
                    });
                });
        });
    </script>
    @endpush
@endsection
