<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

//status = 0:waiting, 1:sukses, 2:processing, 3:cancel, 4:expired

class TransactionController extends Controller
{
    public function createTransaction(Request $request)
    {
        $rand = rand(1231, 7879);
        $code_booking = 'KONZ' . $rand;
        $transaction = Transaction::create([
            'id_product' => $request->id_product,
            'code_booking' => $code_booking,
            'name' => $request->name,
            'email' => $request->email,
            'handphone' => $request->handphone,
            'duration' => $request->duration,
            'total_price' => $request->total_price,
            'start' => $request->start,
            'end' => $request->end,
            'status' => 0
        ]);
        $code = Crypt::encrypt($transaction->code_booking);
        return redirect('booking?result=' . $code);
    }

    public function searchTransaction(Request $request)
    {
        $code = Crypt::encrypt($request->kode);
        return redirect('booking?result=' . $code);
    }

    public function showTransaction(Request $request)
    {
        $id = Crypt::decrypt($request->result);
        $data['result'] = Transaction::where('code_booking', $id)->first();
        return view('frontend.booking', $data);
    }
}
