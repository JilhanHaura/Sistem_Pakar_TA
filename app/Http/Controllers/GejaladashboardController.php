<?php

namespace App\Http\Controllers;

use App\Models\gejala_dashboard;
use App\Http\Requests\StoregejaladashboardRequest;
use App\Http\Requests\UpdategejaladashboardRequest;
use App\Models\Gejala;

class GejaladashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('Admin.Gejala.index',[
        //     'gejaladashboards' =>gejaladashboard::latest()
        // ]);
        $gejaladashboards= gejala_dashboard::all();
        return view('Admin.Gejala.index',compact('gejaladashboards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Gejala.create-gejala',[
            'gejaladashboards' =>gejala_dashboard::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoregejaladashboardRequest $request)
    {
        $validateData=$request->validate([
            'kode_gejala'=>'required|unique:gejaladashboards',
            'nama_gejala'=>'required',
            'due_date'=>'required'
        ]);
        gejala_dashboard::create($validateData);
        return redirect('/admin-gejala')->with('pesan','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(gejala_dashboard $gejaladashboard,$id)
    {
        // $gejaladashboard = gejaladashboard::find($id);
        //     return view('/admin-gejala', compact('gejaladashboard'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(gejala_dashboard $gejaladashboard)
    {
        return view('Admin.Gejala.edit',[
            'gejaladashboard'=>$gejaladashboard
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdategejaladashboardRequest $request, gejala_dashboard $gejaladashboard)
    {
        $validatedData=$request->validate([
            'kode_gejala'=>'required',
            'nama_gejala'=>'required',
            'due_date'=>'required'
        ]);
        gejala_dashboard::WHERE('id',$gejaladashboard->id)->update($validatedData);
        return redirect('/admin-gejala')->with('pesan','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(gejala_dashboard $gejaladashboard)
    {
        gejala_dashboard::destroy($gejaladashboard->id);
        return redirect('/admin-gejala')->with('Pesan','Data berhasil dihapus');
    }
}
