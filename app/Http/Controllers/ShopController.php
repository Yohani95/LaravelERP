<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Dte;
use Illuminate\Support\Facades\DB;
use App\Models\Caf;
use App\Models\CertificadosDigitale;
use App\Models\SoldProduct;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
class ShopController extends Controller
{
    public function index()
    {
        try {
            $products = Product::paginate();
            return view('sale.shop.index', compact('products'))
                ->with('i', (request()->input('page', 1) - 1) * $products->perPage());
        } catch (\Throwable $th) {
            return view('error.error-500');
        }
    }
    public function pay(Request $request){
        try {
            Log::info("Entro a Realizar el pago [USER: ".Auth::id()."]");
            DB::beginTransaction();
            //$caf=Caf::all()->where('type_document',$request->type_document);
            $sale = new Sale();
            $sale->total=$request->total;
            $sale->iva=$request->iva;
            $sale->neto=$request->neto;
            $sale->description="Pago de Venta";
            $sale->num_folio=1;
            $sale->discount=0;
            $sale->type_document=$request->doc;
            $sale->name_route_xml="ruta_de_xml";
            $sale->user_id=Auth::id();
            $sale->status_id=2;
            $sale->payment_date=Carbon::now();
            $sale->save();
            foreach ($request->soldProduct as $key => $value) {
                $sold=new SoldProduct();
                $sold->name=$value['name'];
                $sold->code=$value['code'];
                $sold->quantity=$value['count'];
                $sold->user_id=Auth::id();
                $sold->sale_id=Sale::max('id');
                $sold->unit_price=$value['price'];
                $sold->cellar_id=$value['cellar_id'];
                $sold->save();
                $product=Product::find($value['id']);
                $product->count=$product->count-$value['count'];
                $product->update();
            } 
            // $dte=new Dte();
            // $dte->user_id=Auth::id();
            // $dte->sale_id=sale::max('id');
            DB::commit();
            Log::info("Salida de Pago");
            return response()->json(200);
        } catch (\Throwable $th) {
            DB::rollback();
            Log::error($th);
            return response()->json(500);
        }
    }
}
