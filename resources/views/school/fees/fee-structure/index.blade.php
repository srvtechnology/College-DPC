@extends('school.layouts.main')
@section('page_title', 'Fees Structure')
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
                        <li class="breadcrumb-item active">Fees Structure</li>
                    </ol>
                </nav>
                @if(canHaveRole('Add Exam'))
                <a href="{{ route('school.fees.fee-structure.create') }}" class="btn rounded-pill btn-primary text-white">Create Fees Structure</a>
                @endif
            </div>
            <x-alert></x-alert>

            <div class="row">
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
                                                <label for="field1">Department:</label>
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
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <label for="field1">Year:</label>
                                                <div class="sectionError text-danger error-message"></div>
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" name="section_id">
                                                    <option value="">Select</option>
                                                    @if(count($sections) > 0)
                                                    @foreach($sections as $section)
                                                        <option value="{{ $section->id }}"  @if(request()->section_id == $section->id) selected @endif>{{ $section->name }}</option>
                                                        @endforeach
                                                    @endif
                                                  </select>
                                            </div>
                                        </div>
                                        {{--  <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field1">Range:</label>
                                                <select name="range" id="range"
                                                    class="form-control @error('range') is-invalid @enderror">
                                                    <option value="">Select</option>
                                                    <option value="monthly" {{ request()->range == "monthly" ? "selected" : "" }}>Monthly</option>
                                                    <option value="quaterly" {{ request()->range == "quaterly" ? "selected" : "" }}>Quaterly</option>
                                                    <option value="half_yearly" {{ request()->range == "half_yearly" ? "selected" : "" }}>Half Yearly</option>
                                                    <option value="yearly" {{ request()->range == "yearly" ? "selected" : "" }}>Yearly</option>
                                                </select>
                                            </div>
                                        </div>  --}}
                                        <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary mt-2">Filter</button>
                                        </div>
                                    </div>
                                </form>
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
                            <h5 class="card-header">Fees Structure</h5>
                            <div class="table-responsive text-nowrap">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Year</th>
                                            <th>Department</th>
                                            <th>Fee Amount</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($fee_structures as $fee_structure)
                                        @php
                                            $amount = $fee_structure->amount;
                                            if(!empty(request()->range))
                                            {
                                                $range = request()->range;
                                                if($range == "yearly")
                                                {
                                                    $month = 12;
                                                }
                                                else if($range == "half_yearly")
                                                {
                                                    $month = 6;
                                                }
                                                else if($range == "quaterly")
                                                {
                                                    $month = 4;
                                                }
                                                else
                                                {
                                                    $month = 1;
                                                }
                                                $amount = $amount * $month;
                                            }
                                        @endphp
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $fee_structure->section->name ?? '' }}</td>
                                                <td>{{ $fee_structure->class->name }}</td>
                                                <td>{{ $amount }}</td>
                                                <td>
                                                    <a href="{{ route("school.fees.fee-structure.edit",$fee_structure->id) }}" class="btn btn-primary btn-sm" title="Edit"><i class='bx bxs-edit'></i></a>
                                                    <a class="btn btn-danger btn-sm text-white deleteBtn" title="Delete" data-id={{ $fee_structure->id }} data-url={{ route("school.fees.fee-structure.delete") }}><i class='bx bxs-trash'></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @if(count($fee_structures) > 0)
                            <div class="pagination_custom_class">
                            {{ $fee_structures->links() }}
                            </div>
                            @endif
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
