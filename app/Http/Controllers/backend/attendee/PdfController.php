<?php

namespace App\Http\Controllers\backend\attendee;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function invoicen($booid)
    {

        $datas = Payment::where('booking_id', $booid)->get();

        foreach ($datas as $dta) {
            $data = $dta;
        }


        $pdf = PDF::loadView('backend.invoicen', compact('data'));
        // return $pdf->download();
        return $pdf->stream();
    }
}
