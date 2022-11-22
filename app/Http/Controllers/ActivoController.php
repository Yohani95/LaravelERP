<?php

namespace App\Http\Controllers;

use App\Models\Activo;
use Illuminate\Http\Request;
use App\Models\Cellar;
use App\Models\SubCategory;
/**
 * Class ActivoController
 * @package App\Http\Controllers
 */
class ActivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activos = Activo::paginate();

        return view('activo.index', compact('activos'))
            ->with('i', (request()->input('page', 1) - 1) * $activos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activo = new Activo();
        $subcategory=SubCategory::pluck('name','id');
        $cellar=Cellar::pluck('name','id');
        return view('activo.create', compact('activo','subcategory','cellar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Activo::$rules);

        $activo = Activo::create($request->all());

        return redirect()->route('activos.index')
            ->with('success', 'Activo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activo = Activo::find($id);

        return view('activo.show', compact('activo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activo = Activo::find($id);

        $subcategory=SubCategory::pluck('name','id');
        $cellar=Cellar::pluck('name','id');
        return view('activo.create', compact('activo','subcategory','cellar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Activo $activo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Activo $activo)
    {
        request()->validate(Activo::$rules);

        $activo->update($request->all());

        return redirect()->route('activos.index')
            ->with('success', 'Activo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $activo = Activo::find($id)->delete();

        return redirect()->route('activos.index')
            ->with('success', 'Activo deleted successfully');
    }
}
