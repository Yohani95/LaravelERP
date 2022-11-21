<?php

namespace App\Http\Controllers;

use App\Models\CertificadosDigitale;
use Illuminate\Http\Request;

/**
 * Class CertificadosDigitaleController
 * @package App\Http\Controllers
 */
class CertificadosDigitaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificadosDigitales = CertificadosDigitale::paginate();

        return view('certificados-digitale.index', compact('certificadosDigitales'))
            ->with('i', (request()->input('page', 1) - 1) * $certificadosDigitales->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $certificadosDigitale = new CertificadosDigitale();
        return view('certificados-digitale.create', compact('certificadosDigitale'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CertificadosDigitale::$rules);

        $certificadosDigitale = CertificadosDigitale::create($request->all());

        return redirect()->route('certificados-digitales.index')
            ->with('success', 'CertificadosDigitale created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $certificadosDigitale = CertificadosDigitale::find($id);

        return view('certificados-digitale.show', compact('certificadosDigitale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $certificadosDigitale = CertificadosDigitale::find($id);

        return view('certificados-digitale.edit', compact('certificadosDigitale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CertificadosDigitale $certificadosDigitale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CertificadosDigitale $certificadosDigitale)
    {
        request()->validate(CertificadosDigitale::$rules);

        $certificadosDigitale->update($request->all());

        return redirect()->route('certificados-digitales.index')
            ->with('success', 'CertificadosDigitale updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $certificadosDigitale = CertificadosDigitale::find($id)->delete();

        return redirect()->route('certificados-digitales.index')
            ->with('success', 'CertificadosDigitale deleted successfully');
    }
}
