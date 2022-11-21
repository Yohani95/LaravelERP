<?php

namespace App\Http\Controllers;

use App\Models\Caf;
use Illuminate\Http\Request;

/**
 * Class CafController
 * @package App\Http\Controllers
 */
class CafController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cafs = Caf::paginate();

        return view('caf.index', compact('cafs'))
            ->with('i', (request()->input('page', 1) - 1) * $cafs->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $caf = new Caf();
        return view('caf.create', compact('caf'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Caf::$rules);

        $caf = Caf::create($request->all());

        return redirect()->route('cafs.index')
            ->with('success', 'Caf created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $caf = Caf::find($id);

        return view('caf.show', compact('caf'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caf = Caf::find($id);

        return view('caf.edit', compact('caf'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Caf $caf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Caf $caf)
    {
        request()->validate(Caf::$rules);

        $caf->update($request->all());

        return redirect()->route('cafs.index')
            ->with('success', 'Caf updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $caf = Caf::find($id)->delete();

        return redirect()->route('cafs.index')
            ->with('success', 'Caf deleted successfully');
    }
}
