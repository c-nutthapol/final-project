<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('client.home');
    }

    public function courses()
    {
        return view('client.courses.index');
    }
    public function courseDetail($id)
    {
        return view('client.courses.detail', compact('id'));
    }
}
