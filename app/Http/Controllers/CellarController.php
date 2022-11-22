<?php

namespace App\Http\Controllers;

use App\Models\Cellar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Class CellarController
 * @package App\Http\Controllers
 */
class CellarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cellars = Cellar::paginate();

        return view('cellar.index', compact('cellars'))
            ->with('i', (request()->input('page', 1) - 1) * $cellars->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cellar = new Cellar();
        return view('cellar.create', compact('cellar'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Cellar::$rules);
        $cellar = Cellar::create($request->all());
        return redirect()->route('cellars.index')
            ->with('success', 'Bodega Creado Correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cellar = Cellar::find($id);

        return view('cellar.show', compact('cellar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cellar = Cellar::find($id);

        return view('cellar.edit', compact('cellar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Cellar $cellar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cellar $cellar)
    {
        request()->validate(Cellar::$rules);

        $cellar->update($request->all());

        return redirect()->route('cellars.index')
            ->with('success', 'Bodega Actualizado Correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $cellar = Cellar::find($id)->delete();

        return redirect()->route('cellars.index')
            ->with('success', 'Cellar deleted successfully');
    }
}
