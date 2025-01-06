@extends('school.layouts.main')
@section('page_title', 'Student Material')
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

                                            <div class="col-md-3 mb-3">
                                                <div class="form-group">
                                                    <label for="field1">Class:</label>
                                                    <select name="class_id1[]" id="class_id1"
                                                        class="form-control @error('class_id1') is-invalid @enderror class_id1">
                                                        <option value="">Select</option>
                                                        @if (count($classes))
                                                            @foreach ($classes as $class)
                                                                <option value="{{ $class->id }}">{{ $class->name }}
                                                                </option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Class is required
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3 mb-3">
                                                <div class="form-group">
                                                    <label for="field1">Section:</label>
                                                    <select name="section_id1[]" id="section_id1"
                                                        class="select2_custom form-control @error('section_id1') is-invalid @enderror section_id1" multiple="multiple">
                                                        <option value="">Select</option>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        Section is required
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3 mb-2">
                                                <button type="button" class="btn btn-primary mt-4 addField" id="addField"><i
                                                    class='bx bx-plus-medical'></i></button>
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
            $(".submitBtn").on("click", function(){
                loader();
            });

            function handleSelectAllOption(selectClass, allValue) {
                $(selectClass).change(function() {
                    if ($(this).val() != null && $(this).val().includes(allValue)) {
                        $(this).find('option:not([value="' + allValue + '"])').prop('selected', true);
                        $(this).find('option[value="' + allValue + '"]').prop('selected', false);
                    } else {
                        $(this).find('option[value="' + allValue + '"]').prop('selected', false);
                    }
                });
            }

            handleSelectAllOption('.weekdays', 'all');

            $(".class_id1").on("change", function(){
                var class_id = $(this).val();
                getDataByClass(class_id, 1);
            });

            function getDataByClass(class_id,counter){
                $.ajax({
                    url: '{{ url('school/time-table/assign-periods/get-all-data-by-class') }}' + '/' + class_id,
                    type: 'GET',
                    success: function(response) {
                        // $("#subject_id"+counter).html('');
                        $("#section_id"+counter).html('');
                        $(response.sections).each(function(index, element) {
                            $("#section_id"+counter).append('<option value="' + element.id + '">' + element
                                .name + '</option>');
                        });


                    },
                    error: function(xhr, status, error) {
                        console.error('failed');
                    }
                });
            }


            function getSectionByClass(event) {
                var classList = event.target.classList;
                var className = "";

                for (var i = 0; i < classList.length; i++) {
                  if (classList[i].startsWith("class")) {
                    className = classList[i];
                    break;
                  }
                }
                var counter = className.replace(/^\D+/g, '');
                var class_id = $("."+className).val();
                getDataByClass(class_id, counter);
            }

            var fieldIndex = 2;


            // Add field when addField button is clicked
            $('#addField').click(function() {

                var newField = `
                <div class="row" id="field${fieldIndex}">

                    <div class="col-md-3 mb-3">
                        <div class="form-group">
                            <label for="field${fieldIndex}">Class:</label>
                            <select name="class_id${fieldIndex}[]" id="class_id${fieldIndex}"
                                class="form-control @error('class_id${fieldIndex}') is-invalid @enderror class_id${fieldIndex}" onchange="getSectionByClass(event)">
                                <option value="">Select</option>
                                @if (count($classes))
                                @foreach ($classes as $class)
                                    <option value="{{ $class->id }}">{{ $class->name }}
                                    </option>
                                @endforeach
                            @endif
                            </select>
                            <div class="invalid-feedback">
                                Class is required
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <div class="form-group">
                            <label for="field${fieldIndex}">Section:</label>
                            <select name="section_id${fieldIndex}[]" multiple="multiple" id="section_id${fieldIndex}"
                                class="select2_custom form-control @error('section_id${fieldIndex}') is-invalid @enderror section_id${fieldIndex}">
                                <option value="">Select</option>
                            </select>
                            <div class="invalid-feedback">
                                Section is required
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 mb-2">
                        <button type="button" class="btn btn-danger mt-4 removeField" data-index="${fieldIndex}"><i class="bx bx-trash"></i></button>
                    </div>
                </div>
                `;

                $('#innerForm').append(newField);
                $('.select2_custom').select2();
                fieldIndex++;
            });

            // Remove field when removeField button is clicked
            $(document).on('click', '.removeField', function() {
                var index = $(this).data('index');
                $('#field' + index).remove();
            });


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

                $('[id^=title], [id^=start_date], [id^=end_date], [id^=class_id], [id^=section_id]').each(function() {
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
