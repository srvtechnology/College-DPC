@extends('school.layouts.main')
@section('page_title', 'Student Material')
@section('content')
<style>
    .icons{
        font-size: 50px;
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
                            <a href="{{ route('school.resources.home-work') }}">Home Work</a>
                        </li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
                </nav>
                <a href="{{ URL::previous() }}" class="btn rounded-pill btn-primary text-white">Back</a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="my-3">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="field1">Title:</label>
                                            <h4>{{ $homework->title }}</h4>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label for="field1">Class:</label>
                                            <h4>{{ $homework->class->name }}</h4>
                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label for="field1">Section:</label>
                                            <h4>{{ $homework->section->name }}</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label for="field1">Date:</label>
                                            <h4>{{ date("d/m/Y",strtotime($homework->date)) }}</h4>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mb-2">
                                        <div class="form-group">
                                            <label for="field1">Description:</label>
                                            <h6>{{ $homework->description }}</h6>
                                        </div>
                                    </div>
                                    @if(!empty($homework->files))
                                    <div class="col-md-12 mb-2">
                                        <div class="form-group">
                                            <label for="field1">Files:</label><br>
                                            @foreach(explode(",",$homework->files) as $file)
                                            <a href="{{ asset("uploads/schools/homework/".$file) }}" class="" download><i class='bx bx-file icons'></i></a>&nbsp;
                                            @endforeach
                                        </div>
                                    </div>
                                    @endif
                                </div>
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

    @endpush
@endsection
