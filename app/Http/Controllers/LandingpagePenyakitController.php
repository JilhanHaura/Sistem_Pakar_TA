<?php

namespace App\Http\Controllers;
use App\Models\penyakit_dashboard;
use App\Models\landingpagePenyakit;
use App\Http\Requests\StorelandingpagePenyakitRequest;
use App\Http\Requests\UpdatelandingpagePenyakitRequest;

class LandingpagePenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $LpPenyakit=penyakitDashboard::all();
        // return view('LandingPage.Penyakit.penyakit', compact('LpPenyakit'));
           return view('LandingPage.Penyakit.penyakit',[
            'LpPenyakit'=>penyakit_dashboard::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorelandingpagePenyakitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(landingpagePenyakit $landingpagePenyakit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(landingpagePenyakit $landingpagePenyakit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatelandingpagePenyakitRequest $request, landingpagePenyakit $landingpagePenyakit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(landingpagePenyakit $landingpagePenyakit)
    {
        //
    }
}
