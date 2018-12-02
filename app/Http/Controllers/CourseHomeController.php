<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CourseHomeController extends Controller
{
    public function index()
    {
        $courses = DB::table('courses')->get();
        $users = DB::table('users')->get();
        $membership = DB::table('membership')->get();
        $studygroup = DB::table('studygroup')->get();
        $comments = DB::table('comments')->get();

        return view('coursehome', ['courses' => $courses, 'users' => $users,
        'membership' => $membership, 'studygroup' => $studygroup, 'comments' => $comments
        ]);
    }
}
