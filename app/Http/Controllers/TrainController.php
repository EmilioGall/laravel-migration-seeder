<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index() {

        $curDate = date('Y-m-d');

        $trainsObj = Train::where('departure_day', '>=', $curDate)->get();

        // dd($trainsObj);

        return view('home', compact('trainsObj'));
    }
}
