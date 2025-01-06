@extends('school.layouts.main')
@section('page_title', 'Student Leave Application')
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
                        <li class="breadcrumb-item active">Student Leave Application</li>
                    </ol>
                </nav>
                {{--  @if(canHaveRole('Add Designation'))
                <a href="{{ route('school.designations.create') }}" class="btn rounded-pill btn-primary text-white">Create
                    Designation</a>
                    @endif  --}}
            </div>
            <x-alert></x-alert>
            <div class="row">
                <div class="col-md-12">
                    <div class="my-3">
                        <!-- Basic Bootstrap Table -->
                        <div class="card">
                            <h5 class="card-header">Student Leave Application List</h5>
                            <div class="table-responsive text-nowrap">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Staff</th>
                                            <th>Student</th>
                                            <th>Message</th>
                                            <th>File</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($leave_applications as $key => $leave_application)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ @$leave_application->staff->first_name }} {{ @$leave_application->staff->last_name }}</td>
                                                <td>{{ @$leave_application->student->first_name }} {{ @$leave_application->student->last_name }}</td>
                                                <td>{{ !empty($leave_application->message) ? $leave_application->message : "N/A" }}</td>
                                                <td>
                                                    @if(!empty($leave_application->file) AND file_exists(public_path("uploads/schools/leave").'/'.$leave_application->file))
                                                    <a href="{{ asset('uploads/schools/leave/'.$leave_application->file) }}" class="btn btn-sm btn-primary" download="">Download File</a>
                                                    @else
                                                    N/A
                                                    @endif
                                                </td>
                                                <td>{{ date("d/m/Y",strtotime($leave_application->date)) }}</td>
                                                <td>{{ ucwords($leave_application->status) }}</td>
                                                <td>
                                                    <a class="btn btn-success btn-sm text-white acceptBtn" title="Accept" data-id={{ $leave_application->id }} data-url={{ route("school.student-leave-applications.accept") }}><i class='bx bx-check-square'></i></a>&nbsp;
                                                    <a class="btn btn-danger btn-sm text-white rejectBtn" title="Reject" data-id={{ $leave_application->id }} data-url={{ route("school.student-leave-applications.rejected") }}><i class='bx bx-x'></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @if(count($leave_applications) > 0)
                            <div class="pagination_custom_class">
                            {{ $leave_applications->links() }}
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
    <div class="modal" tabindex="-1" id="AcceptModal">
        <form id="AcceptModalForm" method="POST">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Status</h5>
                        <button type="button" class="btn-close closeAcceptModal" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h4 class="text-center">Are you sure to Accept?</h4>
                        <input type="hidden" id="AcceptModalID" name="id">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary closeAcceptModal"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"
                            data-bs-dismiss="modal">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="modal" tabindex="-1" id="RejectModal">
        <form id="RejectModalForm" method="POST">
            @csrf
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Status</h5>
                        <button type="button" class="btn-close closeRejectModal" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h4 class="">Any Reason for Rejection?</h4>
                        <textarea name="reason" id="" class="form-control" cols="30" rows="10" required></textarea>
                        <input type="hidden" id="RejectModalID" name="id">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary closeRejectModal"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"
                            data-bs-dismiss="modal">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    @push('footer-script')
    <script>
        $(".acceptBtn").on("click", function() {
            $("#AcceptModal").show();
            var id = $(this).attr("data-id");
            var url = $(this).attr("data-url");

            $("#AcceptModalID").val(id);
            $("#AcceptModalForm").attr("action", url);
        });
        $(".closeAcceptModal").on("click", function() {
            $("#AcceptModal").hide();
        });

        $(".rejectBtn").on("click", function() {
            $("#RejectModal").show();
            var id = $(this).attr("data-id");
            var url = $(this).attr("data-url");

            $("#RejectModalID").val(id);
            $("#RejectModalForm").attr("action", url);
        });
        $(".closeRejectModal").on("click", function() {
            $("#RejectModal").hide();
        });
    </script>
    @endpush
@endsection
