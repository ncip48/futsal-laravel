<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Midtrans\Notification;
use Midtrans\Config;

class WebhookController extends Controller
{
    public function webhook(Request $req)
    {
        Config::$serverKey = config('midtrans.server_key');
        $notif = new Notification();

        // $bank = array_values($notif->va_numbers)[0];
        // if ($bank->bank == 'bri') {
        // }

        $transaction = $notif->transaction_status;
        $fraud = $notif->fraud_status;

        error_log("Order ID $notif->order_id: " . "transaction status = $transaction, fraud staus = $fraud");

        Payment::create([
            'code' => $notif->order_id,
            'payment_type' => $notif->payment_type,
            'transaction_id' => $notif->transaction_id,
            'transaction_time' => $notif->transaction_time,
            'transaction_status' => $notif->transaction_status,
            // 'bank_name' => $bank->bank,
            'bank_name' => 'no',
            // 'va_number' => $bank->va_number,
            'va_number' => 'no',
            'other' => json_encode($notif),
            'settlement_time' => $notif->settlement_time
        ]);

        //status = 0:waiting, 1:sukses, 2:processing, 3:cancel, 4:expired, 5:waiting payment
        if ($transaction == 'pending') {
            // $transaction = Payment::where('code', '=', $notif->order_id)->first();
            // if ($transaction === null) {
            //     // user doesn't exist
            //     Payment::create([
            //         'code' => $notif->order_id,
            //         'payment_type' => $notif->payment_type,
            //         'transaction_id' => $notif->transaction_id,
            //         'transaction_time' => $notif->transaction_time,
            //         'transaction_status' => $notif->transaction_status,
            //         // 'bank_name' => $bank->bank,
            //         'bank_name' => 'no',
            //         // 'va_number' => $bank->va_number,
            //         'va_number' => 'no',
            //         'other' => json_encode($notif)
            //     ]);
            // }
            Transaction::where('code_booking', $notif->order_id)->update(['status' => 5]);
        } else if ($transaction == 'settlement') {
            Transaction::where('code_booking', $notif->order_id)->update(['status' => 1]);
            $code_enc = Crypt::encrypt($notif->order_id);
            // redirect()->route('booking?order=' . $code_enc);
        } else if ($transaction == 'cancel') {
            // TODO Set payment status in merchant's database to 'failure'
            Transaction::where('code_booking', $notif->order_id)->update(['status' => 3]);
        } else if ($transaction == 'deny') {
            // TODO Set payment status in merchant's database to 'failure'
            Transaction::where('code_booking', $notif->order_id)->update(['status' => 3]);
        } else if ($transaction == 'expire') {
            Transaction::where('code_booking', $notif->order_id)->update(['status' => 4]);
            // TODO Set payment status in merchant's database to 'failure'
        }
    }
}
