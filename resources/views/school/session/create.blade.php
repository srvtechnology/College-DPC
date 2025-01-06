@extends('school.layouts.main')
@section('page_title', 'Sessions')
@section('content')

<style>
    .select2-container--default .select2-selection--multiple{
        border: 1px solid #d9dee3 !important;
        min-height: 38px;
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
                            <a href="{{ route('school.view-all-session') }}">Sessions</a>
                        </li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </nav>
                <a href="{{ route('school.view-all-session') }}" class="btn rounded-pill btn-primary text-white">Back</a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="my-3">
                        <div class="card mb-4">
                            <div class="card-body">
                                <x-alert></x-alert>
                                <form id="myForm" action="{{ route("school.view-all-session.store") }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div id="innerForm">
                                        <div class="row">
                                            <div class="col-md-3 mb-2">
                                                <div class="form-group">
                                                    <label for="field1">Title</label>
                                                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" id="title1">
                                                    <div class="invalid-feedback">
                                                        Title is required
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="field1">Start Date:</label>
                                                    <input type="date" name="start_date" id="start_date"
                                                        class="form-control start_date">
                                                    <div class="invalid-feedback">
                                                        Date is required
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-4 mb-3">
                                                <div class="form-group">
                                                    <label for="field1">End Date:</label>
                                                    <input type="date" name="end_date" id="end_date"
                                                        class="form-control end_date">
                                                    <div class="invalid-feedback">
                                                        Date is required
                                                    </div>
                                                </div>
                                            </div>

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

        <script>

            function validateField(field) {
                var fieldValue = field.val();
                var errorContainer = field.closest('.form-group').find('.invalid-feedback');


                if (fieldValue === '') {
                  field.addClass('is-invalid');
                  errorContainer.show();
                  return false;
                } else {
                  field.removeClass('is-invalid');
                  return true;
                }
            }

              function validateForm() {
                var isValid = true;

                $('[id^=title], [id^=start_date], [id^=end_date]').each(function() {
                  var field = $(this);
                  isValid = validateField(field) && isValid;
                });

                return isValid;
              }

              $('#myForm').submit(function(event) {
                event.preventDefault();

                if (validateForm()) {
                    loader();
                    $(this).unbind('submit').submit();
                }
              });


        </script>
    @endpush
@endsection
