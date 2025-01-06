<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/oauth/token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/authorize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.authorize',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.approve',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.deny',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/token/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token.refresh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/clients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/scopes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.scopes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/personal-access-tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'sanctum.csrf-cookie',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/health-check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.healthCheck',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/execute-solution' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.executeSolution',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/_ignition/update-config' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'ignition.updateConfig',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/check-school' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YPmYZLwUg059kNB3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0OEc8D4oT6W9a9IN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/forgot-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8RuDDGynh4ieJFaB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/reset-password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dtLbwye7bVDWxUBB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/notification-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4ChfawYWwuSY6EdD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/students-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0SIigjSDr5ES1m5y',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/student-fee-payment/check' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p8yDNGrd2Nm7ZoQ2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/study-material/get-classes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/study-material/get-subjects-by-class' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::b31BnbUKJBgx5vcn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/study-material/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::1U09kFnlKOlrtSUK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/study-material/view-all-content' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::zsiLI3Tn8aBvMWSg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/student/detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::XRi7hpTibieaDCyM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/student/attendance/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::L77LId8mTGU2bG5l',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/student/home-work/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::Dg0NDBSlYpPBnLO6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/student/syllabus/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::9KhDaILG52ITWbJ6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/student/resources/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::qZFAZwSTbk5o8AOK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/student/time-table/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::Ch1Qvv4CDmg9y6KV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/student/attendance/apply-leave' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::mO2MGMsCSGltPvJe',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/student/view-leave-applications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::j8lrW1Iix6AmPkIf',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/student/result/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::UVvPLfBPL1nbk3ec',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/student/exams/view-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::naQcBLHRNGThOnuk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/student/exams/all-exam-against-subjects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::avyy1QlRE37GD1uU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/student/exams/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::8enVbNcmbBmaxaaP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/student/exams/detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::Wcyn8s84E3RiKb8V',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/student/exams/syllabus-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::vyz8yHjsKfu20ptc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/student/exams/syllabus-detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::LdNb1bkPjQUXz0DR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/student/view-teacher/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::ftPYZhmzZTKy3Cl2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/teacher/detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::ldo7vlwBJ5Q0bcNM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/teacher/attendance/apply-leave' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::SGwXftcgGEEvuTUT',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/teacher/view-leave-applications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::sUy0CMCmfBwIA4bQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/teacher/view-student-leave-applications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::7Wq70MSftpuRScyw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/teacher/attendance/apply-student-leave' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::i6TycwVhchw0LZJs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/teacher/home-work/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::fcHy0lD8QDYS2heS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/teacher/home-work/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::B08mJ7jurmIntEB1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/teacher/home-work/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::T8vLxEFPEPqSd09g',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/teacher/home-work/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::kwOhlinT3fzP9IZa',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/teacher/home-work/change-status' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::sJsrDoHWGciHbjp4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/teacher/syllabus/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::koNJM1HSbD7uAeoK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/teacher/syllabus/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::exB9GrtX5GfZkmzf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/teacher/syllabus/edit' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::eYSCQEBqeU9Im5Wr',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/teacher/syllabus/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::qFa2G78QjtHqZwNF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/teacher/resources/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::Mzk1ghFrre2ZPAE5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/teacher/resources/detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::auD012foaFjsIbDp',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/teacher/time-table/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::h0JhP9u8tYtUkKts',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/teacher/time-table/teacher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::LXEZhW7RZLU0vaxq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/teacher/exams/view-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::tjXZ5OCdqLrz1QFj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/teacher/exams/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::JKRvmwSzqDTLVZDi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/teacher/exams/detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::k2NPRNTWKxtiScW5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/teacher/exams/syllabus-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::bfhd14hghft30AAY',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/teacher/exams/syllabus-detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::Q9dl0Pl7h5RjWcBo',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/teacher/result/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::JciMflPfNSPc74aE',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/teacher/result/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::tkOhXLJtRMMz5F5y',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/parent/detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::2BL7mBTuK9CllGy8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/parent/get-children' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::ZQVwzYX0pYNeWAcg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/parent/home-work/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::Whj05kgTEdvbB8Qc',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/parent/syllabus/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::WdNSnTWJapLsuZSC',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/parent/time-table/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::2aewEbWuXe4d0aa6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/parent/attendance/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::qHNkOAWu8SIhkQI7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/parent/resources/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::Ocz7kIRxOecDT2c9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/parent/attendance/apply-leave' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::1pEgAPjXPW0xRdv3',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/parent/view-leave-applications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::sPSWLZrulSeA6Gcm',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/parent/result/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::GTVGlbfc94WVVPyg',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/parent/exams/view-all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::AGyhYAYPrpTyjAjN',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/parent/exams/all-exam-against-subjects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::TqSt0XQbsK5mHfUB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/parent/exams/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::mc1nOrQ4TiimDVFB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/parent/exams/detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::3xug3p16897yIYst',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/parent/exams/syllabus-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::p2Y7Nc972XiyHaI8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/parent/exams/syllabus-detail' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::ioqnhUaAqhbQ0cp4',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/teacher/attendance/view-all-students' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::XyzqzeYiF9qTkMW5',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/teacher/attendance/student-list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::4MDy3pb7gle7Yzin',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/teacher/attendance/add-student-attendance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::ZsOyI4xaCJSdR5TD',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'api.school.generated::kdBa9c3cyXQ7UeLK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QeZ1hKQHcC4rFzqm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qsRyesMaKGjDf3kf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8A4D3YDHB6IxokiJ',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Mw0PqAnEbf9DHxpn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/schools' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.schools',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/schools/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.schools.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/schools/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.schools.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/schools/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.schools.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/schools/block' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.schools.block',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/schools/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.schools.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/teachers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.teachers',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/students' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.students',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/parents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.parents',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'roles',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add_role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add_role',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/create_role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create_role',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/updaterole' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updaterole',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'users',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add_user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add_user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/create_user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create_user',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'updateuser',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/change_password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'changepassword',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/permissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'permissions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/add_permission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add_permission',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/create_permission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'create_permission',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/update_permission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'update_permission',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/login/process' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.loginProcess',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.password-reset',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/dashboard' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.dashboard',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/time-table/setting' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.timetable.setting',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/time-table/setting/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.timetable.setting.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/time-table/setting/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.timetable.setting.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/time-table/setting/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.timetable.setting.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/time-table/setting/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.timetable.setting.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/time-table/periods' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.timetable.periods',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/time-table/periods/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.timetable.periods.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/time-table/periods/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.timetable.periods.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/time-table/periods/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.timetable.periods.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/time-table/periods/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.timetable.periods.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/time-table/assign-periods' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.timetable.assign_periods',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/time-table/assign-periods/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.timetable.assign_periods.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/time-table/assign-periods/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.timetable.assign_periods.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/time-table/assign-periods/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.timetable.assign_periods.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/time-table/assign-periods/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.timetable.assign_periods.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/time-table/assign-periods/view-timetable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.timetable.assign_periods.view-timetable',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/time-table/teachers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.timetable.teacher-timetable',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/study-material/view-content' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.studyMaterial.view-content',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/study-material/view-content/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.studyMaterial.create-content',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/study-material/view-content/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.studyMaterial.store-content',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/study-material/view-content/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.studyMaterial.update-content',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/study-material/view-content/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.studyMaterial.delete-content',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/sections' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.sections',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/sections/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.sections.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/sections/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.sections.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/sections/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.sections.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/sections/block' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.sections.block',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/sections/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.sections.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/subjects' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.subjects',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/subjects/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.subjects.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/subjects/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.subjects.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/subjects/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.subjects.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/subjects/block' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.subjects.block',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/subjects/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.subjects.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/class' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.class',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/class/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.class.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/class/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.class.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/class/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.class.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/class/block' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.class.block',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/class/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.class.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/designations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.designations',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/designations/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.designations.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/designations/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.designations.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/designations/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.designations.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/designations/block' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.designations.block',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/designations/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.designations.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/teachers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.teachers',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/teachers/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.teachers.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/teachers/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.teachers.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/teachers/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.teachers.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/teachers/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.teachers.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/teachers/assign-class-teacher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.teachers.assign_class_teacher',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/teachers/update-assign-class-teacher' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.teachers.update_assign_class_teacher',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/students' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.students',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/students/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.students.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/students/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.students.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/students/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.students.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/students/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.students.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/parents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.parents',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/fees/fee-structure' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.fees.fee-structure',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/fees/fee-structure/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.fees.fee-structure.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/fees/fee-structure/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.fees.fee-structure.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/fees/fee-structure/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.fees.fee-structure.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/fees/fee-structure/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.fees.fee-structure.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/fees/fee-payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.fees.fee-payment',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/fees/fee-payment/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.fees.fee-payment.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/fees/fee-payment/specific/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.fees.fee-payment.specific.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/fees/fee-payment/specific/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.fees.fee-payment.specific.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/fees/fee-payment/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.fees.fee-payment.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.notification-index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/notifications/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.notification-create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/notifications/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.save-notification',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/notification_delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.notification-delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/notifications/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.update-notification',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/exams/create-exam' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.exams.create-exam',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/exams/create-exam/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.exams.create-exam.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/exams/create-exam/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.exams.create-exam.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/exams/create-exam/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.exams.create-exam.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/exams/create-exam/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.exams.create-exam.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/exams/create-syllabus' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.exams.create-syllabus',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/exams/create-syllabus/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.exams.create-syllabus.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/exams/create-syllabus/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.exams.create-syllabus.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/exams/create-syllabus/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.exams.create-syllabus.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/exams/create-syllabus/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.exams.create-syllabus.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/exams/exam-timetable' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.exam-timetable',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/exams/exam-timetable/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.exam-timetable.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/exams/exam-timetable/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.exam-timetable.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/exams/exam-timetable/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.exam-timetable.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/exams/exam-timetable/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.exam-timetable.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/exams/exam-timetable/view-timesheet' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.exam-timetable.viewTimesheet',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/results/view' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.results.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/results/download-results-pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.attendances.downloadResultPDF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/attendances/view-attendance' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.attendances.view-attendance',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/attendances/download-pdf' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.attendances.downloadPDF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/leave-applications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.leave-applications',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/leave-applications/accept' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.leave-applications.accept',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/leave-applications/rejected' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.leave-applications.rejected',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/student-leave-applications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.student-leave-applications',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/student-leave-applications/accept' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.student-leave-applications.accept',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/student-leave-applications/rejected' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.student-leave-applications.rejected',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/resources/home-work' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.resources.home-work',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/view-all-session' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.view-all-session',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/view-all-session/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.view-all-session.create',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/view-all-session/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.view-all-session.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/view-all-session/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.view-all-session.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/view-all-session/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.view-all-session.delete',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/view-all-session/block' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.view-all-session.block',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/migrations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.migrations',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/migrations/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.migrations.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.roles',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/add_role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.add_role',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/create_role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.create_role',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/delete_role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.delete_role',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/updaterole' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.updaterole',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.users',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/add_user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.add_user',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/create_user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.create_user',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/delete_completeuser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.delete_completeuser',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.updateuser',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/permissions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.permissions',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/add_permission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.add_permission',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/create_permission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.create_permission',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/delete' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.delete_permission',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/update_permission' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.update_permission',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/school/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/oauth/(?|tokens/([^/]++)(*:32)|clients/([^/]++)(?|(*:58))|personal\\-access\\-tokens/([^/]++)(*:99))|/p(?|a(?|ssword/reset/([^/]++)(*:137)|rents/([^/]++)/detail(*:166))|rofile/([^/]++)(*:190))|/s(?|chool(?|s/([^/]++)/(?|edit(*:230)|detail(*:244)|students\\-list(*:266)|teachers\\-list(*:288)|parents\\-list(*:309))|/(?|t(?|ime\\-table/(?|setting/([^/]++)/edit(*:361)|periods/(?|([^/]++)/(?|detail(*:398)|edit(*:410))|get\\-(?|date\\-range/([^/]++)(*:447)|time\\-range/([^/]++)/([^/]++)(*:484)))|assign\\-periods/(?|get\\-(?|all\\-data\\-by\\-class/([^/]++)(*:550)|subject\\-by\\-teacher/([^/]++)(*:587)|periods\\-by\\-class\\-range/([^/]++)(*:629))|([^/]++)/edit(*:651)))|eachers/(?|([^/]++)/(?|detail(*:690)|edit(*:702))|get\\-class(?|/([^/]++)(*:733)|\\-section/([^/]++)/([^/]++)(*:768))))|s(?|tud(?|y\\-material/(?|get\\-subjects\\-byclass/([^/]++)(*:835)|view\\-content/([^/]++)/(?|detail(*:875)|edit(*:887)))|ents/(?|create/get\\-(?|s(?|ections\\-by\\-class/([^/]++)(*:951)|taff\\-info/([^/]++)(*:978))|parent\\-by\\-student/([^/]++)(*:1015))|([^/]++)/(?|detail(*:1043)|edit(*:1056))))|ections/([^/]++)/edit(*:1089)|ubjects/([^/]++)/edit(*:1119))|class/([^/]++)/(?|edit(*:1151)|detail(*:1166))|designations/([^/]++)/edit(*:1202)|parents/([^/]++)/detail(*:1234)|fees/fee\\-(?|structure/([^/]++)/edit(*:1279)|payment/([^/]++)/(?|create(*:1314)|detail(*:1329)|edit(*:1342)))|get\\-students\\-by\\-class\\-id/([^/]++)(*:1390)|notification(?|_info/([^/]++)(*:1428)|s/(?|([^/]++)/edit(*:1455)|send/([^/]++)(*:1477)))|e(?|xams/(?|create\\-(?|exam/([^/]++)/(?|edit(*:1532)|detail(*:1547))|syllabus/([^/]++)/(?|edit(*:1582)|detail(*:1597)))|exam\\-timetable/(?|([^/]++)/(?|edit(*:1643)|detail(*:1658))|get\\-(?|class\\-by\\-exam/([^/]++)(*:1700)|exam\\-date/([^/]++)(*:1728))))|dit_(?|role/([^/]++)(*:1760)|user/([^/]++)(*:1782)|permission/([^/]++)(*:1810)))|resources/home\\-work/([^/]++)/detail(*:1857)|view\\-all\\-session/([^/]++)/edit(*:1898)))|tudents/([^/]++)/detail(*:1932))|/teachers/([^/]++)/detail(*:1967)|/add_profile/([^/]++)(*:1997)|/delete(?|_(?|user/([^/]++)(*:2033)|role/([^/]++)(*:2055)|completeuser/([^/]++)(*:2085))|/([^/]++)(*:2104))|/edit_(?|role/([^/]++)(*:2136)|user/([^/]++)(*:2158)|permission/([^/]++)(*:2186))|/manage_password/([^/]++)(*:2221))/?$}sDu',
    ),
    3 => 
    array (
      32 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      58 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.update',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.destroy',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      99 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      137 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      166 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.parents.detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      190 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'profile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      230 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.schools.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      244 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.schools.detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      266 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.schools.students-list',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      288 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.schools.teachers-list',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      309 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.schools.parents-list',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      361 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.timetable.setting.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      398 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.timetable.periods.detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      410 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.timetable.periods.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      447 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.timetable.periods.get-date-range',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      484 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.timetable.periods.get-time-range',
          ),
          1 => 
          array (
            0 => 'class_id',
            1 => 'day_range',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      550 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.timetable.assign_periods.get-all-data-by-class',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      587 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.timetable.assign_periods.get-subject-by-class',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      629 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      651 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.timetable.assign_periods.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      690 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.teachers.detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      702 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.teachers.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      733 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.generated::qJt6tAoxSLXzxzNX',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      768 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.generated::Z7UGioa8nvuZmGrr',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'staff_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      835 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.studyMaterial.getSubjectsByClass',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      875 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.studyMaterial.detail-content',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      887 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.studyMaterial.edit-content',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      951 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.students.getSectionByClass',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      978 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.students.getStaffInfo',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1015 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.students.getParentByStudent',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1043 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.students.detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1056 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.students.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1089 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.sections.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1119 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.subjects.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1151 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.class.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1166 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.class.detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1202 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.designations.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1234 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.parents.detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1279 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.fees.fee-structure.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1314 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.fees.fee-payment.create',
          ),
          1 => 
          array (
            0 => 'student_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1329 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.fees.fee-payment.detail',
          ),
          1 => 
          array (
            0 => 'student_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1342 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.fees.fee-payment.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1390 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.generated::pm1mBhiKDOCXLiPV',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1428 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.notification-view',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1455 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.notification-edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1477 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.send-notification',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1532 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.exams.create-exam.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1547 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.exams.create-exam.detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1582 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.exams.create-syllabus.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1597 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.exams.create-syllabus.detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1643 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.exam-timetable.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1658 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.exam-timetable.detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1700 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.generated::M5kbhlI5FhVX3J88',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1728 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.generated::QczSwLskLx5b4KNV',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1760 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.edit_role',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1782 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.edit_user',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1810 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.edit_permission',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1857 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.resources.home-work.detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1898 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'school.view-all-session.edit',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1932 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.students.detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1967 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'superadmin.teachers.detail',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1997 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'add_profile',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2033 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete_user',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2055 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete_role',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2085 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete_completeuser',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2104 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'delete_permission',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2136 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit_role',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2158 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit_user',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2186 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'edit_permission',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2221 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'manage_password',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'passport.token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token',
      'action' => 
      array (
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'as' => 'passport.token',
        'middleware' => 'throttle',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.authorize' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'as' => 'passport.authorizations.authorize',
        'middleware' => 'web',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.token.refresh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'as' => 'passport.token.refresh',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'as' => 'passport.authorizations.approve',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.deny' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'as' => 'passport.authorizations.deny',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'as' => 'passport.tokens.index',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'as' => 'passport.tokens.destroy',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'as' => 'passport.clients.index',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'as' => 'passport.clients.store',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'as' => 'passport.clients.update',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'as' => 'passport.clients.destroy',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.scopes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/scopes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'as' => 'passport.scopes.index',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'as' => 'passport.personal.tokens.index',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'as' => 'passport.personal.tokens.store',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/personal-access-tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:web',
        ),
        'uses' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'as' => 'passport.personal.tokens.destroy',
        'controller' => 'Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'namespace' => 'Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'sanctum.csrf-cookie' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'sanctum.csrf-cookie',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.healthCheck' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '_ignition/health-check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\HealthCheckController',
        'as' => 'ignition.healthCheck',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.executeSolution' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/execute-solution',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\ExecuteSolutionController',
        'as' => 'ignition.executeSolution',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'ignition.updateConfig' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => '_ignition/update-config',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'Spatie\\LaravelIgnition\\Http\\Middleware\\RunnableSolutionsEnabled',
        ),
        'uses' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController@__invoke',
        'controller' => 'Spatie\\LaravelIgnition\\Http\\Controllers\\UpdateConfigController',
        'as' => 'ignition.updateConfig',
        'namespace' => NULL,
        'prefix' => '_ignition',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YPmYZLwUg059kNB3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/check-school',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Auth\\UserController@checkSchool',
        'controller' => 'App\\Http\\Controllers\\API\\Auth\\UserController@checkSchool',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::YPmYZLwUg059kNB3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0OEc8D4oT6W9a9IN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Auth\\UserController@login',
        'controller' => 'App\\Http\\Controllers\\API\\Auth\\UserController@login',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::0OEc8D4oT6W9a9IN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8RuDDGynh4ieJFaB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/forgot-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Auth\\UserController@forgotPassword',
        'controller' => 'App\\Http\\Controllers\\API\\Auth\\UserController@forgotPassword',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::8RuDDGynh4ieJFaB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dtLbwye7bVDWxUBB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/reset-password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Auth\\UserController@resetPassword',
        'controller' => 'App\\Http\\Controllers\\API\\Auth\\UserController@resetPassword',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::dtLbwye7bVDWxUBB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4ChfawYWwuSY6EdD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/notification-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Auth\\UserController@notification_list',
        'controller' => 'App\\Http\\Controllers\\API\\Auth\\UserController@notification_list',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::4ChfawYWwuSY6EdD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0SIigjSDr5ES1m5y' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/students-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Auth\\UserController@students_list',
        'controller' => 'App\\Http\\Controllers\\API\\Auth\\UserController@students_list',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::0SIigjSDr5ES1m5y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::p8yDNGrd2Nm7ZoQ2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/student-fee-payment/check',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Auth\\UserController@student_fee_payment_check',
        'controller' => 'App\\Http\\Controllers\\API\\Auth\\UserController@student_fee_payment_check',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::p8yDNGrd2Nm7ZoQ2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/study-material/get-classes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\StudyMaterialController@getClasses',
        'controller' => 'App\\Http\\Controllers\\API\\StudyMaterialController@getClasses',
        'as' => 'api.school.',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::b31BnbUKJBgx5vcn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/study-material/get-subjects-by-class',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\StudyMaterialController@getSubjectsByClass',
        'controller' => 'App\\Http\\Controllers\\API\\StudyMaterialController@getSubjectsByClass',
        'as' => 'api.school.generated::b31BnbUKJBgx5vcn',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::1U09kFnlKOlrtSUK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/study-material/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\StudyMaterialController@store',
        'controller' => 'App\\Http\\Controllers\\API\\StudyMaterialController@store',
        'as' => 'api.school.generated::1U09kFnlKOlrtSUK',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::zsiLI3Tn8aBvMWSg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/study-material/view-all-content',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\StudyMaterialController@viewAllContent',
        'controller' => 'App\\Http\\Controllers\\API\\StudyMaterialController@viewAllContent',
        'as' => 'api.school.generated::zsiLI3Tn8aBvMWSg',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::XRi7hpTibieaDCyM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/student/detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\StudentController@detail',
        'controller' => 'App\\Http\\Controllers\\API\\StudentController@detail',
        'as' => 'api.school.generated::XRi7hpTibieaDCyM',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::L77LId8mTGU2bG5l' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/student/attendance/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\StudentController@viewAttendance',
        'controller' => 'App\\Http\\Controllers\\API\\StudentController@viewAttendance',
        'as' => 'api.school.generated::L77LId8mTGU2bG5l',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::Dg0NDBSlYpPBnLO6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/student/home-work/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\StudentController@viewHomeWork',
        'controller' => 'App\\Http\\Controllers\\API\\StudentController@viewHomeWork',
        'as' => 'api.school.generated::Dg0NDBSlYpPBnLO6',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::9KhDaILG52ITWbJ6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/student/syllabus/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\StudentController@viewSyllabus',
        'controller' => 'App\\Http\\Controllers\\API\\StudentController@viewSyllabus',
        'as' => 'api.school.generated::9KhDaILG52ITWbJ6',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::qZFAZwSTbk5o8AOK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/student/resources/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\StudentController@viewResources',
        'controller' => 'App\\Http\\Controllers\\API\\StudentController@viewResources',
        'as' => 'api.school.generated::qZFAZwSTbk5o8AOK',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::Ch1Qvv4CDmg9y6KV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/student/time-table/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\StudentController@viewTimeTable',
        'controller' => 'App\\Http\\Controllers\\API\\StudentController@viewTimeTable',
        'as' => 'api.school.generated::Ch1Qvv4CDmg9y6KV',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::mO2MGMsCSGltPvJe' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/student/attendance/apply-leave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\StudentController@applyLeave',
        'controller' => 'App\\Http\\Controllers\\API\\StudentController@applyLeave',
        'as' => 'api.school.generated::mO2MGMsCSGltPvJe',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::j8lrW1Iix6AmPkIf' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/student/view-leave-applications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\StudentController@viewLeaveApplication',
        'controller' => 'App\\Http\\Controllers\\API\\StudentController@viewLeaveApplication',
        'as' => 'api.school.generated::j8lrW1Iix6AmPkIf',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::UVvPLfBPL1nbk3ec' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/student/result/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\StudentController@viewResult',
        'controller' => 'App\\Http\\Controllers\\API\\StudentController@viewResult',
        'as' => 'api.school.generated::UVvPLfBPL1nbk3ec',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::naQcBLHRNGThOnuk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/student/exams/view-all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\StudentController@viewAllExam',
        'controller' => 'App\\Http\\Controllers\\API\\StudentController@viewAllExam',
        'as' => 'api.school.generated::naQcBLHRNGThOnuk',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::avyy1QlRE37GD1uU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/student/exams/all-exam-against-subjects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\StudentController@allExamAgainstSubjects',
        'controller' => 'App\\Http\\Controllers\\API\\StudentController@allExamAgainstSubjects',
        'as' => 'api.school.generated::avyy1QlRE37GD1uU',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::8enVbNcmbBmaxaaP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/student/exams/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\StudentController@examList',
        'controller' => 'App\\Http\\Controllers\\API\\StudentController@examList',
        'as' => 'api.school.generated::8enVbNcmbBmaxaaP',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::Wcyn8s84E3RiKb8V' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/student/exams/detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\StudentController@examDetail',
        'controller' => 'App\\Http\\Controllers\\API\\StudentController@examDetail',
        'as' => 'api.school.generated::Wcyn8s84E3RiKb8V',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::vyz8yHjsKfu20ptc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/student/exams/syllabus-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\StudentController@examSysllabusList',
        'controller' => 'App\\Http\\Controllers\\API\\StudentController@examSysllabusList',
        'as' => 'api.school.generated::vyz8yHjsKfu20ptc',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::LdNb1bkPjQUXz0DR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/student/exams/syllabus-detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\StudentController@examSysllabusDetail',
        'controller' => 'App\\Http\\Controllers\\API\\StudentController@examSysllabusDetail',
        'as' => 'api.school.generated::LdNb1bkPjQUXz0DR',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::ftPYZhmzZTKy3Cl2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/student/view-teacher/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\StudentController@viewTeacherList',
        'controller' => 'App\\Http\\Controllers\\API\\StudentController@viewTeacherList',
        'as' => 'api.school.generated::ftPYZhmzZTKy3Cl2',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::ldo7vlwBJ5Q0bcNM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/teacher/detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@detail',
        'controller' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@detail',
        'as' => 'api.school.generated::ldo7vlwBJ5Q0bcNM',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::SGwXftcgGEEvuTUT' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/teacher/attendance/apply-leave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@applyLeave',
        'controller' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@applyLeave',
        'as' => 'api.school.generated::SGwXftcgGEEvuTUT',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::sUy0CMCmfBwIA4bQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/teacher/view-leave-applications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@viewLeaveApplication',
        'controller' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@viewLeaveApplication',
        'as' => 'api.school.generated::sUy0CMCmfBwIA4bQ',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::7Wq70MSftpuRScyw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/teacher/view-student-leave-applications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@viewStudentLeaveApplication',
        'controller' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@viewStudentLeaveApplication',
        'as' => 'api.school.generated::7Wq70MSftpuRScyw',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::i6TycwVhchw0LZJs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/teacher/attendance/apply-student-leave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@applyStudenLeaveApplication',
        'controller' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@applyStudenLeaveApplication',
        'as' => 'api.school.generated::i6TycwVhchw0LZJs',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::fcHy0lD8QDYS2heS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/teacher/home-work/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@createHomeWork',
        'controller' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@createHomeWork',
        'as' => 'api.school.generated::fcHy0lD8QDYS2heS',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::B08mJ7jurmIntEB1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/teacher/home-work/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@viewHomeWork',
        'controller' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@viewHomeWork',
        'as' => 'api.school.generated::B08mJ7jurmIntEB1',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::T8vLxEFPEPqSd09g' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/teacher/home-work/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@editHomeWork',
        'controller' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@editHomeWork',
        'as' => 'api.school.generated::T8vLxEFPEPqSd09g',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::kwOhlinT3fzP9IZa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/teacher/home-work/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@deleteHomeWork',
        'controller' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@deleteHomeWork',
        'as' => 'api.school.generated::kwOhlinT3fzP9IZa',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::sJsrDoHWGciHbjp4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/teacher/home-work/change-status',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@changeStatusHomeWork',
        'controller' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@changeStatusHomeWork',
        'as' => 'api.school.generated::sJsrDoHWGciHbjp4',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::koNJM1HSbD7uAeoK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/teacher/syllabus/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@createSyllabus',
        'controller' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@createSyllabus',
        'as' => 'api.school.generated::koNJM1HSbD7uAeoK',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::exB9GrtX5GfZkmzf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/teacher/syllabus/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@viewSyllabus',
        'controller' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@viewSyllabus',
        'as' => 'api.school.generated::exB9GrtX5GfZkmzf',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::eYSCQEBqeU9Im5Wr' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/teacher/syllabus/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@editSyllabus',
        'controller' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@editSyllabus',
        'as' => 'api.school.generated::eYSCQEBqeU9Im5Wr',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::qFa2G78QjtHqZwNF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/teacher/syllabus/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@deleteSyllabus',
        'controller' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@deleteSyllabus',
        'as' => 'api.school.generated::qFa2G78QjtHqZwNF',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::Mzk1ghFrre2ZPAE5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/teacher/resources/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@viewResources',
        'controller' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@viewResources',
        'as' => 'api.school.generated::Mzk1ghFrre2ZPAE5',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::auD012foaFjsIbDp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/teacher/resources/detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@detailResources',
        'controller' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@detailResources',
        'as' => 'api.school.generated::auD012foaFjsIbDp',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::h0JhP9u8tYtUkKts' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/teacher/time-table/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@viewTimeTable',
        'controller' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@viewTimeTable',
        'as' => 'api.school.generated::h0JhP9u8tYtUkKts',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::LXEZhW7RZLU0vaxq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/teacher/time-table/teacher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@viewTeacherTimeTable',
        'controller' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@viewTeacherTimeTable',
        'as' => 'api.school.generated::LXEZhW7RZLU0vaxq',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::tjXZ5OCdqLrz1QFj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/teacher/exams/view-all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@viewAllExam',
        'controller' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@viewAllExam',
        'as' => 'api.school.generated::tjXZ5OCdqLrz1QFj',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::JKRvmwSzqDTLVZDi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/teacher/exams/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@examList',
        'controller' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@examList',
        'as' => 'api.school.generated::JKRvmwSzqDTLVZDi',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::k2NPRNTWKxtiScW5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/teacher/exams/detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@examDetail',
        'controller' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@examDetail',
        'as' => 'api.school.generated::k2NPRNTWKxtiScW5',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::bfhd14hghft30AAY' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/teacher/exams/syllabus-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@examSysllabusList',
        'controller' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@examSysllabusList',
        'as' => 'api.school.generated::bfhd14hghft30AAY',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::Q9dl0Pl7h5RjWcBo' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/teacher/exams/syllabus-detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@examSysllabusDetail',
        'controller' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@examSysllabusDetail',
        'as' => 'api.school.generated::Q9dl0Pl7h5RjWcBo',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::JciMflPfNSPc74aE' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/teacher/result/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@createResult',
        'controller' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@createResult',
        'as' => 'api.school.generated::JciMflPfNSPc74aE',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::tkOhXLJtRMMz5F5y' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/teacher/result/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@viewResult',
        'controller' => 'App\\Http\\Controllers\\API\\Teacher\\TeacherController@viewResult',
        'as' => 'api.school.generated::tkOhXLJtRMMz5F5y',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::2BL7mBTuK9CllGy8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/parent/detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ParentController@detail',
        'controller' => 'App\\Http\\Controllers\\API\\ParentController@detail',
        'as' => 'api.school.generated::2BL7mBTuK9CllGy8',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::ZQVwzYX0pYNeWAcg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/parent/get-children',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ParentController@getChildrenDetail',
        'controller' => 'App\\Http\\Controllers\\API\\ParentController@getChildrenDetail',
        'as' => 'api.school.generated::ZQVwzYX0pYNeWAcg',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::Whj05kgTEdvbB8Qc' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/parent/home-work/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ParentController@viewHomeWork',
        'controller' => 'App\\Http\\Controllers\\API\\ParentController@viewHomeWork',
        'as' => 'api.school.generated::Whj05kgTEdvbB8Qc',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::WdNSnTWJapLsuZSC' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/parent/syllabus/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ParentController@viewSyllabus',
        'controller' => 'App\\Http\\Controllers\\API\\ParentController@viewSyllabus',
        'as' => 'api.school.generated::WdNSnTWJapLsuZSC',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::2aewEbWuXe4d0aa6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/parent/time-table/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ParentController@viewTimeTable',
        'controller' => 'App\\Http\\Controllers\\API\\ParentController@viewTimeTable',
        'as' => 'api.school.generated::2aewEbWuXe4d0aa6',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::qHNkOAWu8SIhkQI7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/parent/attendance/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ParentController@viewAttendance',
        'controller' => 'App\\Http\\Controllers\\API\\ParentController@viewAttendance',
        'as' => 'api.school.generated::qHNkOAWu8SIhkQI7',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::Ocz7kIRxOecDT2c9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/parent/resources/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ParentController@viewResources',
        'controller' => 'App\\Http\\Controllers\\API\\ParentController@viewResources',
        'as' => 'api.school.generated::Ocz7kIRxOecDT2c9',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::1pEgAPjXPW0xRdv3' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/parent/attendance/apply-leave',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ParentController@applyLeave',
        'controller' => 'App\\Http\\Controllers\\API\\ParentController@applyLeave',
        'as' => 'api.school.generated::1pEgAPjXPW0xRdv3',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::sPSWLZrulSeA6Gcm' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/parent/view-leave-applications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ParentController@viewLeaveApplication',
        'controller' => 'App\\Http\\Controllers\\API\\ParentController@viewLeaveApplication',
        'as' => 'api.school.generated::sPSWLZrulSeA6Gcm',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::GTVGlbfc94WVVPyg' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/parent/result/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ParentController@viewResult',
        'controller' => 'App\\Http\\Controllers\\API\\ParentController@viewResult',
        'as' => 'api.school.generated::GTVGlbfc94WVVPyg',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::AGyhYAYPrpTyjAjN' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/parent/exams/view-all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ParentController@viewAllExam',
        'controller' => 'App\\Http\\Controllers\\API\\ParentController@viewAllExam',
        'as' => 'api.school.generated::AGyhYAYPrpTyjAjN',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::TqSt0XQbsK5mHfUB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/parent/exams/all-exam-against-subjects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ParentController@allExamAgainstSubjects',
        'controller' => 'App\\Http\\Controllers\\API\\ParentController@allExamAgainstSubjects',
        'as' => 'api.school.generated::TqSt0XQbsK5mHfUB',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::mc1nOrQ4TiimDVFB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/parent/exams/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ParentController@examList',
        'controller' => 'App\\Http\\Controllers\\API\\ParentController@examList',
        'as' => 'api.school.generated::mc1nOrQ4TiimDVFB',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::3xug3p16897yIYst' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/parent/exams/detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ParentController@examDetail',
        'controller' => 'App\\Http\\Controllers\\API\\ParentController@examDetail',
        'as' => 'api.school.generated::3xug3p16897yIYst',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::p2Y7Nc972XiyHaI8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/parent/exams/syllabus-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ParentController@examSysllabusList',
        'controller' => 'App\\Http\\Controllers\\API\\ParentController@examSysllabusList',
        'as' => 'api.school.generated::p2Y7Nc972XiyHaI8',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::ioqnhUaAqhbQ0cp4' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/parent/exams/syllabus-detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\ParentController@examSysllabusDetail',
        'controller' => 'App\\Http\\Controllers\\API\\ParentController@examSysllabusDetail',
        'as' => 'api.school.generated::ioqnhUaAqhbQ0cp4',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::XyzqzeYiF9qTkMW5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/teacher/attendance/view-all-students',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Teacher\\AttendanceController@viewStudents',
        'controller' => 'App\\Http\\Controllers\\API\\Teacher\\AttendanceController@viewStudents',
        'as' => 'api.school.generated::XyzqzeYiF9qTkMW5',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::4MDy3pb7gle7Yzin' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/teacher/attendance/student-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Teacher\\AttendanceController@studentList',
        'controller' => 'App\\Http\\Controllers\\API\\Teacher\\AttendanceController@studentList',
        'as' => 'api.school.generated::4MDy3pb7gle7Yzin',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::ZsOyI4xaCJSdR5TD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/teacher/attendance/add-student-attendance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Teacher\\AttendanceController@addStudentAttendance',
        'controller' => 'App\\Http\\Controllers\\API\\Teacher\\AttendanceController@addStudentAttendance',
        'as' => 'api.school.generated::ZsOyI4xaCJSdR5TD',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'api.school.generated::kdBa9c3cyXQ7UeLK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\API\\Auth\\UserController@logout',
        'controller' => 'App\\Http\\Controllers\\API\\Auth\\UserController@logout',
        'as' => 'api.school.generated::kdBa9c3cyXQ7UeLK',
        'namespace' => NULL,
        'prefix' => 'api',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QeZ1hKQHcC4rFzqm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:263:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:45:"function(){
    return \\redirect(\'/login\');
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"000000003990ad520000000034ae3076";}";s:4:"hash";s:44:"oP6x7CYlVQF33pQnh0pouONW3dgPj3ICqGrvFbEvwAA=";}}',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::QeZ1hKQHcC4rFzqm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qsRyesMaKGjDf3kf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::qsRyesMaKGjDf3kf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8A4D3YDHB6IxokiJ' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::8A4D3YDHB6IxokiJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Mw0PqAnEbf9DHxpn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::Mw0PqAnEbf9DHxpn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.schools' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'schools',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\SchoolController@index',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\SchoolController@index',
        'as' => 'superadmin.schools',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.schools.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'schools/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\SchoolController@create',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\SchoolController@create',
        'as' => 'superadmin.schools.create',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.schools.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'schools/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\SchoolController@store',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\SchoolController@store',
        'as' => 'superadmin.schools.store',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.schools.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'schools/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\SchoolController@edit',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\SchoolController@edit',
        'as' => 'superadmin.schools.edit',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.schools.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'schools/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\SchoolController@update',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\SchoolController@update',
        'as' => 'superadmin.schools.update',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.schools.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'schools/{id}/detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\SchoolController@detail',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\SchoolController@detail',
        'as' => 'superadmin.schools.detail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.schools.block' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'schools/block',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\SchoolController@block',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\SchoolController@block',
        'as' => 'superadmin.schools.block',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.schools.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'schools/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\SchoolController@delete',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\SchoolController@delete',
        'as' => 'superadmin.schools.delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.schools.students-list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'schools/{id}/students-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\SchoolController@studentList',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\SchoolController@studentList',
        'as' => 'superadmin.schools.students-list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.schools.teachers-list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'schools/{id}/teachers-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\SchoolController@teacherList',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\SchoolController@teacherList',
        'as' => 'superadmin.schools.teachers-list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.schools.parents-list' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'schools/{id}/parents-list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\SchoolController@parentList',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\SchoolController@parentList',
        'as' => 'superadmin.schools.parents-list',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.teachers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teachers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\TeacherController@index',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\TeacherController@index',
        'as' => 'superadmin.teachers',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.teachers.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'teachers/{id}/detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\TeacherController@detail',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\TeacherController@detail',
        'as' => 'superadmin.teachers.detail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.students' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'students',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\StudentController@index',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\StudentController@index',
        'as' => 'superadmin.students',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.students.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'students/{id}/detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\StudentController@detail',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\StudentController@detail',
        'as' => 'superadmin.students.detail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.parents' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'parents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\ParentController@index',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\ParentController@index',
        'as' => 'superadmin.parents',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'superadmin.parents.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'parents/{id}/detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\SuperAdmin\\ParentController@detail',
        'controller' => 'App\\Http\\Controllers\\SuperAdmin\\ParentController@detail',
        'as' => 'superadmin.parents.detail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'profile' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'profile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfileController@ShowProfile',
        'controller' => 'App\\Http\\Controllers\\ProfileController@ShowProfile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add_profile' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'add_profile/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfileController@addprofiledetail',
        'controller' => 'App\\Http\\Controllers\\ProfileController@addprofiledetail',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add_profile',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete_user' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'delete_user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ProfileController@deleteprofile',
        'controller' => 'App\\Http\\Controllers\\ProfileController@deleteprofile',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delete_user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'roles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:Manage Roles',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleController@index',
        'controller' => 'App\\Http\\Controllers\\RoleController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'roles',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add_role' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add_role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:Manage Roles',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleController@show_role',
        'controller' => 'App\\Http\\Controllers\\RoleController@show_role',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add_role',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'create_role' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'create_role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:Manage Roles',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleController@create_role',
        'controller' => 'App\\Http\\Controllers\\RoleController@create_role',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'create_role',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete_role' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'delete_role/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:Manage Roles',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleController@delete',
        'controller' => 'App\\Http\\Controllers\\RoleController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delete_role',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit_role' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit_role/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:Manage Roles',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleController@editrole',
        'controller' => 'App\\Http\\Controllers\\RoleController@editrole',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'edit_role',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updaterole' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'updaterole',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:Manage Roles',
        ),
        'uses' => 'App\\Http\\Controllers\\RoleController@updaterole',
        'controller' => 'App\\Http\\Controllers\\RoleController@updaterole',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'updaterole',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'users' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:Manage Users',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\UserController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'users',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add_user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add_user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:Manage Users',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@add_user',
        'controller' => 'App\\Http\\Controllers\\UserController@add_user',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add_user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'create_user' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'create_user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:Manage Users',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@create_user',
        'controller' => 'App\\Http\\Controllers\\UserController@create_user',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'create_user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit_user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit_user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:Manage Users',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@edituser',
        'controller' => 'App\\Http\\Controllers\\UserController@edituser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'edit_user',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete_completeuser' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'delete_completeuser/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:Manage Users',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@delete_completeuser',
        'controller' => 'App\\Http\\Controllers\\UserController@delete_completeuser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delete_completeuser',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'updateuser' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:Manage Users',
        ),
        'uses' => 'App\\Http\\Controllers\\UserController@updateuser',
        'controller' => 'App\\Http\\Controllers\\UserController@updateuser',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'updateuser',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'manage_password' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'manage_password/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ManagepasswordController@index',
        'controller' => 'App\\Http\\Controllers\\ManagepasswordController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'manage_password',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'changepassword' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'change_password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\ManagepasswordController@changepassword',
        'controller' => 'App\\Http\\Controllers\\ManagepasswordController@changepassword',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'changepassword',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'permissions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:Manage Permissions',
        ),
        'uses' => 'App\\Http\\Controllers\\PermissionsController@index',
        'controller' => 'App\\Http\\Controllers\\PermissionsController@index',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'permissions',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'add_permission' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'add_permission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:Manage Permissions',
        ),
        'uses' => 'App\\Http\\Controllers\\PermissionsController@add_permission',
        'controller' => 'App\\Http\\Controllers\\PermissionsController@add_permission',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'add_permission',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'create_permission' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'create_permission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:Manage Permissions',
        ),
        'uses' => 'App\\Http\\Controllers\\PermissionsController@create_permission',
        'controller' => 'App\\Http\\Controllers\\PermissionsController@create_permission',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'create_permission',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'delete_permission' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:Manage Permissions',
        ),
        'uses' => 'App\\Http\\Controllers\\PermissionsController@delete',
        'controller' => 'App\\Http\\Controllers\\PermissionsController@delete',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'delete_permission',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'edit_permission' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'edit_permission/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:Manage Permissions',
        ),
        'uses' => 'App\\Http\\Controllers\\PermissionsController@editpermission',
        'controller' => 'App\\Http\\Controllers\\PermissionsController@editpermission',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'edit_permission',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'update_permission' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'update_permission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
          2 => 'can:Manage Permissions',
        ),
        'uses' => 'App\\Http\\Controllers\\PermissionsController@update_permission',
        'controller' => 'App\\Http\\Controllers\\PermissionsController@update_permission',
        'namespace' => NULL,
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'update_permission',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\Auth\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\School\\Auth\\AuthController@login',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
        'as' => 'school.login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.loginProcess' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/login/process',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\Auth\\AuthController@loginProcess',
        'controller' => 'App\\Http\\Controllers\\School\\Auth\\AuthController@loginProcess',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
        'as' => 'school.loginProcess',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.password-reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\Auth\\AuthController@reset',
        'controller' => 'App\\Http\\Controllers\\School\\Auth\\AuthController@reset',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
        'as' => 'school.password-reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.dashboard' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/dashboard',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\HomeController@dashboard',
        'controller' => 'App\\Http\\Controllers\\School\\HomeController@dashboard',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
        'as' => 'school.dashboard',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.timetable.setting' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/time-table/setting',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\TimetableController@index',
        'controller' => 'App\\Http\\Controllers\\School\\TimetableController@index',
        'as' => 'school.timetable.setting',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.timetable.setting.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/time-table/setting/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\TimetableController@create',
        'controller' => 'App\\Http\\Controllers\\School\\TimetableController@create',
        'as' => 'school.timetable.setting.create',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.timetable.setting.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/time-table/setting/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\TimetableController@store',
        'controller' => 'App\\Http\\Controllers\\School\\TimetableController@store',
        'as' => 'school.timetable.setting.store',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.timetable.setting.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/time-table/setting/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\TimetableController@edit',
        'controller' => 'App\\Http\\Controllers\\School\\TimetableController@edit',
        'as' => 'school.timetable.setting.edit',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.timetable.setting.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/time-table/setting/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\TimetableController@update',
        'controller' => 'App\\Http\\Controllers\\School\\TimetableController@update',
        'as' => 'school.timetable.setting.update',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.timetable.setting.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/time-table/setting/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\TimetableController@delete',
        'controller' => 'App\\Http\\Controllers\\School\\TimetableController@delete',
        'as' => 'school.timetable.setting.delete',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.timetable.periods' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/time-table/periods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\TimetableController@periods',
        'controller' => 'App\\Http\\Controllers\\School\\TimetableController@periods',
        'as' => 'school.timetable.periods',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.timetable.periods.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/time-table/periods/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\TimetableController@createPeriods',
        'controller' => 'App\\Http\\Controllers\\School\\TimetableController@createPeriods',
        'as' => 'school.timetable.periods.create',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.timetable.periods.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/time-table/periods/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\TimetableController@storePeriods',
        'controller' => 'App\\Http\\Controllers\\School\\TimetableController@storePeriods',
        'as' => 'school.timetable.periods.store',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.timetable.periods.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/time-table/periods/{id}/detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\TimetableController@detailPeriods',
        'controller' => 'App\\Http\\Controllers\\School\\TimetableController@detailPeriods',
        'as' => 'school.timetable.periods.detail',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.timetable.periods.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/time-table/periods/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\TimetableController@editPeriods',
        'controller' => 'App\\Http\\Controllers\\School\\TimetableController@editPeriods',
        'as' => 'school.timetable.periods.edit',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.timetable.periods.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/time-table/periods/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\TimetableController@updatePeriods',
        'controller' => 'App\\Http\\Controllers\\School\\TimetableController@updatePeriods',
        'as' => 'school.timetable.periods.update',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.timetable.periods.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/time-table/periods/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\TimetableController@deletePeriods',
        'controller' => 'App\\Http\\Controllers\\School\\TimetableController@deletePeriods',
        'as' => 'school.timetable.periods.delete',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.timetable.periods.get-date-range' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/time-table/periods/get-date-range/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\TimetableController@getDateRange',
        'controller' => 'App\\Http\\Controllers\\School\\TimetableController@getDateRange',
        'as' => 'school.timetable.periods.get-date-range',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.timetable.periods.get-time-range' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/time-table/periods/get-time-range/{class_id}/{day_range}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\TimetableController@getTimeRange',
        'controller' => 'App\\Http\\Controllers\\School\\TimetableController@getTimeRange',
        'as' => 'school.timetable.periods.get-time-range',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.timetable.assign_periods' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/time-table/assign-periods',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\AssignPeriodController@index',
        'controller' => 'App\\Http\\Controllers\\School\\AssignPeriodController@index',
        'as' => 'school.timetable.assign_periods',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.timetable.assign_periods.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/time-table/assign-periods/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\AssignPeriodController@create',
        'controller' => 'App\\Http\\Controllers\\School\\AssignPeriodController@create',
        'as' => 'school.timetable.assign_periods.create',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.timetable.assign_periods.get-all-data-by-class' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/time-table/assign-periods/get-all-data-by-class/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\AssignPeriodController@getAllDataByClass',
        'controller' => 'App\\Http\\Controllers\\School\\AssignPeriodController@getAllDataByClass',
        'as' => 'school.timetable.assign_periods.get-all-data-by-class',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.timetable.assign_periods.get-subject-by-class' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/time-table/assign-periods/get-subject-by-teacher/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\AssignPeriodController@getSectionByTeacher',
        'controller' => 'App\\Http\\Controllers\\School\\AssignPeriodController@getSectionByTeacher',
        'as' => 'school.timetable.assign_periods.get-subject-by-class',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/time-table/assign-periods/get-periods-by-class-range/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\AssignPeriodController@getPeriodsByClass',
        'controller' => 'App\\Http\\Controllers\\School\\AssignPeriodController@getPeriodsByClass',
        'as' => 'school.',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.timetable.assign_periods.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/time-table/assign-periods/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\AssignPeriodController@store',
        'controller' => 'App\\Http\\Controllers\\School\\AssignPeriodController@store',
        'as' => 'school.timetable.assign_periods.store',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.timetable.assign_periods.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/time-table/assign-periods/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\AssignPeriodController@edit',
        'controller' => 'App\\Http\\Controllers\\School\\AssignPeriodController@edit',
        'as' => 'school.timetable.assign_periods.edit',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.timetable.assign_periods.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/time-table/assign-periods/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\AssignPeriodController@update',
        'controller' => 'App\\Http\\Controllers\\School\\AssignPeriodController@update',
        'as' => 'school.timetable.assign_periods.update',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.timetable.assign_periods.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/time-table/assign-periods/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\AssignPeriodController@delete',
        'controller' => 'App\\Http\\Controllers\\School\\AssignPeriodController@delete',
        'as' => 'school.timetable.assign_periods.delete',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.timetable.assign_periods.view-timetable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/time-table/assign-periods/view-timetable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\AssignPeriodController@viewTimeTable',
        'controller' => 'App\\Http\\Controllers\\School\\AssignPeriodController@viewTimeTable',
        'as' => 'school.timetable.assign_periods.view-timetable',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.timetable.teacher-timetable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/time-table/teachers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\AssignPeriodController@teaherTimeTable',
        'controller' => 'App\\Http\\Controllers\\School\\AssignPeriodController@teaherTimeTable',
        'as' => 'school.timetable.teacher-timetable',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.studyMaterial.view-content' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/study-material/view-content',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\StudyMaterialController@index',
        'controller' => 'App\\Http\\Controllers\\School\\StudyMaterialController@index',
        'as' => 'school.studyMaterial.view-content',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.studyMaterial.create-content' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/study-material/view-content/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\StudyMaterialController@create',
        'controller' => 'App\\Http\\Controllers\\School\\StudyMaterialController@create',
        'as' => 'school.studyMaterial.create-content',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.studyMaterial.getSubjectsByClass' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/study-material/get-subjects-byclass/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\StudyMaterialController@getSectionsByClass',
        'controller' => 'App\\Http\\Controllers\\School\\StudyMaterialController@getSectionsByClass',
        'as' => 'school.studyMaterial.getSubjectsByClass',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.studyMaterial.store-content' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/study-material/view-content/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\StudyMaterialController@store',
        'controller' => 'App\\Http\\Controllers\\School\\StudyMaterialController@store',
        'as' => 'school.studyMaterial.store-content',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.studyMaterial.detail-content' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/study-material/view-content/{id}/detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\StudyMaterialController@detail',
        'controller' => 'App\\Http\\Controllers\\School\\StudyMaterialController@detail',
        'as' => 'school.studyMaterial.detail-content',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.studyMaterial.edit-content' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/study-material/view-content/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\StudyMaterialController@edit',
        'controller' => 'App\\Http\\Controllers\\School\\StudyMaterialController@edit',
        'as' => 'school.studyMaterial.edit-content',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.studyMaterial.update-content' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/study-material/view-content/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\StudyMaterialController@update',
        'controller' => 'App\\Http\\Controllers\\School\\StudyMaterialController@update',
        'as' => 'school.studyMaterial.update-content',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.studyMaterial.delete-content' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/study-material/view-content/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\StudyMaterialController@delete',
        'controller' => 'App\\Http\\Controllers\\School\\StudyMaterialController@delete',
        'as' => 'school.studyMaterial.delete-content',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.sections' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/sections',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SectionController@index',
        'controller' => 'App\\Http\\Controllers\\School\\SectionController@index',
        'as' => 'school.sections',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.sections.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/sections/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SectionController@create',
        'controller' => 'App\\Http\\Controllers\\School\\SectionController@create',
        'as' => 'school.sections.create',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.sections.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/sections/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SectionController@store',
        'controller' => 'App\\Http\\Controllers\\School\\SectionController@store',
        'as' => 'school.sections.store',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.sections.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/sections/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SectionController@edit',
        'controller' => 'App\\Http\\Controllers\\School\\SectionController@edit',
        'as' => 'school.sections.edit',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.sections.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/sections/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SectionController@update',
        'controller' => 'App\\Http\\Controllers\\School\\SectionController@update',
        'as' => 'school.sections.update',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.sections.block' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/sections/block',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SectionController@block',
        'controller' => 'App\\Http\\Controllers\\School\\SectionController@block',
        'as' => 'school.sections.block',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.sections.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/sections/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SectionController@delete',
        'controller' => 'App\\Http\\Controllers\\School\\SectionController@delete',
        'as' => 'school.sections.delete',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.subjects' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/subjects',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SubjectController@index',
        'controller' => 'App\\Http\\Controllers\\School\\SubjectController@index',
        'as' => 'school.subjects',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.subjects.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/subjects/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SubjectController@create',
        'controller' => 'App\\Http\\Controllers\\School\\SubjectController@create',
        'as' => 'school.subjects.create',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.subjects.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/subjects/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SubjectController@store',
        'controller' => 'App\\Http\\Controllers\\School\\SubjectController@store',
        'as' => 'school.subjects.store',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.subjects.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/subjects/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SubjectController@edit',
        'controller' => 'App\\Http\\Controllers\\School\\SubjectController@edit',
        'as' => 'school.subjects.edit',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.subjects.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/subjects/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SubjectController@update',
        'controller' => 'App\\Http\\Controllers\\School\\SubjectController@update',
        'as' => 'school.subjects.update',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.subjects.block' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/subjects/block',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SubjectController@block',
        'controller' => 'App\\Http\\Controllers\\School\\SubjectController@block',
        'as' => 'school.subjects.block',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.subjects.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/subjects/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SubjectController@delete',
        'controller' => 'App\\Http\\Controllers\\School\\SubjectController@delete',
        'as' => 'school.subjects.delete',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.class' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/class',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ClassController@index',
        'controller' => 'App\\Http\\Controllers\\School\\ClassController@index',
        'as' => 'school.class',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.class.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/class/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ClassController@create',
        'controller' => 'App\\Http\\Controllers\\School\\ClassController@create',
        'as' => 'school.class.create',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.class.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/class/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ClassController@store',
        'controller' => 'App\\Http\\Controllers\\School\\ClassController@store',
        'as' => 'school.class.store',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.class.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/class/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ClassController@edit',
        'controller' => 'App\\Http\\Controllers\\School\\ClassController@edit',
        'as' => 'school.class.edit',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.class.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/class/{id}/detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ClassController@detail',
        'controller' => 'App\\Http\\Controllers\\School\\ClassController@detail',
        'as' => 'school.class.detail',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.class.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/class/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ClassController@update',
        'controller' => 'App\\Http\\Controllers\\School\\ClassController@update',
        'as' => 'school.class.update',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.class.block' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/class/block',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ClassController@block',
        'controller' => 'App\\Http\\Controllers\\School\\ClassController@block',
        'as' => 'school.class.block',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.class.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/class/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ClassController@delete',
        'controller' => 'App\\Http\\Controllers\\School\\ClassController@delete',
        'as' => 'school.class.delete',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.designations' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/designations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\DesignationController@index',
        'controller' => 'App\\Http\\Controllers\\School\\DesignationController@index',
        'as' => 'school.designations',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.designations.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/designations/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\DesignationController@create',
        'controller' => 'App\\Http\\Controllers\\School\\DesignationController@create',
        'as' => 'school.designations.create',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.designations.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/designations/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\DesignationController@store',
        'controller' => 'App\\Http\\Controllers\\School\\DesignationController@store',
        'as' => 'school.designations.store',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.designations.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/designations/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\DesignationController@edit',
        'controller' => 'App\\Http\\Controllers\\School\\DesignationController@edit',
        'as' => 'school.designations.edit',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.designations.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/designations/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\DesignationController@update',
        'controller' => 'App\\Http\\Controllers\\School\\DesignationController@update',
        'as' => 'school.designations.update',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.designations.block' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/designations/block',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\DesignationController@block',
        'controller' => 'App\\Http\\Controllers\\School\\DesignationController@block',
        'as' => 'school.designations.block',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.designations.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/designations/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\DesignationController@delete',
        'controller' => 'App\\Http\\Controllers\\School\\DesignationController@delete',
        'as' => 'school.designations.delete',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.teachers' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/teachers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\TeacherController@index',
        'controller' => 'App\\Http\\Controllers\\School\\TeacherController@index',
        'as' => 'school.teachers',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.teachers.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/teachers/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\TeacherController@create',
        'controller' => 'App\\Http\\Controllers\\School\\TeacherController@create',
        'as' => 'school.teachers.create',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.teachers.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/teachers/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\TeacherController@store',
        'controller' => 'App\\Http\\Controllers\\School\\TeacherController@store',
        'as' => 'school.teachers.store',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.teachers.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/teachers/{id}/detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\TeacherController@detail',
        'controller' => 'App\\Http\\Controllers\\School\\TeacherController@detail',
        'as' => 'school.teachers.detail',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.teachers.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/teachers/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\TeacherController@edit',
        'controller' => 'App\\Http\\Controllers\\School\\TeacherController@edit',
        'as' => 'school.teachers.edit',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.teachers.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/teachers/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\TeacherController@update',
        'controller' => 'App\\Http\\Controllers\\School\\TeacherController@update',
        'as' => 'school.teachers.update',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.teachers.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/teachers/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\TeacherController@delete',
        'controller' => 'App\\Http\\Controllers\\School\\TeacherController@delete',
        'as' => 'school.teachers.delete',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.generated::qJt6tAoxSLXzxzNX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/teachers/get-class/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\TeacherController@getClass',
        'controller' => 'App\\Http\\Controllers\\School\\TeacherController@getClass',
        'as' => 'school.generated::qJt6tAoxSLXzxzNX',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.generated::Z7UGioa8nvuZmGrr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/teachers/get-class-section/{id}/{staff_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\TeacherController@getClassSection',
        'controller' => 'App\\Http\\Controllers\\School\\TeacherController@getClassSection',
        'as' => 'school.generated::Z7UGioa8nvuZmGrr',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.teachers.assign_class_teacher' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/teachers/assign-class-teacher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\TeacherController@assignClassTeacher',
        'controller' => 'App\\Http\\Controllers\\School\\TeacherController@assignClassTeacher',
        'as' => 'school.teachers.assign_class_teacher',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.teachers.update_assign_class_teacher' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/teachers/update-assign-class-teacher',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\TeacherController@updateAssignClassTeacher',
        'controller' => 'App\\Http\\Controllers\\School\\TeacherController@updateAssignClassTeacher',
        'as' => 'school.teachers.update_assign_class_teacher',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.students' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/students',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\StudentController@index',
        'controller' => 'App\\Http\\Controllers\\School\\StudentController@index',
        'as' => 'school.students',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.students.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/students/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\StudentController@create',
        'controller' => 'App\\Http\\Controllers\\School\\StudentController@create',
        'as' => 'school.students.create',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.students.getSectionByClass' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/students/create/get-sections-by-class/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\StudentController@getSectionByClass',
        'controller' => 'App\\Http\\Controllers\\School\\StudentController@getSectionByClass',
        'as' => 'school.students.getSectionByClass',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.students.getParentByStudent' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/students/create/get-parent-by-student/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\StudentController@getParentByStudent',
        'controller' => 'App\\Http\\Controllers\\School\\StudentController@getParentByStudent',
        'as' => 'school.students.getParentByStudent',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.students.getStaffInfo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/students/create/get-staff-info/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\StudentController@getStaffInfo',
        'controller' => 'App\\Http\\Controllers\\School\\StudentController@getStaffInfo',
        'as' => 'school.students.getStaffInfo',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.students.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/students/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\StudentController@store',
        'controller' => 'App\\Http\\Controllers\\School\\StudentController@store',
        'as' => 'school.students.store',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.students.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/students/{id}/detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\StudentController@detail',
        'controller' => 'App\\Http\\Controllers\\School\\StudentController@detail',
        'as' => 'school.students.detail',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.students.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/students/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\StudentController@edit',
        'controller' => 'App\\Http\\Controllers\\School\\StudentController@edit',
        'as' => 'school.students.edit',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.students.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/students/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\StudentController@update',
        'controller' => 'App\\Http\\Controllers\\School\\StudentController@update',
        'as' => 'school.students.update',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.students.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/students/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\StudentController@delete',
        'controller' => 'App\\Http\\Controllers\\School\\StudentController@delete',
        'as' => 'school.students.delete',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.parents' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/parents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ParentController@index',
        'controller' => 'App\\Http\\Controllers\\School\\ParentController@index',
        'as' => 'school.parents',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.parents.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/parents/{id}/detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ParentController@detail',
        'controller' => 'App\\Http\\Controllers\\School\\ParentController@detail',
        'as' => 'school.parents.detail',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.fees.fee-structure' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/fees/fee-structure',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\FeesController@index',
        'controller' => 'App\\Http\\Controllers\\School\\FeesController@index',
        'as' => 'school.fees.fee-structure',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.fees.fee-structure.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/fees/fee-structure/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\FeesController@create',
        'controller' => 'App\\Http\\Controllers\\School\\FeesController@create',
        'as' => 'school.fees.fee-structure.create',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.fees.fee-structure.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/fees/fee-structure/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\FeesController@store',
        'controller' => 'App\\Http\\Controllers\\School\\FeesController@store',
        'as' => 'school.fees.fee-structure.store',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.fees.fee-structure.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/fees/fee-structure/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\FeesController@edit',
        'controller' => 'App\\Http\\Controllers\\School\\FeesController@edit',
        'as' => 'school.fees.fee-structure.edit',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.fees.fee-structure.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/fees/fee-structure/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\FeesController@update',
        'controller' => 'App\\Http\\Controllers\\School\\FeesController@update',
        'as' => 'school.fees.fee-structure.update',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.fees.fee-structure.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/fees/fee-structure/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\FeesController@delete',
        'controller' => 'App\\Http\\Controllers\\School\\FeesController@delete',
        'as' => 'school.fees.fee-structure.delete',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.fees.fee-payment' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/fees/fee-payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\FeesController@fee_payment_index',
        'controller' => 'App\\Http\\Controllers\\School\\FeesController@fee_payment_index',
        'as' => 'school.fees.fee-payment',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.fees.fee-payment.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/fees/fee-payment/{student_id}/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\FeesController@fee_payment_create',
        'controller' => 'App\\Http\\Controllers\\School\\FeesController@fee_payment_create',
        'as' => 'school.fees.fee-payment.create',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.fees.fee-payment.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/fees/fee-payment/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\FeesController@fee_payment_store',
        'controller' => 'App\\Http\\Controllers\\School\\FeesController@fee_payment_store',
        'as' => 'school.fees.fee-payment.store',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.generated::pm1mBhiKDOCXLiPV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/get-students-by-class-id/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\FeesController@getStudentsByClassId',
        'controller' => 'App\\Http\\Controllers\\School\\FeesController@getStudentsByClassId',
        'as' => 'school.generated::pm1mBhiKDOCXLiPV',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.fees.fee-payment.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/fees/fee-payment/{student_id}/detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\FeesController@fee_payment_detail',
        'controller' => 'App\\Http\\Controllers\\School\\FeesController@fee_payment_detail',
        'as' => 'school.fees.fee-payment.detail',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.fees.fee-payment.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/fees/fee-payment/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\FeesController@fee_payment_edit',
        'controller' => 'App\\Http\\Controllers\\School\\FeesController@fee_payment_edit',
        'as' => 'school.fees.fee-payment.edit',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.fees.fee-payment.specific.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/fees/fee-payment/specific/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\FeesController@fee_payment_specific_update',
        'controller' => 'App\\Http\\Controllers\\School\\FeesController@fee_payment_specific_update',
        'as' => 'school.fees.fee-payment.specific.update',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.fees.fee-payment.specific.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/fees/fee-payment/specific/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\FeesController@fee_payment_specific_delete',
        'controller' => 'App\\Http\\Controllers\\School\\FeesController@fee_payment_specific_delete',
        'as' => 'school.fees.fee-payment.specific.delete',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.fees.fee-payment.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/fees/fee-payment/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\FeesController@fee_payment_delete',
        'controller' => 'App\\Http\\Controllers\\School\\FeesController@fee_payment_delete',
        'as' => 'school.fees.fee-payment.delete',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.notification-index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\PushNotificationController@index',
        'controller' => 'App\\Http\\Controllers\\School\\PushNotificationController@index',
        'as' => 'school.notification-index',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.notification-view' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/notification_info/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\PushNotificationController@view',
        'controller' => 'App\\Http\\Controllers\\School\\PushNotificationController@view',
        'as' => 'school.notification-view',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.notification-edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/notifications/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\PushNotificationController@edit',
        'controller' => 'App\\Http\\Controllers\\School\\PushNotificationController@edit',
        'as' => 'school.notification-edit',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.notification-create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/notifications/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\PushNotificationController@create',
        'controller' => 'App\\Http\\Controllers\\School\\PushNotificationController@create',
        'as' => 'school.notification-create',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.save-notification' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/notifications/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\PushNotificationController@save',
        'controller' => 'App\\Http\\Controllers\\School\\PushNotificationController@save',
        'as' => 'school.save-notification',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.notification-delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/notification_delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\PushNotificationController@destroy',
        'controller' => 'App\\Http\\Controllers\\School\\PushNotificationController@destroy',
        'as' => 'school.notification-delete',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.update-notification' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/notifications/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\PushNotificationController@update',
        'controller' => 'App\\Http\\Controllers\\School\\PushNotificationController@update',
        'as' => 'school.update-notification',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.send-notification' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/notifications/send/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\PushNotificationController@send_notification',
        'controller' => 'App\\Http\\Controllers\\School\\PushNotificationController@send_notification',
        'as' => 'school.send-notification',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.exams.create-exam' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/exams/create-exam',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ExamController@index',
        'controller' => 'App\\Http\\Controllers\\School\\ExamController@index',
        'as' => 'school.exams.create-exam',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.exams.create-exam.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/exams/create-exam/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ExamController@create',
        'controller' => 'App\\Http\\Controllers\\School\\ExamController@create',
        'as' => 'school.exams.create-exam.create',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.exams.create-exam.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/exams/create-exam/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ExamController@store',
        'controller' => 'App\\Http\\Controllers\\School\\ExamController@store',
        'as' => 'school.exams.create-exam.store',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.exams.create-exam.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/exams/create-exam/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ExamController@edit',
        'controller' => 'App\\Http\\Controllers\\School\\ExamController@edit',
        'as' => 'school.exams.create-exam.edit',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.exams.create-exam.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/exams/create-exam/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ExamController@update',
        'controller' => 'App\\Http\\Controllers\\School\\ExamController@update',
        'as' => 'school.exams.create-exam.update',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.exams.create-exam.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/exams/create-exam/{id}/detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ExamController@detail',
        'controller' => 'App\\Http\\Controllers\\School\\ExamController@detail',
        'as' => 'school.exams.create-exam.detail',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.exams.create-exam.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/exams/create-exam/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ExamController@delete',
        'controller' => 'App\\Http\\Controllers\\School\\ExamController@delete',
        'as' => 'school.exams.create-exam.delete',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.exams.create-syllabus' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/exams/create-syllabus',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SyllabusController@index',
        'controller' => 'App\\Http\\Controllers\\School\\SyllabusController@index',
        'as' => 'school.exams.create-syllabus',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.exams.create-syllabus.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/exams/create-syllabus/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SyllabusController@create',
        'controller' => 'App\\Http\\Controllers\\School\\SyllabusController@create',
        'as' => 'school.exams.create-syllabus.create',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.exams.create-syllabus.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/exams/create-syllabus/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SyllabusController@store',
        'controller' => 'App\\Http\\Controllers\\School\\SyllabusController@store',
        'as' => 'school.exams.create-syllabus.store',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.exams.create-syllabus.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/exams/create-syllabus/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SyllabusController@edit',
        'controller' => 'App\\Http\\Controllers\\School\\SyllabusController@edit',
        'as' => 'school.exams.create-syllabus.edit',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.exams.create-syllabus.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/exams/create-syllabus/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SyllabusController@update',
        'controller' => 'App\\Http\\Controllers\\School\\SyllabusController@update',
        'as' => 'school.exams.create-syllabus.update',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.exams.create-syllabus.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/exams/create-syllabus/{id}/detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SyllabusController@detail',
        'controller' => 'App\\Http\\Controllers\\School\\SyllabusController@detail',
        'as' => 'school.exams.create-syllabus.detail',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.exams.create-syllabus.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/exams/create-syllabus/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SyllabusController@delete',
        'controller' => 'App\\Http\\Controllers\\School\\SyllabusController@delete',
        'as' => 'school.exams.create-syllabus.delete',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.exam-timetable' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/exams/exam-timetable',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ExamTimeSheetController@index',
        'controller' => 'App\\Http\\Controllers\\School\\ExamTimeSheetController@index',
        'as' => 'school.exam-timetable',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.exam-timetable.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/exams/exam-timetable/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ExamTimeSheetController@create',
        'controller' => 'App\\Http\\Controllers\\School\\ExamTimeSheetController@create',
        'as' => 'school.exam-timetable.create',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.exam-timetable.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/exams/exam-timetable/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ExamTimeSheetController@store',
        'controller' => 'App\\Http\\Controllers\\School\\ExamTimeSheetController@store',
        'as' => 'school.exam-timetable.store',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.exam-timetable.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/exams/exam-timetable/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ExamTimeSheetController@edit',
        'controller' => 'App\\Http\\Controllers\\School\\ExamTimeSheetController@edit',
        'as' => 'school.exam-timetable.edit',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.exam-timetable.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/exams/exam-timetable/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ExamTimeSheetController@update',
        'controller' => 'App\\Http\\Controllers\\School\\ExamTimeSheetController@update',
        'as' => 'school.exam-timetable.update',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.exam-timetable.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/exams/exam-timetable/{id}/detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ExamTimeSheetController@detail',
        'controller' => 'App\\Http\\Controllers\\School\\ExamTimeSheetController@detail',
        'as' => 'school.exam-timetable.detail',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.exam-timetable.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/exams/exam-timetable/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ExamTimeSheetController@delete',
        'controller' => 'App\\Http\\Controllers\\School\\ExamTimeSheetController@delete',
        'as' => 'school.exam-timetable.delete',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.generated::M5kbhlI5FhVX3J88' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/exams/exam-timetable/get-class-by-exam/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ExamTimeSheetController@getClassByExam',
        'controller' => 'App\\Http\\Controllers\\School\\ExamTimeSheetController@getClassByExam',
        'as' => 'school.generated::M5kbhlI5FhVX3J88',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.exam-timetable.viewTimesheet' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/exams/exam-timetable/view-timesheet',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ExamTimeSheetController@viewTimesheet',
        'controller' => 'App\\Http\\Controllers\\School\\ExamTimeSheetController@viewTimesheet',
        'as' => 'school.exam-timetable.viewTimesheet',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.generated::QczSwLskLx5b4KNV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/exams/exam-timetable/get-exam-date/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ExamTimeSheetController@getExamDate',
        'controller' => 'App\\Http\\Controllers\\School\\ExamTimeSheetController@getExamDate',
        'as' => 'school.generated::QczSwLskLx5b4KNV',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.results.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/results/view',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ResultController@index',
        'controller' => 'App\\Http\\Controllers\\School\\ResultController@index',
        'as' => 'school.results.index',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.attendances.downloadResultPDF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/results/download-results-pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ResultController@downloadPDF',
        'controller' => 'App\\Http\\Controllers\\School\\ResultController@downloadPDF',
        'as' => 'school.attendances.downloadResultPDF',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.attendances.view-attendance' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/attendances/view-attendance',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\AttendanceController@index',
        'controller' => 'App\\Http\\Controllers\\School\\AttendanceController@index',
        'as' => 'school.attendances.view-attendance',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.attendances.downloadPDF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/attendances/download-pdf',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\AttendanceController@downloadPDF',
        'controller' => 'App\\Http\\Controllers\\School\\AttendanceController@downloadPDF',
        'as' => 'school.attendances.downloadPDF',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.leave-applications' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/leave-applications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\AttendanceController@viewLeaveApplication',
        'controller' => 'App\\Http\\Controllers\\School\\AttendanceController@viewLeaveApplication',
        'as' => 'school.leave-applications',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.leave-applications.accept' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/leave-applications/accept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\AttendanceController@acceptLeaveApplication',
        'controller' => 'App\\Http\\Controllers\\School\\AttendanceController@acceptLeaveApplication',
        'as' => 'school.leave-applications.accept',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.leave-applications.rejected' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/leave-applications/rejected',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\AttendanceController@rejectedLeaveApplication',
        'controller' => 'App\\Http\\Controllers\\School\\AttendanceController@rejectedLeaveApplication',
        'as' => 'school.leave-applications.rejected',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.student-leave-applications' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/student-leave-applications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\AttendanceController@viewStudentLeaveApplication',
        'controller' => 'App\\Http\\Controllers\\School\\AttendanceController@viewStudentLeaveApplication',
        'as' => 'school.student-leave-applications',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.student-leave-applications.accept' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/student-leave-applications/accept',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\AttendanceController@acceptStudentLeaveApplication',
        'controller' => 'App\\Http\\Controllers\\School\\AttendanceController@acceptStudentLeaveApplication',
        'as' => 'school.student-leave-applications.accept',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.student-leave-applications.rejected' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/student-leave-applications/rejected',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\AttendanceController@rejectedStudentLeaveApplication',
        'controller' => 'App\\Http\\Controllers\\School\\AttendanceController@rejectedStudentLeaveApplication',
        'as' => 'school.student-leave-applications.rejected',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.resources.home-work' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/resources/home-work',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ResourcesController@homeWork',
        'controller' => 'App\\Http\\Controllers\\School\\ResourcesController@homeWork',
        'as' => 'school.resources.home-work',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.resources.home-work.detail' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/resources/home-work/{id}/detail',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
          2 => 'check_session',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\ResourcesController@homeWorkDetail',
        'controller' => 'App\\Http\\Controllers\\School\\ResourcesController@homeWorkDetail',
        'as' => 'school.resources.home-work.detail',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.view-all-session' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/view-all-session',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SessionController@viewAllSession',
        'controller' => 'App\\Http\\Controllers\\School\\SessionController@viewAllSession',
        'as' => 'school.view-all-session',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.view-all-session.create' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/view-all-session/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SessionController@create',
        'controller' => 'App\\Http\\Controllers\\School\\SessionController@create',
        'as' => 'school.view-all-session.create',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.view-all-session.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/view-all-session/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SessionController@store',
        'controller' => 'App\\Http\\Controllers\\School\\SessionController@store',
        'as' => 'school.view-all-session.store',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.view-all-session.edit' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/view-all-session/{id}/edit',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SessionController@edit',
        'controller' => 'App\\Http\\Controllers\\School\\SessionController@edit',
        'as' => 'school.view-all-session.edit',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.view-all-session.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/view-all-session/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SessionController@update',
        'controller' => 'App\\Http\\Controllers\\School\\SessionController@update',
        'as' => 'school.view-all-session.update',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.view-all-session.delete' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/view-all-session/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SessionController@delete',
        'controller' => 'App\\Http\\Controllers\\School\\SessionController@delete',
        'as' => 'school.view-all-session.delete',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.view-all-session.block' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/view-all-session/block',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SessionController@block',
        'controller' => 'App\\Http\\Controllers\\School\\SessionController@block',
        'as' => 'school.view-all-session.block',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.migrations' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/migrations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SessionController@migrations',
        'controller' => 'App\\Http\\Controllers\\School\\SessionController@migrations',
        'as' => 'school.migrations',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.migrations.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/migrations/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\SessionController@migrationsStore',
        'controller' => 'App\\Http\\Controllers\\School\\SessionController@migrationsStore',
        'as' => 'school.migrations.store',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.roles' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\RoleController@index',
        'controller' => 'App\\Http\\Controllers\\School\\RoleController@index',
        'as' => 'school.roles',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.add_role' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/add_role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\RoleController@show_role',
        'controller' => 'App\\Http\\Controllers\\School\\RoleController@show_role',
        'as' => 'school.add_role',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.create_role' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/create_role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\RoleController@create_role',
        'controller' => 'App\\Http\\Controllers\\School\\RoleController@create_role',
        'as' => 'school.create_role',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.delete_role' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/delete_role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\RoleController@delete',
        'controller' => 'App\\Http\\Controllers\\School\\RoleController@delete',
        'as' => 'school.delete_role',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.edit_role' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/edit_role/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\RoleController@editrole',
        'controller' => 'App\\Http\\Controllers\\School\\RoleController@editrole',
        'as' => 'school.edit_role',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.updaterole' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/updaterole',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\RoleController@updaterole',
        'controller' => 'App\\Http\\Controllers\\School\\RoleController@updaterole',
        'as' => 'school.updaterole',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.users' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\School\\UserController@index',
        'as' => 'school.users',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.add_user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/add_user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\UserController@add_user',
        'controller' => 'App\\Http\\Controllers\\School\\UserController@add_user',
        'as' => 'school.add_user',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.create_user' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/create_user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\UserController@create_user',
        'controller' => 'App\\Http\\Controllers\\School\\UserController@create_user',
        'as' => 'school.create_user',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.edit_user' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/edit_user/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\UserController@edituser',
        'controller' => 'App\\Http\\Controllers\\School\\UserController@edituser',
        'as' => 'school.edit_user',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.delete_completeuser' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/delete_completeuser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\UserController@delete_completeuser',
        'controller' => 'App\\Http\\Controllers\\School\\UserController@delete_completeuser',
        'as' => 'school.delete_completeuser',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.updateuser' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\UserController@updateuser',
        'controller' => 'App\\Http\\Controllers\\School\\UserController@updateuser',
        'as' => 'school.updateuser',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.permissions' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/permissions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\PermissionsController@index',
        'controller' => 'App\\Http\\Controllers\\School\\PermissionsController@index',
        'as' => 'school.permissions',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.add_permission' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/add_permission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\PermissionsController@add_permission',
        'controller' => 'App\\Http\\Controllers\\School\\PermissionsController@add_permission',
        'as' => 'school.add_permission',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.create_permission' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/create_permission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\PermissionsController@create_permission',
        'controller' => 'App\\Http\\Controllers\\School\\PermissionsController@create_permission',
        'as' => 'school.create_permission',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.delete_permission' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/delete',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\PermissionsController@delete',
        'controller' => 'App\\Http\\Controllers\\School\\PermissionsController@delete',
        'as' => 'school.delete_permission',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.edit_permission' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'school/edit_permission/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\PermissionsController@editpermission',
        'controller' => 'App\\Http\\Controllers\\School\\PermissionsController@editpermission',
        'as' => 'school.edit_permission',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.update_permission' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/update_permission',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\PermissionsController@update_permission',
        'controller' => 'App\\Http\\Controllers\\School\\PermissionsController@update_permission',
        'as' => 'school.update_permission',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'school.logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'school/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'school_auth',
        ),
        'uses' => 'App\\Http\\Controllers\\School\\Auth\\AuthController@logout',
        'controller' => 'App\\Http\\Controllers\\School\\Auth\\AuthController@logout',
        'namespace' => NULL,
        'prefix' => 'school',
        'where' => 
        array (
        ),
        'as' => 'school.logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);
