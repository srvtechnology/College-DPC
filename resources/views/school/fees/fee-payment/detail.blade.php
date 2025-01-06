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
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
                </nav>
                @if(canHaveRole('Add Exam'))
                <a href="{{ route('school.fees.fee-payment') }}" class="btn rounded-pill btn-primary text-white">Back</a>
                @endif
            </div>
            <x-alert></x-alert>
            <div class="row">
                <div class="col-md-12">
                    <div class="my-3">
                        <!-- Basic Bootstrap Table -->
                        <div class="card">
                            <h5 class="card-header">Fees Structure</h5>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="">Student</label>
                                        <h5>{{ $fee_payment_history_latest->student->first_name }} {{ $fee_payment_history_latest->student->last_name }}</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Class</label>
                                        <h5>{{ $fee_payment_history_latest->feeStructure->class->name }}</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Monthly Fees</label>
                                        <h5>{{ $fee_payment_history_latest->feeStructure->amount}}</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Total Fees For {{ count($unique_month_fee_payment_history) }} Month(s)</label>
                                        <h5>{{ $fee_payment_history_latest->feeStructure->amount * count($unique_month_fee_payment_history)}}</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="">Paid Fees</label>
                                        <h5>{{ $fee_payment_history->sum('amount') }}</h5>
                                    </div>
                                    <div class="col-md-6">
                                        @php
                                            $fee_payment_history
                                        @endphp
                                        <label for="">Remaining Fees</label>
                                        <h5>{{ ($fee_payment_history_latest->feeStructure->amount * count($unique_month_fee_payment_history)) - $fee_payment_history->sum('amount') }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="my-3">
                        <!-- Basic Bootstrap Table -->
                        <div class="card">
                            <h5 class="card-header">Fees Payment</h5>
                            <div class="table-responsive text-nowrap">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Reference No</th>
                                            <th>Amount</th>
                                            <th>Month</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($fee_payment_history as $fee_payment)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $fee_payment->reference_no }}</td>
                                                <td>{{ $fee_payment->amount }}</td>
                                                <td>{{ date("M,Y",strtotime($fee_payment->fees_month)) }}</td>
                                                <td>{{ date("d,M Y",strtotime($fee_payment->date)) }}</td>
                                                <td>
                                                    <a href="{{ route("school.fees.fee-payment.edit",$fee_payment->id) }}" class="btn btn-primary btn-sm" title="Edit"><i class='bx bxs-edit'></i></a>
                                                    <a class="btn btn-danger btn-sm text-white deleteBtn" title="Delete" data-id={{ $fee_payment->id }} data-url={{ route("school.fees.fee-payment.specific.delete") }}><i class='bx bxs-trash'></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--/ Basic Bootstrap Table -->
                    </div>
                </div>
            </div>
        </div>
        <!-- / Content -->
        <div class="content-backdrop fade"></div>
    </div>

    @push('footer-script')
    @endpush
@endsection
