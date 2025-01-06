@extends('school.layouts.main')
@section('page_title', 'Students')
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
                        <li class="breadcrumb-item active">Students</li>
                    </ol>
                </nav>
                <a href="{{ URL::previous() }}" class="btn rounded-pill btn-primary text-white">Back</a>
            </div>
            <x-alert></x-alert>
            <div class="row">
                <div class="col-md-12">
                    <div class="my-3">
                        <!-- Basic Bootstrap Table -->
                        <div class="card">
                            <h5 class="card-header">Students List</h5>
                            <div class="table-responsive text-nowrap">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Session (From/To)</th>
                                            <th>Class (From/To)</th>
                                            <th>Section (From/To)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($students_promote) > 0)
                                        @foreach($students_promote as $student_promote)
                                        <tr>
                                            <td>#</td>
                                            <td>
                                                <img src="{{ getStudentImage($student_promote->student_id) }}" class="img-fluid rounded"
                                                        width="50" height="50" alt="">
                                            </td>
                                            <td>{{ $student_promote->studentDetail->first_name }} {{ $student_promote->studentDetail->last_name }}</td>
                                            <td>{{ $student_promote->previousSession->title }}/{{ $student_promote->currentSession->title }}</td>
                                            <td>{{ $student_promote->previousClass->name }}/{{ $student_promote->currentClass->name }}</td>
                                            <td>{{ $student_promote->previousSection->name }}/{{ $student_promote->currentSection->name }}</td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            @if(count($students_promote) > 0)
                            <div class="pagination_custom_class">
                            {{ $students_promote->links() }}
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
