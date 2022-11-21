<?php

namespace App\Http\Controllers;

use App\Models\JobPosition;
use Illuminate\Http\Request;

/**
 * Class JobPositionController
 * @package App\Http\Controllers
 */
class JobPositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobPositions = JobPosition::paginate();

        return view('job-position.index', compact('jobPositions'))
            ->with('i', (request()->input('page', 1) - 1) * $jobPositions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jobPosition = new JobPosition();
        return view('job-position.create', compact('jobPosition'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(JobPosition::$rules);

        $jobPosition = JobPosition::create($request->all());

        return redirect()->route('job-positions.index')
            ->with('success', 'JobPosition created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jobPosition = JobPosition::find($id);

        return view('job-position.show', compact('jobPosition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobPosition = JobPosition::find($id);

        return view('job-position.edit', compact('jobPosition'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  JobPosition $jobPosition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobPosition $jobPosition)
    {
        request()->validate(JobPosition::$rules);

        $jobPosition->update($request->all());

        return redirect()->route('job-positions.index')
            ->with('success', 'JobPosition updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $jobPosition = JobPosition::find($id)->delete();

        return redirect()->route('job-positions.index')
            ->with('success', 'JobPosition deleted successfully');
    }
}
