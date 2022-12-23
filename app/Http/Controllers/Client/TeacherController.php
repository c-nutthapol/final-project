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

    public function courseManageOverview($id)
    {
        return view('client.teacher.course.manage.overview', compact('id'));
    }
    public function courseManageLearn($id)
    {
        return view('client.teacher.course.manage.learn', compact('id'));
    }

    public function courseManageRequirements($id)
    {
        return view('client.teacher.course.manage.requirements', compact('id'));
    }


    public function courseContent($id)
    {
        return view('client.teacher.course.content.index', compact('id'));
    }

    public function courseContenFrom($id)
    {
        return view('client.teacher.course.content.form', compact('id'));
    }

    public function courseContenEditEP($id)
    {
        return view('client.teacher.course.content.form', compact('id'));
    }

    public function courseContenEditQuiz($id)
    {
        return view('client.teacher.course.content.form', compact('id'));
    }

    public function courseReviews($id)
    {
        return view('client.teacher.course.reviews', compact('id'));
    }

    public function courseStudents($id)
    {
        return view('client.teacher.course.students', compact('id'));
    }

    public function courseSetting($id)
    {
        return view('client.teacher.course.settings', compact('id'));
    }
}
