<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    public function checkSchedule($date, $id)
    {
        return DB::table('transactions')
            ->whereRaw('"' . $date . '" BETWEEN start AND DATE_ADD(end,interval -1 hour)')
            ->where('id_product', $id)
            ->get()
            ->count();
    }

    public function searchSchedule(Request $request)
    {
        dd($request->all());  //to check all the datas dumped from the form
        //if your want to get single element,someName in this case
        $someName = $request->someName;
        return redirect('schedule');
    }

    public function getSchedule(Request $request)
    {
        $data['time'] = array("08:00", "09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00");
        $data['date'] = $request->date;
        $data['type'] = $request->type;
        $data['product'] = Product::where('id', $request->type)->first();
        // $wordlist = Wordlist::where('id', '<=', $correctedComparisons)->get();
        // $data['schedule'] = Transaction::whereBetween('')
        return view('frontend.schedule', $data);
    }
}
