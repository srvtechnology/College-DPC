<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ParentController;
use App\Http\Controllers\API\StudentController;
use App\Http\Controllers\API\Auth\UserController;
use App\Http\Controllers\API\StudyMaterialController;
use App\Http\Controllers\API\Teacher\TeacherController;
use App\Http\Controllers\API\Teacher\AttendanceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::controller(UserController::class)->group(function () {
//     Route::post('/check-school', 'checkSchool');
//     Route::post('/login', 'login');
//     Route::post('/forgot-password', 'forgotPassword');
//     Route::post('/reset-password', 'resetPassword');
//     Route::post('/notification-list', 'notification_list');
//     Route::post('/students-list', 'students_list');
//     Route::post('/student-fee-payment/check', 'student_fee_payment_check');
// });

// Route::middleware('auth:api')->as('api.school.')->group(function () {
//     Route::controller(StudyMaterialController::class)->group(function () {
//         Route::get('/study-material/get-classes', 'getClasses');
//         Route::post('/study-material/get-subjects-by-class', 'getSubjectsByClass');
//         Route::post('/study-material/store', 'store');
//         Route::get('/study-material/view-all-content', 'viewAllContent');
//     });

//     Route::controller(StudentController::class)->group(function () {
//         Route::get('/student/detail', 'detail');
//         Route::get("/student/attendance/view","viewAttendance");
//         Route::post('/student/home-work/view', 'viewHomeWork');
//         Route::get('/student/syllabus/view', 'viewSyllabus');
//         Route::post('/student/resources/view', 'viewResources');
//         Route::get('/student/time-table/view', 'viewTimeTable');
//         Route::post('/student/attendance/apply-leave', 'applyLeave');
//         Route::get('/student/view-leave-applications', 'viewLeaveApplication');

//         Route::post('/student/result/view', 'viewResult');
//         Route::get('/student/exams/view-all', 'viewAllExam');

//         Route::get('/student/exams/all-exam-against-subjects', 'allExamAgainstSubjects');

//         Route::get('/student/exams/list', 'examList');
//         Route::post('/student/exams/detail', 'examDetail');
//         Route::post('/student/exams/syllabus-list', 'examSysllabusList');
//         Route::post('/student/exams/syllabus-detail', 'examSysllabusDetail');
//         Route::get('/student/view-teacher/list', 'viewTeacherList');
//     });

//     Route::controller(TeacherController::class)->group(function () {
//         Route::get('/teacher/detail', 'detail');

//         //Teacher Leave
//         Route::post('/teacher/attendance/apply-leave', 'applyLeave');
//         Route::get('/teacher/view-leave-applications', 'viewLeaveApplication');
//         Route::get('/teacher/view-student-leave-applications', 'viewStudentLeaveApplication');
//         Route::post('/teacher/attendance/apply-student-leave', 'applyStudenLeaveApplication');

//         //HomeWork
//         Route::post('/teacher/home-work/create', 'createHomeWork');
//         Route::post('/teacher/home-work/view', 'viewHomeWork');
//         Route::post('/teacher/home-work/edit', 'editHomeWork');
//         Route::post('/teacher/home-work/delete', 'deleteHomeWork');
//         Route::post('/teacher/home-work/change-status', 'changeStatusHomeWork');

//         //Syllabus
//         Route::post('/teacher/syllabus/create', 'createSyllabus');
//         Route::post('/teacher/syllabus/view', 'viewSyllabus');
//         Route::post('/teacher/syllabus/edit', 'editSyllabus');
//         Route::post('/teacher/syllabus/delete', 'deleteSyllabus');

//         //Resources
//         Route::post('/teacher/resources/view', 'viewResources');
//         Route::post('/teacher/resources/detail', 'detailResources');

//         //TimeTable
//         Route::post('/teacher/time-table/view', 'viewTimeTable');
//         Route::post('/teacher/time-table/teacher', 'viewTeacherTimeTable');

//         //Exam
//         Route::get('/teacher/exams/view-all', 'viewAllExam');
//         Route::get('/teacher/exams/list', 'examList');
//         Route::post('/teacher/exams/detail', 'examDetail');
//         Route::post('/teacher/exams/syllabus-list', 'examSysllabusList');
//         Route::post('/teacher/exams/syllabus-detail', 'examSysllabusDetail');

//         //Result
//         Route::post('/teacher/result/create', 'createResult');
//         Route::post('/teacher/result/view', 'viewResult');
//     });

//     Route::controller(ParentController::class)->group(function () {
//         Route::get('/parent/detail', 'detail');
//         Route::get('/parent/get-children', 'getChildrenDetail');
//         Route::post('/parent/home-work/view', 'viewHomeWork');
//         Route::post('/parent/syllabus/view', 'viewSyllabus');
//         Route::post('/parent/time-table/view', 'viewTimeTable');
//         Route::post('/parent/attendance/view', 'viewAttendance');
//         Route::post('/parent/resources/view', 'viewResources');
//         Route::post('/parent/attendance/apply-leave', 'applyLeave');
//         Route::post('/parent/view-leave-applications', 'viewLeaveApplication');

//         Route::post('/parent/result/view', 'viewResult');
//         Route::get('/parent/exams/view-all', 'viewAllExam');

//         Route::post('/parent/exams/all-exam-against-subjects', 'allExamAgainstSubjects');

//         Route::get('/parent/exams/list', 'examList');
//         Route::post('/parent/exams/detail', 'examDetail');
//         Route::post('/parent/exams/syllabus-list', 'examSysllabusList');
//         Route::post('/parent/exams/syllabus-detail', 'examSysllabusDetail');
//     });

//     Route::controller(AttendanceController::class)->group(function () {
//         Route::post('/teacher/attendance/view-all-students', 'viewStudents');
//         Route::post('/teacher/attendance/student-list', 'studentList');
//         Route::post('/teacher/attendance/add-student-attendance', 'addStudentAttendance');
//     });

//     Route::controller(UserController::class)->group(function () {
//         Route::post('/logout', 'logout');
//     });
// });
