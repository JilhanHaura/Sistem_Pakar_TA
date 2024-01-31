<?php

namespace App\Http\Controllers;

use App\Models\penyakit_dashboard;
use App\Models\penyakitLp;
use App\Http\Requests\StorepenyakitLpRequest;
use App\Http\Requests\UpdatepenyakitLpRequest;

class PenyakitLpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $landingpagePenyakit = penyakit_dashboard::all();
        return view('LandingPage.index',compact('landingpagePenyakit'));
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
    public function store(StorepenyakitLpRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $detailPenyakit = penyakit_dashboard::find($id);

        if (!$detailPenyakit) {
            return redirect()->route('post-images'); // Adjust the route name
        }

        // return view('Admin.Penyakit.detail', [
        //     'detailPenyakit' => $detailPenyakit
        // ]);
        return view('LandingPage.Penyakit.detailPenyakit',[
            'detailPenyakit'=>$detailPenyakit
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(penyakitLp $penyakitLp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepenyakitLpRequest $request, penyakitLp $penyakitLp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(penyakitLp $penyakitLp)
    {
        //
    }
}