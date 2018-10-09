<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Payment;

class PaymentsController extends Controller
{
    public function list() {
        $payments = Payment::orderBy('created_at', 'DESC')->paginate(20);

        return view('admin/payments/list')->with(['payments'=> $payments]);
    }

    public function create() {
        return view('admin/payments/create');
    }

    public function edit($id) {
        $payment = Payment::find($id);      
        if($payment == NULL)     return 'El Pago del cliente no existe';
        return view('admin/payments/edit')->with(['payment'=> $payment]);
    }

    public function store(Request $re) {

        $payment = new Payment();
        $payment->work_id = $re->work_id;
        $payment->amount = $re->amount;
        // $payment->date = $re->date;
        $payment->save();
        
        return redirect('app/receipts');

    }

    public function update($id, Request $re) {
        $payment = Payment::find($id);        
        $payment->amount = $re->amount;
        // $payment->date = $re->date;
        $payment->save();

        return back()->with('msj', 'Mensaje Actualizado');
    }
}
