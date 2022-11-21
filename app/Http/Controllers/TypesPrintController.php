<?php

namespace App\Http\Controllers;

use App\Models\TypesPrint;
use Illuminate\Http\Request;

/**
 * Class TypesPrintController
 * @package App\Http\Controllers
 */
class TypesPrintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typesPrints = TypesPrint::paginate();

        return view('types-print.index', compact('typesPrints'))
            ->with('i', (request()->input('page', 1) - 1) * $typesPrints->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typesPrint = new TypesPrint();
        return view('types-print.create', compact('typesPrint'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TypesPrint::$rules);

        $typesPrint = TypesPrint::create($request->all());

        return redirect()->route('types-prints.index')
            ->with('success', 'TypesPrint created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $typesPrint = TypesPrint::find($id);

        return view('types-print.show', compact('typesPrint'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $typesPrint = TypesPrint::find($id);

        return view('types-print.edit', compact('typesPrint'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TypesPrint $typesPrint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypesPrint $typesPrint)
    {
        request()->validate(TypesPrint::$rules);

        $typesPrint->update($request->all());

        return redirect()->route('types-prints.index')
            ->with('success', 'TypesPrint updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $typesPrint = TypesPrint::find($id)->delete();

        return redirect()->route('types-prints.index')
            ->with('success', 'TypesPrint deleted successfully');
    }
}
