<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

//status = 0:waiting, 1:sukses, 2:batal, 3:expired

class TransactionController extends Controller
{
    public function createTransaction(Request $request)
    {
        $id_product = $request->id_product;
        $name = $request->name;
        $email = $request->email;
        $handphone = $request->handphone;
        $duration = $request->duration;
        $total_price = $request->total_price;
        $start = $request->start;
        $end = $request->end;
        $status = 0;
        $rand = rand(1231, 7879);
        $code_booking = 'KONZ' . $rand;
        $transaction = Transaction::create([
            'id_product' => $id_product,
            'code_booking' => $code_booking,
            'name' => $name,
            'email' => $email,
            'handphone' => $handphone,
            'duration' => $duration,
            'total_price' => $total_price,
            'start' => $start,
            'end' => $end,
            'status' => $status
        ]);
        $data['result'] = $transaction;
        return view('frontend.booking', $data);
    }
}
