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
}
