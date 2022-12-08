<?php

namespace App\Http\Controllers;

use App\Models\CertificadosDigitale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

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
        try {
            //code...
            request()->validate(CertificadosDigitale::$rules);
            $certificado = new CertificadosDigitale();
            if ($request->hasfile('ruta')) {
                $file = $request->file('ruta');
                $destinationPath = 'dte/certificados/';
                $filename = time() . '-' . $file->getClientOriginalName();
                $file->move('certificado', $filename);
            }
            $certificado->name = $request->name;
            $certificado->rut = $request->rut;
            $certificado->password = $request->password;
            $certificado->user_id = $request->user_id;
            $certificado->ruta = $filename;
            $certificado->save();

            return redirect()->route('certificados-digitales.index')
                ->with('success', 'Certificado Digital creado Correctamente.');
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
    public function getCertificado()
    {
        try {
            $certificadosDigitale = CertificadosDigitale::where('user_id', Auth::id())->first();
            $file=file(public_path('certificado/') . $certificadosDigitale->ruta,);
  return response()->file(public_path('certificado/') . $certificadosDigitale->ruta,['Content-Disposition' => ' filename="certificado.pfx"']);
  
        } catch (\Throwable $th) {
            return json_encode(500);
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
        $certificado = new CertificadosDigitale();
        if ($request->hasfile('ruta')) {
            $file = $request->file('ruta');
            $destinationPath = 'dte/certificados/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $file->move('certificado', $filename);
            $rutaDeArchivo = public_path('certificado/') . $certificado->ruta;
            if (file_exists($rutaDeArchivo)) {
                // aquí la borro el archivo pfx
                unlink(public_path('certificado/') . $certificado);
            }
        }
        $certificado->name = $request->name;
        $certificado->rut = $request->rut;
        $certificado->password = $request->password;
        $certificado->user_id = $request->user_id;
        $certificado->ruta = $filename;
        $certificado->save();
        $certificadosDigitale->update($request->all());

        return redirect()->route('certificados-digitales.index')
            ->with('success', 'Certificado Digital actualizado Correctamente.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        try {
            $certificadosDigitale = CertificadosDigitale::find($id);
            $rutaDeArchivo = public_path('certificado/') . $certificadosDigitale->ruta;
            if (file_exists($rutaDeArchivo)) {
                // aquí la borro el archivo pfx
                unlink(public_path('certificado/') . $certificadosDigitale->ruta);
                $certificadosDigitale->delete();
            }
            return redirect()->route('certificados-digitales.index')
                ->with('success', 'Certificado Digital eliminado Correctamente.');
        } catch (\Throwable $th) {
            return view('error.error-500');
        }
    }
}
