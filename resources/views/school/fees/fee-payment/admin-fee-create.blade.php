@extends('school.layouts.main')
@section('page_title', 'Fees Payment')
@section('content')
    <style>
        .clr_red{
            color: red;
        }
    </style>
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


                                <form id="myForm" action="{{ route('school.fees.admin-fee-payment-store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <input type="hidden" name="session_id" value="{{ $session->id }}">
                                    <div class="row">
                                        <div class="col-md-6 mb-2">
                                            <div class="form-group">
                                                <label for="field1">Year: <span class="clr_red">*</span></label>
                                                <div class="sectionError text-danger error-message"></div>
                                                <select class="form-control" name="section_id" id="section_id">
                                                    <option value="">Select</option>
                                                    @if(count($sections) > 0)
                                                        @foreach($sections as $section)
                                                            <option value="{{ $section->id }}">{{ $section->name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                            @error('section_id')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                        </div>

                                        <div class="col-md-6 mb-2">
                                            <div class="form-group">
                                                <label for="field1">Department: <span class="clr_red">*</span></label>
                                                <select name="class_id" id="class_id" class="form-control @error('class_id') is-invalid @enderror">
                                                    <option value="">Select</option>
                                                </select>
                                            </div>
                                            @error('class_id')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6 mb-2">
                                            <div class="form-group">
                                                <label for="student">Student: <span class="clr_red">*</span></label>
                                                <select name="student_id" id="student_id" class="form-control @error('student_id') is-invalid @enderror">
                                                    <option value="">Select</option>
                                                </select>
                                            </div>
                                            @error('student_id')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field1">Payment mode: <span class="clr_red">*</span></label>
                                                <select name="type" id="type" class="form-control">
                                                    <option value="">Select</option>
                                                    <option value="cash">Cash</option>
                                                    <option value="online">Online</option>
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
                                                <label for="">Fee</label>
                                                <input type="text" name="actual_fee" class="form-control" readonly id="student_fee" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field1">Add Amount:</label>
                                                <input type="number"
                                                    class="form-control" id="amount"
                                                    name="amount" value="" min="0">
                                            </div>
                                            @error('amount')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field1">Discount:</label>
                                                <input type="number" min="0"
                                                    class="form-control" id="discount_amount"
                                                    name="discount_amount" value="">
                                            </div>
                                            @error('discount_amount')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <!--<div class="col-md-6">-->
                                        <!--    <div class="form-group">-->
                                        <!--        <label for="field1">Upload fee receipt: <span class="clr_red">*</span></label>-->
                                        <!--        <input type="file"-->
                                        <!--            class="form-control" id="fee_receipt"-->
                                        <!--            name="receipt">-->
                                        <!--    </div>-->
                                        <!--    @error('amount')-->
                                        <!--        <div class="text-danger">-->
                                        <!--            {{ $message }}-->
                                        <!--        </div>-->
                                        <!--    @enderror-->
                                        <!--</div>-->
                                        <div class="col-md-6" id="receive_amount_section" style="display:none;">
                                            <div class="form-group">
                                                <label for="field1">Receive Amount: <span class="clr_red">*</span></label>
                                                <input type="number" min="0"
                                                    class="form-control" id="receive_amount"
                                                    name="receive_amount" value="">
                                            </div>
                                            @error('receive_amount')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field1">Due Amount:</label>
                                                <input type="number" min="0"
                                                    class="form-control" readonly readonly id="due_amount"
                                                    name="due_amount" value="">
                                            </div>
                                            @error('due_amount')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="field1">Fund Type: <span class="clr_red">*</span></label>
                                                    <select name="fee_received_type" id="fee_received_type" class="form-control">
                                                        <!--<option value="">Select</option>-->
                                                        <option value="college_fund">College Fund</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                </div>
                                                @error('fee_received_type')
                                                    <div class="text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>


                                         <div class="col-md-6" id="seat_booking_amount_field" style="display:none;">
                                            <div class="form-group">
                                                <label for="field1">Seat Booking Amount:</label>
                                                <input type="number" min="0"
                                                    class="form-control" id="seat_booking_amount"
                                                    name="seat_booking_amount" value="">
                                            </div>
                                            @error('seat_booking_amount')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field1">Payment Type: <span class="clr_red">*</span></label>
                                                <select name="booking_payment_type" id="type" class="form-control">
                                                    <option value="Fee Payment">Fee Payment</option>
                                                    <option value="Seat Booking">Seat Booking</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="field1">Add Notes: <span class="clr_red"></span></label>
                                               <textarea class="form-control" cols="50" rows="4" name="notes"></textarea>
                                            </div>
                                            @error('due_amount')
                                                <div class="text-danger">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                    </div>
                                    <div id="section_hide_second" style="display:none;">
                                        <h3 class="mt-3 mb-3">Refferal Detail</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="field1">Refferal Name:</label>
                                                    <input type="text"
                                                        class="form-control" id="refferal_name"
                                                        name="refferal_name" value="">
                                                </div>
                                                @error('refferal_name')
                                                    <div class="text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="field1">Refferal Amount:</label>
                                                    <input type="number" min="0"
                                                        class="form-control" id="refferal_amount"
                                                        name="refferal_amount" value="">
                                                </div>
                                                @error('refferal_amount')
                                                    <div class="text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="field1">Refferal Contact Number:</label>
                                                    <input type="number" min="0"
                                                        class="form-control" id="refferal_contact"
                                                        name="refferal_contact" value="">
                                                </div>
                                                @error('refferal_contact')
                                                    <div class="text-danger">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>


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
            $(document).ready(function() {
                // On change of section/year dropdown
                $('select[name="section_id"]').on('change', function() {
                    var year = $(this).val();

                    // Clear previous class options
                    $('select[name="class_id"]').empty().append('<option value="">Select</option>');

                    if (year) {
                        $.ajax({
                            url: '{{ route('school.fees.getClassesByYear') }}',
                            type: 'GET',
                            data: { year: year },
                            dataType: 'json',
                            success: function(data) {
                                if (data.length > 0) {
                                    $.each(data, function(key, value) {
                                        $('select[name="class_id"]').append('<option value="' + value.id + '">' + value.name + '</option>');
                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                                console.log('Error fetching classes:', error);
                            }
                        });
                    }
                });

                // When a class is selected, fetch the students
                $('select[name="class_id"]').on('change', function() {
                    var class_id = $(this).val();
                    var year_id = $('select[name="section_id"]').val();  // Fetch the selected year ID
                    $('select[name="student_id"]').empty().append('<option value="">Select</option>');

                    if (class_id) {
                        $.ajax({
                            url: '{{ route('school.fees.getStudentsByClass') }}',
                            type: 'GET',
                            data: {
                                class_id: class_id,
                                year: year_id
                            },
                            dataType: 'json',
                            success: function(data) {
                                if (data.students) {
                                    $.each(data.students, function(key, item) {
                                        // Check if item.student is valid and has the necessary properties
                                        if (item.student && item.student.id && item.student.first_name && item.student.last_name) {
                                            $('select[name="student_id"]').append('<option value="' + item.student.id + '">' + item.student.first_name + ' ' + item.student.last_name + '</option>');
                                        }
                                    });
                                }
                                if (data.fee) {
                                    $('#student_fee').val(data.fee);  // Set the fee value
                                } else {
                                    $('#student_fee').val('0');  // Default to 0 if no fee found
                                }
                            },
                            error: function(xhr, status, error) {
                                console.log('Error fetching students:', error);
                            }
                        });
                    }
                });

                // When a student is selected, fetch the due amount
                $('select[name="student_id"]').on('change', function() {
                    $("#receive_amount_section").show();
                    var student_id = $(this).val();
                    var year_id = $('select[name="section_id"]').val();
                    var class_id = $('select[name="class_id"]').val();  // Make sure class_id is correctly fetched
                    $('#due_amount').empty().append('<option value="">Select</option>');

                    if (student_id) {
                        $.ajax({
                            url: '{{ route('school.fees.getStudentdueAmount') }}',
                            type: 'GET',
                            data: {
                                student_id: student_id,
                                class_id: class_id,
                                year: year_id
                            },
                            dataType: 'json',
                            success: function(data) {
                                if (data.due_amount) {
                                    $('#due_amount').val(data.due_amount);
                                    sessionStorage.setItem('total_due',data.due_amount);
                                } else {
                                    $('#due_amount').val('0');
                                }
                                if(data.payment_count === 0){
                                    $("#section_hide_second").show();
                                    $("#seat_booking_amount_field").show();
                                }
                                else{
                                     $("#section_hide_second").hide();
                                     $("#seat_booking_amount_field").hide();
                                }

                            },
                            error: function(xhr, status, error) {
                                console.log('Error fetching due amount:', error);
                            }
                        });
                    }
                });
            });
        </script>



        <script>
            $(document).ready(function() {


                // Listen to changes in the amount field
                $('#amount').on('change', function() {
                    var initialDueAmount = parseFloat($('#due_amount').val());
                    var dueAmount = initialDueAmount;
                    var additionalAmount = parseFloat($(this).val()) || 0;

                    // Prevent negative values for additional amount
                    if (additionalAmount < 0) {
                        alert("Amount cannot be negative.");
                        $(this).val(0); // Reset the amount field
                        additionalAmount = 0;
                    }
                     if(additionalAmount === 0){
                         
                           var storedData = sessionStorage.getItem('total_due');
                            $('#due_amount').val(parseFloat(storedData).toFixed(2));
                    }else{
                            // Update the #due_amount field
                     dueAmount = initialDueAmount + additionalAmount;

                    // Update the #due_amount field
                     $('#due_amount').val(dueAmount.toFixed(2));
                    }
                  
                });

                 $('#seat_booking_amount').on('change', function() {
                    var initialDueAmount = parseFloat($('#due_amount').val());
                    var dueAmount = initialDueAmount;
                    var seat_booking_amount = parseFloat($(this).val());

                    // Prevent negative values for additional amount
                    if (seat_booking_amount < 0) {
                        alert("Seat booking amount cannot be negative.");
                        $(this).val(0); // Reset the amount field
                        seat_booking_amount = 0;
                    }
                    
                    // Calculate the new due amount by adding the additional amount
                    dueAmount = initialDueAmount + seat_booking_amount;

                    // Update the #due_amount field
                    $('#due_amount').val(dueAmount.toFixed(2));
                });

                // Listen to changes in the discount field
                $('#discount_amount').on('change', function() {
                    var initialDueAmount = parseFloat($('#due_amount').val());
                    var dueAmount = initialDueAmount;
                    var discountAmount = parseFloat($(this).val()) || 0;

                    // Prevent negative values for discount
                    if (discountAmount < 0) {
                        alert("Discount cannot be negative.");
                        $(this).val(0); // Reset the discount field
                        discountAmount = 0;
                    }

                    // Ensure discount is not greater than the current due amount
                    if (discountAmount > dueAmount) {
                        alert("You cannot enter a greater discount than the current due amount.");
                        $(this).val(0);
                        discountAmount = 0;
                    }

                    // Calculate the new due amount by applying the discount
                     if(discountAmount === 0){
                        var storedData = sessionStorage.getItem('total_due');
                            $('#due_amount').val(parseFloat(storedData).toFixed(2));
                    }else{
                            // Update the #due_amount field
                     dueAmount = initialDueAmount - discountAmount;
                    $('#due_amount').val(dueAmount.toFixed(2));
                    }
                  
                });

                // Listen to changes in the receive amount field
                $('#receive_amount').on('change', function() {
                    var initialDueAmount = parseFloat($('#due_amount').val());
                    var dueAmount = initialDueAmount;
                    var receivedAmount = parseFloat($(this).val()) || 0;

                    // Prevent negative values for receive amount
                    if (receivedAmount < 0) {
                        alert("Receive amount cannot be negative.");
                        $(this).val(0); // Reset the receive amount field
                        receivedAmount = 0;
                    }

                    // Ensure received amount is not greater than the current due amount
                    if (receivedAmount > dueAmount) {
                        alert("Received amount cannot be greater than the current due amount.");
                        $(this).val(0); // Reset the received amount
                        receivedAmount = 0;
                    }
                  
                    // Calculate the new due amount by subtracting the received amount
                    dueAmount = initialDueAmount - receivedAmount;

                    // Ensure due amount is not negative
                    if (dueAmount < 0) {
                        dueAmount = 0;
                    }
                    if(receivedAmount === 0){
                        var storedData = sessionStorage.getItem('total_due');
                            $('#due_amount').val(parseFloat(storedData).toFixed(2));
                    }else{
                            // Update the #due_amount field
                    $('#due_amount').val(dueAmount.toFixed(2));
                    }
                
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $("#myForm").validate({
                    rules: {
                        section_id: {
                            required: true,
                        },
                        class_id: {
                            required: true,
                        },
                        student_id: {
                            required: true,
                        },
                        type: {
                            required: true,
                        },
                        receipt: {
                            required: true,
                        },
                        receive_amount: {
                            required: true,
                        },
                        fee_received_type: {
                            required: true,
                        },
                        booking_payment_type: {
                            required: true,
                        },
                      

                    },
                    messages: {
                        section_id: {
                            required: "Please Select Year"
                        },
                        class_id: {
                            required: "Please Select Department"
                        },
                        student_id: {
                            required: "Please Select Student"
                        },
                        type: {
                            required: "Please Select Payment Mode"
                        },
                        receipt: {
                            required: "Please Upload Receipt"
                        },
                        receive_amount: {
                            required: "Please enter receive amount"
                        },
                        fee_received_type: {
                            required: "Please Select Fund Type"
                        },
                        booking_payment_type: {
                            required: "Please Select Payment Type"
                        },
                        notes: {
                            required: "Please Select Payment Type"
                        },

                    },
                    submitHandler: function(form) {
                        form.submit();
                    }
                });
            });
        </script>

    @endpush
@endsection
