<?php

namespace App\Http\Controllers;

use App\Models\Ingress;
use Illuminate\Http\Request;

/**
 * Class IngressController
 * @package App\Http\Controllers
 */
class IngressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingresses = Ingress::paginate();

        return view('ingress.index', compact('ingresses'))
            ->with('i', (request()->input('page', 1) - 1) * $ingresses->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingress = new Ingress();
        return view('ingress.create', compact('ingress'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Ingress::$rules);

        $ingress = Ingress::create($request->all());

        return redirect()->route('ingresses.index')
            ->with('success', 'Ingress created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ingress = Ingress::find($id);

        return view('ingress.show', compact('ingress'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingress = Ingress::find($id);

        return view('ingress.edit', compact('ingress'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Ingress $ingress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingress $ingress)
    {
        request()->validate(Ingress::$rules);

        $ingress->update($request->all());

        return redirect()->route('ingresses.index')
            ->with('success', 'Ingress updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $ingress = Ingress::find($id)->delete();

        return redirect()->route('ingresses.index')
            ->with('success', 'Ingress deleted successfully');
    }
}
