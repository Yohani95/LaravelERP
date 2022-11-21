<?php

namespace App\Http\Controllers;

use App\Models\CategoriesFinance;
use Illuminate\Http\Request;

/**
 * Class CategoriesFinanceController
 * @package App\Http\Controllers
 */
class CategoriesFinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriesFinances = CategoriesFinance::paginate();

        return view('categories-finance.index', compact('categoriesFinances'))
            ->with('i', (request()->input('page', 1) - 1) * $categoriesFinances->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoriesFinance = new CategoriesFinance();
        return view('categories-finance.create', compact('categoriesFinance'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CategoriesFinance::$rules);

        $categoriesFinance = CategoriesFinance::create($request->all());

        return redirect()->route('categories-finances.index')
            ->with('success', 'CategoriesFinance created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoriesFinance = CategoriesFinance::find($id);

        return view('categories-finance.show', compact('categoriesFinance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoriesFinance = CategoriesFinance::find($id);

        return view('categories-finance.edit', compact('categoriesFinance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CategoriesFinance $categoriesFinance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoriesFinance $categoriesFinance)
    {
        request()->validate(CategoriesFinance::$rules);

        $categoriesFinance->update($request->all());

        return redirect()->route('categories-finances.index')
            ->with('success', 'CategoriesFinance updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $categoriesFinance = CategoriesFinance::find($id)->delete();

        return redirect()->route('categories-finances.index')
            ->with('success', 'CategoriesFinance deleted successfully');
    }
}
