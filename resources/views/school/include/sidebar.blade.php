<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ url('home') }}" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder ms-2"><img src="https://i.ibb.co/hFV8BfC/20240416-175528-1.png" alt="LOGO IMAGE" style="width: 70px !important;text-align: center;margin: 0 0 0 45px;"></span>
            <!--<p>DOMOHONA PHARMACY COLLEGE</p>-->
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1" id="sidebar_btn">
        <!-- Dashboard -->
        @if(canHaveRole('Dashboard'))
        <li class="menu-item {{ request()->segment(2) == 'dashboard' ? 'active' : '' }}">
            <a href="{{ url('school/dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        @endif

        {{--  <li class="menu-item {{ request()->segment(2) == 'sections' ? 'active' : '' }}">
            <a href="{{ route('school.sections') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Sections</div>
            </a>
        </li>  --}}

        <!-- Layouts -->
        @if(canHaveRole('List of Section') OR canHaveRole('List of Subject') OR canHaveRole('List of Class'))
        <li class="menu-item @if(request()->segment(2) == 'sections' OR request()->segment(2) == 'subjects' OR request()->segment(2) == 'class') active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Academics</div>
            </a>

            <ul class="menu-sub">
                @if(canHaveRole('List of Section'))
                <li class="menu-item {{ request()->segment(2) == 'sections' ? 'active' : '' }}">
                    <a href="{{ route('school.sections') }}" class="menu-link">
                        <div data-i18n="Without menu">Year</div>
                    </a>
                </li>
                @endif
                {{--  @if(canHaveRole('List of Subject'))
                <li class="menu-item {{ request()->segment(2) == 'subjects' ? 'active' : '' }}">
                    <a href="{{ route('school.subjects') }}" class="menu-link">
                        <div data-i18n="Without menu">Subjects</div>
                    </a>
                </li>
                @endif  --}}
                @if(canHaveRole('List of Class'))
                <li class="menu-item {{ request()->segment(2) == 'class' ? 'active' : '' }}">
                    <a href="{{ route('school.class') }}" class="menu-link">
                        <div data-i18n="Without menu">Department</div>
                    </a>
                </li>
                @endif
            </ul>
        </li>
        @endif

        @if(canHaveRole('List of Designation') OR canHaveRole('List of Staff') OR canHaveRole('List of Student') OR canHaveRole('List of Parent'))
        <li class="menu-item @if(request()->segment(2) == 'teachers' OR request()->segment(2) == 'designations' OR request()->segment(2) == 'students' OR request()->segment(2) == 'parents') active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon bx bxs-user-detail'></i>
                <div data-i18n="Layouts">Student List</div>
            </a>

            <ul class="menu-sub">
                {{--  @if(canHaveRole('List of Designation'))
                <li class="menu-item {{ request()->segment(2) == 'designations' ? 'active' : '' }}">
                    <a href="{{ route('school.designations') }}" class="menu-link">
                        <div data-i18n="Without menu">Designation</div>
                    </a>
                </li>
                @endif  --}}
                {{--  @if(canHaveRole('List of Staff'))
                <li class="menu-item {{ request()->segment(2) == 'teachers' ? 'active' : '' }}">
                    <a href="{{ route('school.teachers') }}" class="menu-link">
                        <div data-i18n="Without menu">Teachers</div>
                    </a>
                </li>
                @endif  --}}
                @if(canHaveRole('List of Student'))
                <li class="menu-item {{ request()->segment(2) == 'students' ? 'active' : '' }}">
                    <a href="{{ route('school.students') }}" class="menu-link">
                        <div data-i18n="Without menu">Student</div>
                    </a>
                </li>
                @endif
                {{--  @if(canHaveRole('List of Parent'))
                <li class="menu-item {{ request()->segment(2) == 'parents' ? 'active' : '' }}">
                    <a href="{{ route('school.parents') }}" class="menu-link">
                        <div data-i18n="Without menu">Parents</div>
                    </a>
                </li>
                @endif  --}}
            </ul>
        </li>
        @endif
        <li class="menu-item @if(request()->segment(2) == 'fees') active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon bx bx-bell' ></i>
                <div data-i18n="Layouts">Fees</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->segment(3) == 'fee-structure' ? 'active' : '' }}">
                    <a href="{{ route('school.fees.fee-structure') }}" class="menu-link">
                        <div data-i18n="Without menu">Fee Structure</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->segment(3) == 'fee-payment' ? 'active' : '' }}">
                    <a href="{{ route('school.fees.fee-payment') }}" class="menu-link">
                        <div data-i18n="Without menu">Fee Payment</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item @if(request()->segment(2) == 'fees-history') active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon bx bx-bell' ></i>
                <div data-i18n="Layouts">History</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->segment(3) == 'fee-payment-history' ? 'active' : '' }}">
                    <a href="{{ route('school.fees.fee-payment-history') }}" class="menu-link">
                        <div data-i18n="Without menu">Fee Payment History</div>
                    </a>
                </li>

            </ul>
        </li>
        
        
        <li class="menu-item @if(request()->segment(2) == 'refferal-data') active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon bx bx-bell' ></i>
                <div data-i18n="Layouts">Refferal</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->segment(3) == 'refferal-data' ? 'active' : '' }}">
                    <a href="{{ route('school.fees.refferal-data') }}" class="menu-link">
                        <div data-i18n="Without menu">Refferal</div>
                    </a>
                </li>

            </ul>
        </li>
        
        {{--  @if(canHaveRole('List of Study Material'))
        <li class="menu-item @if(request()->segment(2) == 'study-material') active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon bx bx-file-blank'></i>
                <div data-i18n="Layouts">Study Material</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->segment(3) == 'view-content' ? 'active' : '' }}">
                    <a href="{{ route('school.studyMaterial.view-content') }}" class="menu-link">
                        <div data-i18n="Without menu">Upload Content</div>
                    </a>
                </li>
            </ul>
        </li>
        @endif

        @if(canHaveRole('List of Time Range') OR canHaveRole('List of Time Range Period') OR canHaveRole('List of Assign Period'))
        <li class="menu-item @if(request()->segment(2) == 'time-table') active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon bx bx-time-five' ></i>
                <div data-i18n="Layouts">Timetable</div>
            </a>

            <ul class="menu-sub">
                @if(canHaveRole('List of Time Range'))
                <li class="menu-item {{ request()->segment(3) == 'setting' ? 'active' : '' }}">
                    <a href="{{ route('school.timetable.setting') }}" class="menu-link">
                        <div data-i18n="Without menu">Time Range</div>
                    </a>
                </li>
                @endif
                @if(canHaveRole('List of Time Range Period'))
                <li class="menu-item {{ request()->segment(3) == 'periods' ? 'active' : '' }}">
                    <a href="{{ route('school.timetable.periods') }}" class="menu-link">
                        <div data-i18n="Without menu">Time Range Periods</div>
                    </a>
                </li>
                @endif
                @if(canHaveRole('List of Assign Period'))
                <li class="menu-item {{ request()->segment(3) == 'assign-periods' ? 'active' : '' }}">
                    <a href="{{ route('school.timetable.assign_periods') }}" class="menu-link">
                        <div data-i18n="Without menu">Assign Period</div>
                    </a>
                </li>
                @endif

                <li class="menu-item {{ request()->segment(3) == 'teachers' ? 'active' : '' }}">
                    <a href="{{ route('school.timetable.teacher-timetable') }}" class="menu-link">
                        <div data-i18n="Without menu">Teacher Time Table</div>
                    </a>
                </li>
            </ul>
        </li>
        @endif

        <li class="menu-item @if(request()->segment(2) == 'fees') active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon bx bx-bell' ></i>
                <div data-i18n="Layouts">Fees</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->segment(3) == 'fee-structure' ? 'active' : '' }}">
                    <a href="{{ route('school.fees.fee-structure') }}" class="menu-link">
                        <div data-i18n="Without menu">Fee Structure</div>
                    </a>
                </li>
                <li class="menu-item {{ request()->segment(3) == 'fee-payment' ? 'active' : '' }}">
                    <a href="{{ route('school.fees.fee-payment') }}" class="menu-link">
                        <div data-i18n="Without menu">Fee Payment</div>
                    </a>
                </li>
            </ul>
        </li>

        @if(canHaveRole('List of Push Notification'))
        <li class="menu-item @if(request()->segment(2) == 'notifications') active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon bx bx-bell' ></i>
                <div data-i18n="Layouts">Notifications</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->segment(2) == 'notifications' ? 'active' : '' }}">
                    <a href="{{ url('school/notifications') }}" class="menu-link">
                        <div data-i18n="Without menu">Push Notification</div>
                    </a>
                </li>
            </ul>
        </li>
        @endif

        @if(canHaveRole('List of Exam') OR canHaveRole('List of Syllabus') OR canHaveRole('List of Exam Time Sheet'))
        <li class="menu-item @if(request()->segment(2) == 'exams') active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon bx bx-food-menu'></i>
                <div data-i18n="Layouts">Exams</div>
            </a>

            <ul class="menu-sub">
                @if(canHaveRole('List of Exam'))
                <li class="menu-item {{ request()->segment(3) == 'create-exam' ? 'active' : '' }}">
                    <a href="{{ route('school.exams.create-exam') }}" class="menu-link">
                        <div data-i18n="Without menu">Create Exam</div>
                    </a>
                </li>
                @endif
                @if(canHaveRole('List of Syllabus'))
                <li class="menu-item {{ request()->segment(3) == 'create-syllabus' ? 'active' : '' }}">
                    <a href="{{ route('school.exams.create-syllabus') }}" class="menu-link">
                        <div data-i18n="Without menu">Create Syllabus</div>
                    </a>
                </li>
                @endif
                @if(canHaveRole('List of Exam Time Sheet'))
                <li class="menu-item {{ request()->segment(3) == 'exam-timetable' ? 'active' : '' }}">
                    <a href="{{ route('school.exam-timetable') }}" class="menu-link">
                        <div data-i18n="Without menu">Exam TimeSheet</div>
                    </a>
                </li>
                @endif
            </ul>
        </li>
        @endif
        @if(canHaveRole('List of Result'))
        <li class="menu-item @if(request()->segment(2) == 'results') active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon bx bx-food-menu'></i>
                <div data-i18n="Layouts">Result</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->segment(3) == 'view' ? 'active' : '' }}">
                    <a href="{{ route('school.results.index') }}" class="menu-link">
                        <div data-i18n="Without menu">View Result</div>
                    </a>
                </li>
            </ul>
        </li>
        @endif

        @if(canHaveRole('List of Attendance'))
        <li class="menu-item @if(request()->segment(2) == 'attendances') active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon bx bx-food-menu'></i>
                <div data-i18n="Layouts">Attendance</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item {{ request()->segment(3) == 'view-attendance' ? 'active' : '' }}">
                    <a href="{{ route('school.attendances.view-attendance') }}" class="menu-link">
                        <div data-i18n="Without menu">View Attendance</div>
                    </a>
                </li>
            </ul>
        </li>
        @endif

        <li class="menu-item {{ request()->segment(3) == 'home-work' ? 'active' : '' }}">
            <a href="{{ route('school.resources.home-work') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Home Work</div>
            </a>
        </li>

        <li class="menu-item {{ request()->segment(2) == 'leave-applications' ? 'active' : '' }}">
            <a href="{{ route('school.leave-applications') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Leave Applications</div>
            </a>
        </li>

        <li class="menu-item {{ request()->segment(2) == 'student-leave-applications' ? 'active' : '' }}">
            <a href="{{ route('school.student-leave-applications') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Student Leave Applications</div>
            </a>
        </li>

        <li class="menu-item {{ request()->segment(2) == 'view-all-session' ? 'active' : '' }}">
            <a href="{{ route('school.view-all-session') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Session</div>
            </a>
        </li>
        <li class="menu-item {{ request()->segment(2) == 'migrations' ? 'active' : '' }}">
            <a href="{{ route('school.migrations') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Migration</div>
            </a>
        </li>

        @if(canHaveRole('List of Roles') OR canHaveRole('List of Admin Users'))
        <li class="menu-item @if(request()->segment(2) == 'roles') active open @endif">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon bx bx-food-menu'></i>
                <div data-i18n="Layouts">Manage Roles</div>
            </a>

            <ul class="menu-sub">
                @if(canHaveRole('List of Roles'))
                <li class="menu-item {{ request()->is('permissions') ? 'active' : '' }}">
                    <a href="{{ route('school.permissions') }}" class="menu-link ">

                        Permissions
                    </a>
                </li>
                <li class="menu-item {{ (request()->segment(2) == 'roles') ? 'active' : '' }}">
                    <a href="{{ route('school.roles') }}" class="menu-link ">
                        Roles
                    </a>
                </li>
                @endif
                @if(canHaveRole('List of Admin Users'))
                <li class="menu-item {{ request()->is('permissions') ? 'active' : '' }}">
                    <a href="{{ route('school.users') }}" class="menu-link ">
                        Admin Users
                    </a>
                </li>
                @endif
            </ul>
        </li>
        @endif  --}}


    </ul>
</aside>
@push('footer-script')
    <script>
        // Add active class to the current button (highlight it)
        var header = document.getElementById("sidebar_btn");
        var btns = header.getElementsByClassName("menu-item");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace("active", "");
                this.className += " active";
            });
        }
    </script>
@endpush
