@extends('layouts.main')
@section('page_title', 'Schools')
@section('content')

    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="d-flex justify-content-between">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-style2 mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ url('home') }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('superadmin.schools') }}">Schools</a>
                        </li>
                        <li class="breadcrumb-item active">List of Students</li>
                    </ol>
                </nav>
                <a href="{{ route('superadmin.schools') }}" class="btn rounded-pill btn-primary text-white">Back</a>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="my-3">
                        <!-- Basic Bootstrap Table -->
                        <div class="card">
                            <h5 class="card-header">Students Details</h5>
                            <div class="table-responsive text-nowrap">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr</th>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (count($students) > 0)
                                            @foreach ($students as $student)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>
                                                        <img src="{{ getstudentImage($student->id) }}"
                                                            class="img-fluid rounded" width="50" height="50"
                                                            alt="">
                                                    </td>
                                                    <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                                                    <td>
                                                        <a href="{{ route('superadmin.students.detail', $student->id) }}"
                                                            class="btn btn-success btn-sm" title="Detail"><i
                                                                class='bx bx-detail'></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            @if (count($students) > 0)
                                <div class="pagination_custom_class">
                                    {{ $students->links() }}
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
