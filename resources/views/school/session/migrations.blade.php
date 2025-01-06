@extends('school.layouts.main')
@section('page_title', 'Migrations')
@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css">
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="d-flex justify-content-between">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style2 mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ route('school.dashboard') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Migrations</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="my-3">
                        <div class="card">
                            <div class="card-body">
                                <form id="myForm" action="" method="GET">
                                    <div class="row">
                                        <h4>Migrations</h4>
                                        <div class="col-md-2 mb-2">
                                            <div class="form-group">
                                                <label for="field1">Current Session:</label>
                                                    <select name="current_session" id="current_session" class="form-control @error('current_session') is-invalid @enderror current_session">
                                                        <option value="">Select</option>
                                                        @if(count($sessions))
                                                        @foreach($sessions as $session)
                                                        <option value="{{ $session->id }}" @if(request()->current_session == $session->id) selected @endif>{{ $session->title }}</option>
                                                        @endforeach
                                                        @endif
                                                    </select>
                                                    <span class="invalid-feedback">Current Session is required</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 mb-2">
                                            <div class="form-group">
                                                <label for="field1">Promote Session:</label>
                                                    <select name="promote_session" id="promote_session" class="form-control @error('promote_session') is-invalid @enderror promote_session">
                                                        <option value="">Select</option>
                                                        @if(count($sessions))
                                                        @foreach($sessions as $promotes_session)
                                                        <option value="{{ $promotes_session->id }}" @if(request()->promote_session == $promotes_session->id) selected @endif>{{ $promotes_session->title }}</option>
                                                        @endforeach
                                                        @endif
                                                    </select>
                                                    <span class="invalid-feedback">Promote Session is required</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 mb-2">
                                            <div class="form-group">
                                                <label for="field1">Class:</label>
                                                    <select name="class_id" id="class_id" class="form-control @error('class_id') is-invalid @enderror class_id">
                                                        <option value="">Select</option>
                                                        @if(count($classes))
                                                        @foreach($classes as $class)
                                                        <option value="{{ $class->id }}" @if(request()->class_id == $class->id) selected @endif>{{ $class->name }}</option>
                                                        @endforeach
                                                        @endif
                                                    </select>
                                                    <span class="invalid-feedback">ClassField is required</span>
                                            </div>
                                        </div>
                                        <div class="col-md-2 mb-2">
                                            <div class="form-group">
                                                <label for="field1">Section:</label>
                                                    <select name="section_id" id="section_id" class="form-control @error('section_id') is-invalid @enderror section_id">
                                                        <option value="">Select</option>

                                                    </select>
                                                    <span class="invalid-feedback">Section is required</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-2">
                                            <div class="form-group">
                                                <button class="btn btn-primary mt-4 ">Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <x-alert></x-alert>
            @if(count($students) > 0)
            <form action="{{ route("school.migrations.store") }}" method="POST" id="migrationStore">
                @csrf
                <input type="hidden" name="current_session" value="{{ request()->current_session }}">
                <input type="hidden" name="promote_session" value="{{ request()->promote_session }}">
                <input type="hidden" name="class_id" value="{{ request()->class_id }}">
                <input type="hidden" name="section_id" value="{{ request()->section_id }}">
                <div class="row">
                    <div class="col-md-12">
                        <div class="my-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Promote Class</label>
                                                <select name="promote_class_id" id="promote_class_id0" data-index=0 class="form-control @error('promote_class_id') is-invalid @enderror promote_class_id" onchange="selectPromoteSection(0)">
                                                    @if(count($classes))
                                                    @foreach($classes as $class_index => $class)
                                                    <option value="{{ $class->id }}" @if($class_index == 1) selected @endif>{{ $class->name }}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Promote Section</label>
                                                <select name="promote_section_id" id="promote_section_id0" class="form-control @error('promote_section_id') is-invalid @enderror promote_section_id">
                                                    <option value="">Select</option>

                                                </select>
                                                <span class="invalid-feedback">Section is required</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive mt-2">
                                        <table class="table table-bordered table-striped text-center">
                                            <thead>
                                                <tr>
                                                    <th><input type="checkbox" name="" class="all_checkbox" id="all_checkbox"></th>
                                                    <th>Student Name</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($students as $student_index => $student)
                                                <tr>
                                                    <td>
                                                        <input type="checkbox" name="all_students[{{ $student_index }}]" value="{{ $student->id }}" class="selected_checkbox" id="selected_checkbox">
                                                    </td>
                                                    <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-primary submitBtn float-end">Submit</button>
            </form>
            @else
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <h6>No Result Found</h6>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        </div>
        <!-- / Content -->
        <div class="content-backdrop fade"></div>
    </div>

    @push('footer-script')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
                paging: false,
                searching: false,
                ordering: false,
            });

            $(".all_checkbox").click(function() {
                if ($(this).prop("checked")) {
                    $(".selected_checkbox").prop("checked", true);
                } else {
                    $(".selected_checkbox").prop("checked", false);
                }
            });

            $(".submitBtn").on("click", function() {
                var selectedCount = $(".selected_checkbox:checked").length;

                if (selectedCount > 0) {
                    $("#migrationStore").submit();
                } else {
                    alert("Select at least one student.");
                }
            });

            $('[id^=promote_class_id]').each(function() {
                var field = $(this);
                var selectedValue = field.val();
                var index = field.attr("data-index");
                selectPromoteSection(selectedValue,index);
            });

            $("#promote_class_id0").on("change",function(){
                var field = $(this);
                var selectedValue = field.val();
                var index = field.attr("data-index");
                selectPromoteSection(selectedValue,index);
            });
        });

        function selectPromoteSection(class_id,field_index)
        {
            $.ajax({
                url: '{{ url('school/time-table/assign-periods/get-all-data-by-class') }}' + '/' + class_id,
                type: 'GET',
                success: function(response) {
                    $("#promote_section_id"+field_index).html('');
                    $(response.sections).each(function(index, element) {
                        $("#promote_section_id"+field_index).append('<option value="' + element.id + '">' + element
                            .name + '</option>');
                    });
                },
                error: function(xhr, status, error) {
                    console.error('failed');
                }
            });
        }
    </script>

    <script>
        var class_id = $(".class_id").val();
        var curSection = '{{ request()->section_id }}';
        var curSubject = '{{ request()->subject_id }}';
        $.ajax({
            url: '{{ url('school/time-table/assign-periods/get-all-data-by-class') }}' + '/' + class_id,
            type: 'GET',
            success: function(response) {
                $("#section_id").html('');
                $("#subject_id").html('');
                $(response.sections).each(function(index, element) {
                    if(curSection == element.id)
                    {
                        var selected = "selected";
                    }
                    $("#section_id").append('<option value="' + element.id + '" '+selected+'>' + element
                        .name + '</option>');
                });
                $("#subject_id").append('<option value="">All Subjects</option>');
                $(response.subjects).each(function(index, element) {
                    if(curSubject == element.id)
                    {
                        var selected = "selected";
                    }
                    $("#subject_id").append('<option value="' + element.id + '" '+selected+'>' + element
                        .name + '</option>');
                });
            },
            error: function(xhr, status, error) {
                console.error('failed');
            }
        });

        $(".class_id").on("change", function(){
            var class_id = $(this).val();
            getDataByClass(class_id);
        });

        function getDataByClass(class_id){
            $.ajax({
                url: '{{ url('school/time-table/assign-periods/get-all-data-by-class') }}' + '/' + class_id,
                type: 'GET',
                success: function(response) {
                    $("#section_id").html('');
                    $(response.sections).each(function(index, element) {
                        $("#section_id").append('<option value="' + element.id + '">' + element
                            .name + '</option>');
                    });
                },
                error: function(xhr, status, error) {
                    console.error('failed');
                }
            });
        }

        function validateField(field) {
            var fieldValue = field.val();

            if (fieldValue === '') {
              field.addClass('is-invalid');
              return false;
            } else {
              field.removeClass('is-invalid');
              return true;
            }
        }

        function validateForm() {
            var isValid = true;

            $('[id^=class_id], [id^=section_id], [id^=current_session], [id^=promote_session]').each(function() {
              var field = $(this);
              isValid = validateField(field) && isValid;
            });

            return isValid;
        }
        $("#myForm").on("submit", function(event){
            event.preventDefault();
            if (validateForm()) {
                $(this).unbind('submit').submit();
            }
        });
        function studentFilter(){
            $.ajax({
                url: '{{ url('school/attendances/view-attendance') }}',
                type: 'GET',
                success: function(response) {
                    $("#myForm2").unbind('submit').submit();
                },
                error: function(xhr, status, error) {
                    console.error('failed');
                }
            });
        }
    </script>
    @endpush
@endsection
