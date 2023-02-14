<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RequestLecturerController extends Controller
{
    public function __construct()
    {
        if (auth()->check()) {
            if (auth()->user()->level == 'student') {
            } else if (in_array(auth()->user()->level, ['administrator', 'lecturer'])) {

            }
        }
    }

    public function redirectTo()
    {
    }
}
