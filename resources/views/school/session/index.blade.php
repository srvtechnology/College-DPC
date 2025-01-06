@extends('school.layouts.main')
@section('page_title', 'Sessions')
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
                        <li class="breadcrumb-item active">Session</li>
                    </ol>
                </nav>
                @if(canHaveRole('Add Time Range Period'))
                <a href="{{ route('school.view-all-session.create') }}" class="btn rounded-pill btn-primary text-white">Create</a>
                @endif
            </div>
            <x-alert></x-alert>
            <div class="row">
                <div class="col-md-12">
                    <div class="my-3">
                        <!-- Basic Bootstrap Table -->
                        <div class="card">
                            <h5 class="card-header">Session List</h5>
                            <div class="table-responsive text-nowrap">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Title</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allSessions as $allSession)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $allSession->title }}</td>
                                                <td>{{ $allSession->start_date }}</td>
                                                <td>{{ $allSession->end_date }}</td>
                                                <td>
                                                    @if($allSession->is_active == "0")
                                                    <span class="badge bg-danger">InActive</span>
                                                    @else
                                                    <span class="badge bg-success">Active</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    {{--  @if($allSession->is_active == "0")
                                                    <a class="btn btn-success btn-sm text-white statusBtn" title="Activate" data-id={{ $allSession->id }} data-url={{ route("school.view-all-session.block") }} data-status=inactive><i class='bx bx-check-shield'></i></a>
                                                    @else
                                                    <a class="btn btn-danger btn-sm text-white statusBtn" title="Block" data-id={{ $allSession->id }} data-url={{ route("school.view-all-session.block") }} data-status=active><i class='bx bx-block'></i></a>
                                                    @endif  --}}
                                                    <a href="{{ route("school.view-all-session.edit",$allSession->id) }}" class="btn btn-primary btn-sm" title="Edit"><i class='bx bxs-edit'></i></a>
                                                    <a class="btn btn-danger btn-sm text-white deleteBtn" title="Delete" data-id={{ $allSession->id }} data-url={{ route("school.view-all-session.delete") }} ><i class='bx bxs-trash'></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @if(count($allSessions) > 0)
                            <div class="pagination_custom_class">
                            {{ $allSessions->links() }}
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
