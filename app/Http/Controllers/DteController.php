<?php

namespace App\Http\Controllers;

use App\Models\Dte;
use Illuminate\Http\Request;

/**
 * Class DteController
 * @package App\Http\Controllers
 */
class DteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtes = Dte::paginate();

        return view('dte.index', compact('dtes'))
            ->with('i', (request()->input('page', 1) - 1) * $dtes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dte = new Dte();
        return view('dte.create', compact('dte'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Dte::$rules);

        $dte = Dte::create($request->all());

        return redirect()->route('dtes.index')
            ->with('success', 'Dte created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dte = Dte::find($id);

        return view('dte.show', compact('dte'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dte = Dte::find($id);

        return view('dte.edit', compact('dte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Dte $dte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dte $dte)
    {
        request()->validate(Dte::$rules);

        $dte->update($request->all());

        return redirect()->route('dtes.index')
            ->with('success', 'Dte updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $dte = Dte::find($id)->delete();

        return redirect()->route('dtes.index')
            ->with('success', 'Dte deleted successfully');
    }
}
