<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SoldProduct;
use App\Models\Sale;
use App\Models\Dte;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $product=SoldProduct::groupby('name')
        ->groupBy('code')
        ->select(DB::raw("SUM(quantity) as quantity,name"))
        ->whereMonth('created_at',Carbon::now()->month)
        ->orderBy('quantity', 'desc')->limit(10)
        ->get();
        $totalDay=Sale::whereDay('created_at',Carbon::now()->day)
        ->select(DB::raw("SUM(total) as total"))->get();
        $totalMonth=Sale::whereMonth('created_at',Carbon::now()->month)
        ->select(DB::raw("SUM(total) as total,MONTH(created_at) as mes"))
        ->groupBy('mes')->get();
        $dte=Dte::count('id');
        $sale=Sale::select(DB::raw("SUM(total) as total,MONTH(created_at) as mes"))
        ->groupBy('mes')->get();
        $soldParticipe=SoldProduct::whereMonth('created_at',Carbon::now()->month)
        ->where('status_sale',false)
        ->select(DB::raw("SUM(unit_price*quantity) as total,name"))
        ->groupBy('code')
        ->groupBy('name')
        ->get();
        return view('home',compact('product','totalDay',
        'totalMonth','dte','sale','soldParticipe'));
    }
}
