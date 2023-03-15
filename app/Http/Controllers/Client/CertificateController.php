<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;

class CertificateController extends Controller
{
    public function index()
    {
        $pdf = PDF::loadView('client.courses.certificate', [], [], [
            'title' => 'Certificate',
            'format' => 'A4',
            'orientation' => 'L',
            'margin_left'                => 0,
            'margin_right'               => 0,
            'margin_top'                 => 0,
            'margin_bottom'              => 0,

        ]);
        return $pdf->stream();
    }
}
