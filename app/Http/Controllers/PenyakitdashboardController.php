<?php

namespace App\Http\Controllers;

use App\Models\penyakit_dashboard;
use App\Http\Requests\StorepenyakitDashboardRequest;
use App\Http\Requests\UpdatepenyakitDashboardRequest;

class PenyakitdashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('Admin.Penyakit.index',[
        //     'penyakitDashboard'=>penyakitDashboard::latest()->paginate(6)
        // ]);
        $penyakitDashboard= penyakit_dashboard::all();
        return view('Admin.Penyakit.index',compact('penyakitDashboard'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Penyakit.create',[
            'penyakitDashboard'=>penyakit_dashboard::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepenyakitDashboardRequest $request)
    {
        // return $request->file('gambar')->store('post-images');
        // dd($request);
        $validateData = $request->validate([
            'kode_penyakit' => 'required|unique:penyakit_dashboards',
            'nama_penyakit' => 'required',
            'definisi' => 'required',
            'penangganan' => 'required',
            'due_date' => 'required',
            'gambar' => 'required|image|file|max:2048'
        ]);

        // dd($request);
        if ($request->file('gambar')) {
            $gambarPath = $request->file('gambar')->store('post-images');
            $validateData['gambar'] = $gambarPath;
        }
        // dd($validateData);
        // dd($validateData);
        penyakit_dashboard::create($validateData);
        return redirect('/admin-penyakit')->with('pesan', 'Data berhasil ditambah');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Find the penyakitDashboard model by ID
        $detailPenyakit = penyakit_dashboard::find($id);

        if (!$detailPenyakit) {
            return redirect()->route('post-images'); // Adjust the route name
        }

        return view('Admin.Penyakit.detail', [
            'detailPenyakit' => $detailPenyakit
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(penyakit_dashboard $penyakitDashboard)
    {
        return view('Admin.Penyakit.edit',[
            'penyakitdashboard'=>$penyakitDashboard
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepenyakitDashboardRequest $request, penyakit_dashboard $penyakitDashboard)
    {
        $validatedData=$request->validate([
            'kode_penyakit'=>'required',
            'nama_penyakit'=>'required',
            'definisi'=>'required',
            'penangganan'=>'required',
            'due_date'=>'required',
            'gambar' => 'required|image|file|max:2048'
        ]);
        if ($request->file('gambar')) {
            $gambarPath = $request->file('gambar')->store('post-images');
            $validateData['gambar'] = $gambarPath;
        }
        penyakit_dashboard::WHERE('id',$penyakitDashboard->id)->update($validatedData);
        return redirect('/admin-gejala')->with('pesan','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(penyakit_dashboard $penyakitDashboard)
    {
        penyakit_dashboard::destroy($penyakitDashboard->id);
        return redirect('/admin-penyakit')->with('Pesan','Data berhasil dihapus');
    }
}