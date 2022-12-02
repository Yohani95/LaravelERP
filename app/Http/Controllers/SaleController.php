<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Dte;
use Illuminate\Support\Facades\DB;
use App\Models\Caf;
use App\Models\CertificadosDigitale;
use App\Models\SoldProduct;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

/**
 * Class SaleController
 * @package App\Http\Controllers
 */
class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales = Sale::paginate();

        return view('sale.index', compact('sales'))
            ->with('i', (request()->input('page', 1) - 1) * $sales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sale = new Sale();
        return view('sale.create', compact('sale'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            request()->validate(Sale::$rules);
            $caf=Caf::all()->where('type_document',$request->type_document);
            $sale = Sale::create($request->all());          
            $dte=new Dte();
            $dte->user_id=Auth::id();
            $dte->sale_id=sale::max('id');
            DB::commit();
            return redirect()->route('sales.index')
                ->with('success', 'Venta Creada Correctamente.');
        } catch (\Throwable $th) {
            DB::rollback();
            return redirect()->route('sales.index')
                ->with('error', 'error.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sale = Sale::find($id);

        return view('sale.show', compact('sale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sale = Sale::find($id);

        return view('sale.edit', compact('sale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Sale $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        request()->validate(Sale::$rules);

        $sale->update($request->all());

        return redirect()->route('sales.index')
            ->with('success', 'Venta Actualiza Correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        try {
            Log::info("Entro a anular el pago [USER: ".Auth::id()."]");
            DB::beginTransaction();
            $sale = Sale::find($id)->delete();
            $sold_product=SoldProduct::where('id',$id)->get();
            Log::info($sold_product);
            foreach ($sold_product as $key => $value) {

                $product=Product::where('code',$value->code)->first();
                Log::info($product);
                $product->count=$product->count+$value->quantity;
                $product->save();
            }
            DB::commit();
            Log::info("Salio de anular el pago [USER: ".Auth::id()."]");
            return redirect()->route('sales.index')
                ->with('success', 'Venta Anulada Correctamente');
        } catch (\Throwable $th) {
            DB::rollback();
            Log::error("Error anular el pago [USER: ".Auth::id()."]");
            Log::error($th);
            return redirect()->route('building.page');
        }
    }   
   
}
