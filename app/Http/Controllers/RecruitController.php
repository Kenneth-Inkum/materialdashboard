<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Recruit;
use App\Models\Industry;
use App\Models\JobTitle;
use Illuminate\Http\Request;

class RecruitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();

        $industries = Industry::orderBy('name','ASC')->get();

        $job_titles = JobTitle::orderBy('name','ASC')->get();

        return view('pages.user-forms.user-profile', compact('countries', 'job_titles', 'industries'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recruit  $recruit
     * @return \Illuminate\Http\Response
     */
    public function show(Recruit $recruit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recruit  $recruit
     * @return \Illuminate\Http\Response
     */
    public function edit(Recruit $recruit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recruit  $recruit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recruit $recruit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recruit  $recruit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recruit $recruit)
    {
        //
    }
}
