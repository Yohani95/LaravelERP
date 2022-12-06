<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cellar;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Exports\ProductsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
/**
 * Class ProductController
 * @package App\Http\Controllers
 */
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate();

        return view('product.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * $products->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product();
        $subcategory=SubCategory::pluck('name','id');
        $cellar=Cellar::pluck('name','id');
        return view('product.create', compact('product','subcategory','cellar'));
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
            request()->validate(Product::$rules);
            $product = Product::create($request->all());
        return redirect()->route('products.index')
            ->with('success', 'Producto creado Correctamente.');
        } catch (\Throwable $th) {
            return view('error.error-500')
            ->with('success', 'Error al crear producto.');
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
        $product = Product::find($id);

        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $subcategory=SubCategory::pluck('name','id');
        $cellar=Cellar::pluck('name','id');
        return view('product.edit', compact('product','subcategory','cellar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        request()->validate(Product::$rules);

        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Producto Editado Correctamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $product = Product::find($id)->delete();

        return redirect()->route('products.index')
            ->with('success', 'Producto Eliminado Correctamente.');
    }
    /**
     * download excel.
     * @return \Illuminate\Http\Response
     */
    public function export() 
    {
        return Excel::download(new ProductsExport, 'Productos.xlsx');
    }
}
