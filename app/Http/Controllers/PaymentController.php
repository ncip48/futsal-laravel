<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Midtrans\Config;
use Midtrans\Snap;

class PaymentController extends Controller
{
    public function get_payment()
    {
        $client = new Client();
        try {
            $res = $client->request('GET', 'http://localhost:8000/token', []);
            $data = json_decode($res->getBody()->getContents());
            dd($data);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function pay()
    {
        Config::$serverKey = config('midtrans.server_key');
        if (!isset(Config::$serverKey)) {
            return "Please set your payment server key";
        }
        Config::$isSanitized = true;

        // Enable 3D-Secure
        Config::$is3ds = true;
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 10000,
            )
        );

        try {
            // Get Snap Payment Page URL
            $paymentUrl = Snap::createTransaction($params)->redirect_url;
            echo $paymentUrl;
            // Redirect to Snap Payment Page
            header('Location: ' . $paymentUrl);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
