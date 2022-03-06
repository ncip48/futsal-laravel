<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['product'] = Product::count();
        $data['transaction'] = Transaction::count();
        $data['products'] = Product::all();
        return view('frontend.home', $data);
    }
}
