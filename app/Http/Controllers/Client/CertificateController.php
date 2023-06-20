<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use Illuminate\Http\Request;
use PDF;
use Vinkla\Hashids\Facades\Hashids;

class CertificateController extends Controller
{
    public function index()
    {
        $request = request();
        $id = Hashids::decodeHex($request->id ?? "");
        $certificate = Certificate::find($id);
        $full_name = $certificate->user->full_name;
        $course = $certificate->course->name;
        $issue_date = date('F d,Y',strtotime($certificate->issue_date));

        $pdf = PDF::loadView('client.courses.certificate', compact('full_name', 'course', 'issue_date'), [], [
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
