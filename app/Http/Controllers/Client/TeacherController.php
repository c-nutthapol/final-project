<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function courses()
    {
        return view('client.teacher.index');
    }

    public function courseManageOverview(Request $request)
    {
        $id = $request->id;
        return view('client.teacher.course.manage.overview', compact('id'));
    }
    public function courseManageLearn(Request $request)
    {
        $id = $request->id;
        return view('client.teacher.course.manage.learn', compact('id'));
    }

    public function courseManageRequirements(Request $request)
    {
        $id = $request->id;
        return view('client.teacher.course.manage.requirements', compact('id'));
    }


    public function courseContent(Request $request)
    {
        $id = $request->id;
        return view('client.teacher.course.content.index', compact('id'));
    }

    public function courseContenFrom(Request $request)
    {
        $id = $request->id;
        return view('client.teacher.course.content.form', compact('id'));
    }

    public function setting(Request $request)
    {
        $id = $request->id;
        return view('client.teacher.course.settings', compact('id'));
    }
}
