<?php

namespace App\Http\Controllers;


use App\Models\penyakit_dashboard;
use App\Models\ruleDashboard;
use App\Http\Requests\StoreruleDashboardRequest;
use App\Http\Requests\UpdateruleDashboardRequest;
use App\Models\gejala_dashboard;

class RuleDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rule=ruleDashboard::all();
        $penyakit_dashboards = penyakit_dashboard::all();
        $gejaladashboards = gejala_dashboard::all();
        return view('Admin.Rule.index',compact('rule','penyakit_dashboards','gejaladashboards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        // return view('Admin.Rule.create', [
        //     'gejaladashboards' => gejaladashboard::all(),
        //     'penyakit_dashboards' => penyakitDashboard::all(),
        // ]);
        // dd($penyakit_dashboards);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreruleDashboardRequest $request)
    {
        $validatedData=$request->validate([
            'gejala_id'=>'required',
            'penyakit_id'=>'required'
        ]);
        ruleDashboard::create($validatedData);
        return redirect('/admin-rule')->with('pesan','Data berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(ruleDashboard $ruleDashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ruleDashboard $ruleDashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateruleDashboardRequest $request, ruleDashboard $ruleDashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ruleDashboard $ruleDashboard)
    {
        ruleDashboard::destroy($ruleDashboard->id);
        return redirect('/admin-rule')->with('Pesan','Data berhasil dihapus');
    }
}