<?php

namespace App\Http\Controllers;

use App\Models\district;
use Illuminate\Http\Request;

class DistrictsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('districts.view');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\district  $district
     * @return \Illuminate\Http\Response
     */
    public function show(district $district)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\district  $district
     * @return \Illuminate\Http\Response
     */
    public function edit(district $district)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\district  $district
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, district $district)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\district  $district
     * @return \Illuminate\Http\Response
     */
    public function destroy(district $district)
    {
        //
    }
}
