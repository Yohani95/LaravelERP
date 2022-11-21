<?php

namespace App\Http\Controllers;

use App\Models\Egress;
use Illuminate\Http\Request;

/**
 * Class EgressController
 * @package App\Http\Controllers
 */
class EgressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $egresses = Egress::paginate();

        return view('egress.index', compact('egresses'))
            ->with('i', (request()->input('page', 1) - 1) * $egresses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $egress = new Egress();
        return view('egress.create', compact('egress'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Egress::$rules);

        $egress = Egress::create($request->all());

        return redirect()->route('egresses.index')
            ->with('success', 'Egress created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $egress = Egress::find($id);

        return view('egress.show', compact('egress'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $egress = Egress::find($id);

        return view('egress.edit', compact('egress'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Egress $egress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Egress $egress)
    {
        request()->validate(Egress::$rules);

        $egress->update($request->all());

        return redirect()->route('egresses.index')
            ->with('success', 'Egress updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $egress = Egress::find($id)->delete();

        return redirect()->route('egresses.index')
            ->with('success', 'Egress deleted successfully');
    }
}
