<?php

namespace App\Http\Controllers;
use App\Models\gejala_dashboard as Gejala;
use App\Models\penyakit_dashboard as Penyakit;
use App\Models\ruleDashboard as Rule;

use App\Models\Diagnosis;
use App\Http\Requests\StoreDiagnosisRequest;
use App\Http\Requests\UpdateDiagnosisRequest;
use App\Models\penyakitLp;
use App\Models\RuleLp;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class DiagnosisController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /**
     * Menampilkan halaman form untuk konsultasi penyakit.
     */ public function index(Request $request)
{
    $gejalaList = Gejala::all();
    $data=[];

    if ($request->isMethod('post')) {
        $gejala = $request->input('gejala');
        $penyakit = [];

        $rules = RuleLp::with('gejala', 'penyakit')->get();

        foreach ($rules as $rule) {
            $gejalaAturan = $rule->gejala;
            $ruleAktif = true;

            foreach ($gejalaAturan as $gejalaRule) {
                if (!in_array($gejalaRule->kode_gejala, $gejala)) {
                    $ruleAktif = false;
                    break;
                }
            }

            if ($ruleAktif) {
                $penyakit[] = $rule->penyakit->kode_penyakit;
            }
        }

        $penyakit = array_unique($penyakit);
        $data = Penyakit::whereIn('kodePenyakit', $penyakit)->get();

    }


    return view('LandingPage.Rule.index_test', compact('gejalaList', 'data'));
}


    public function diagnose(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'gejala' => 'required|array',
            'gejala.*' => 'exists:gejala_dashboards,kode_gejala',
        ]);

        if ($validator->fails()) {
            return redirect()->route('diagnosis')->withErrors($validator)->withInput();
        }
        // dd($validator);

        $gejala = $request->input('gejala');
        $arrayKodeGejala = array_map(function($gejala) {
            return "'$gejala'";
        }, $gejala);

        $stringKodeGejala = implode(",", $arrayKodeGejala); $stringKodeGejala = implode("', '", $gejala);
        $data = DB::select("
        SELECT
	        penyakit_dashboards.nama_penyakit,
	        max(penyakit_dashboards.definisi) as definisi,
	        max(penyakit_dashboards.penangganan) as penangganan,
	        max(gejala_dashboards.nama_gejala) as nama_gejala,
            COUNT(*) AS jumlah
        FROM
	        rule_dashboards
	    INNER JOIN
	        penyakit_dashboards
	            ON
		    rule_dashboards.penyakit_id = penyakit_dashboards.id
	    INNER JOIN
	        gejala_dashboards
	            ON
		    rule_dashboards.gejala_id = gejala_dashboards.id
        WHERE
	        gejala_dashboards.kode_gejala IN ('$stringKodeGejala')
        GROUP BY
	        penyakit_dashboards.nama_penyakit
	    ORDER BY
            jumlah DESC LIMIT 1;");

        // dd($data);
        $penyakit = [];
        $gejalaList = Gejala::all();

        return view('LandingPage.Rule.index_test', compact('gejalaList', 'data'));
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
    public function store(StoreDiagnosisRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Diagnosis $diagnosis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Diagnosis $diagnosis)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDiagnosisRequest $request, Diagnosis $diagnosis)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Diagnosis $diagnosis)
    {
        //
    }
}