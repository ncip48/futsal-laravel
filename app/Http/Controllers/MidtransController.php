<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;

class MidtransController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    //
    public function getSnapToken(Request $request)
    {

        $item_list = array();
        $amount = 0;
        Config::$serverKey = config('midtrans.server_key');
        if (!isset(Config::$serverKey)) {
            return "Please set your payment server key";
        }
        Config::$isSanitized = true;

        // Enable 3D-Secure
        Config::$is3ds = true;

        // $enable_payments = array('gopay', 'bank_transfer');
        $enable_payments = array('gopay', 'shopeepay');
        // "enabled_payments": [
        //     "credit_card",
        //     "gopay",
        //     "shopeepay",
        //     "permata_va",
        //     "bca_va",
        //     "bni_va",
        //     "bri_va",
        //     "echannel",
        //     "other_va",
        //     "danamon_online",
        //     "mandiri_clickpay",
        //     "cimb_clicks",
        //     "bca_klikbca",
        //     "bca_klikpay",
        //     "bri_epay",
        //     "xl_tunai",
        //     "indosat_dompetku",
        //     "kioson",
        //     "Indomaret",
        //     "alfamart",
        //     "akulaku"
        // ]
        // Required
        $transaction = [
            'enabled_payments' => $enable_payments,
            'transaction_details' => [
                'order_id' => $request->code,
                'gross_amount' => $request->total,
            ],
            'item_details' => [
                [
                    'id' => 1,
                    'price' => $request->product['price'],
                    'quantity' => $request->product['qty'],
                    'name' => $request->product['name'],
                ],
            ],
            'customer_details' => [
                'first_name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
            ],
            'gopay' => [
                "enable_callback" => true,
                "callback_url" => "https://tokoecommerce.com/gopay_finish"
            ]
        ];
        // return $transaction;
        try {
            $snapToken = Snap::getSnapToken($transaction);
            // return response()->json($snapToken);
            return ['code' => 1, 'message' => 'success', 'result' => $snapToken];
        } catch (\Exception $e) {
            dd($e);
            return ['code' => 0, 'message' => 'failed'];
        }
    }
}
