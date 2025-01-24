<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function invoice($iid)
    {
     
        $data = Payment::find($iid);

        $pdf = Pdf::loadView('backend.payments.invoice',compact('data'));
        // return $pdf->download();
      return $pdf->stream();
    }
}
