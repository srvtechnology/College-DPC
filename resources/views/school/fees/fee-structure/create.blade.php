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
                        <li class="breadcrumb-item">
                            <a href="{{ route('school.fees.fee-structure') }}">Fees Structure</a>
                        </li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </nav>
                <a href="{{ route('school.fees.fee-structure') }}" class="btn rounded-pill btn-primary text-white">Back</a>
            </div>
            <x-alert></x-alert>
            <div class="row">
                <div class="col-md-12">
                    <div class="my-3">
                        <div class="card mb-4">
                            <div class="card-body">
                                <form id="myForm" action="{{ route('school.fees.fee-structure.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="session_id" value="{{ $session->id }}">
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="field1">Year:</label>
                                                <div class="sectionError text-danger error-message"></div>
                                                <select class="form-control" name="section_id">
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

                                        <div class="col-md-4 mb-2">
                                            <div class="form-group">
                                                <label for="field1">Department:</label>
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
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="field1">Fee Amount:</label>
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
                                    <button type="submit" class="btn btn-primary submitBtn">Submit</button>
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
            $(".submitBtn").on("click", function() {
                loader();
            });
        </script>
        <script>
            $(document).ready(function() {
                // On change of year dropdown
                $('select[name="section_id"]').on('change', function() {
                    var year = $(this).val();

                    // Clear previous department options
                    $('select[name="class_id"]').empty();
                    $('select[name="class_id"]').append('<option value="">Select</option>');

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
                                console.log(error);
                            }
                        });
                    }
                });
            });
        </script>
    @endpush
@endsection
