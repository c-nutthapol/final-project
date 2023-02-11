<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class CertificateController extends Controller
{
    public function index()
    {
        $pdf = PDF::loadView('', [], []);

        return $pdf->setPaper('a4')->setOrientation('landscape')->stream();
    }
}
