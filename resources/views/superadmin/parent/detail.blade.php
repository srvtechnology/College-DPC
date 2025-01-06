@extends('layouts.main')
@section('page_title', 'Parents')
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
                            <a href="{{ url("/home") }}">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('superadmin.parents') }}">Parents</a>
                        </li>
                        <li class="breadcrumb-item active">View Parent</li>
                    </ol>
                </nav>
                <a href="{{ \URL::previous() }}" class="btn rounded-pill btn-primary text-white">Back</a>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="my-3">
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-md-12 mb-2">
                                        <h4>School Info</h5>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label>School Name</label>
                                        <h5>{{ @$parent->user->school->name }}</h5>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label>Username</label>
                                        <h5>{{ @$parent->user->school->username }}</h5>
                                    </div>
                                </div><hr>
                                <div class="row mb-2">
                                    <div class="col-md-12 mb-2">
                                        <h4>Personal</h5>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label>Name</label>
                                        <h5>{{ $parent->name }}</h5>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label>Email</label>
                                        <h5>{{ $parent->email }}</h5>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label>Username</label>
                                        <h5>{{ $parent->username }}</h5>
                                    </div>
                                    <div class="col-md-4 mb-2">
                                        <label>Password</label>
                                        <h5>{{ $parent->user->random_pwd_string }}</h5>
                                    </div>

                                    <div class="col-md-4 mb-2">
                                        <label>Phone</label>
                                        <h5>{{ $parent->phone }}</h5>
                                    </div>

                                    <div class="col-md-4 mb-2">
                                        <label>Emergency Phone</label>
                                        <h5>{{ $parent->emergency_phone }}</h5>
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
                        <div class="card mb-4">
                            <div class="card-body">
                                <h4 class="mb-2">Children Info</h4>
                                <div class="row mb-2">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Sr</th>
                                                    <th>School</th>
                                                    <th>Children Name</th>
                                                    <th>Children Username</th>
                                                    <th>Children Password</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if(count($parent->students) > 0)
                                                @foreach($parent->students as $student)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $student->school->name }}</td>
                                                    <td>{{ $student->first_name }} {{ $student->last_name }}</td>
                                                    <td>{{ $student->username }} </td>
                                                    <td>{{ $student->user->random_pwd_string }}</td>
                                                </tr>
                                                @endforeach
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
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
    @endpush
@endsection
