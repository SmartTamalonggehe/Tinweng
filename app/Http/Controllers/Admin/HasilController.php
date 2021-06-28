<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Aturan;
use App\Models\Hasil;
use App\Models\Kriteria;
use App\Models\NilaiKriteria;
use App\Models\NilaiPemakai;
use App\Models\Pemakai;
use Facade\FlareClient\Http\Response;
use Hamcrest\Type\IsInteger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HasilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected function PerhitunganVariabel()
    {
        $nilai_kriteria = DB::table('nilai_kriteria')
            ->join('kriteria', 'kriteria.id', 'nilai_kriteria.kriteria_id')
            ->whereNotIn('jenis', ['Z'])
            ->orderBy('nm_kriteria')
            ->get();

        $nilai_pemakai_a = DB::table('nilai_pemakai')
            ->join('pemakai', 'pemakai.id', 'nilai_pemakai.pemakai_id')
            ->join('kriteria', 'kriteria.id', 'nilai_pemakai.kriteria_id')
            ->select('nilai_pemakai.kriteria_id', 'bobot_pemakai', 'nm_pemakai', 'nm_kriteria', 'nilai_pemakai.pemakai_id')
            ->orderBy('pemakai.nm_pemakai')
            ->orderBy('nilai_pemakai.kriteria_id')
            ->get();


        $bb_k_h1 = [];
        $bb_k_h2 = [];
        $bb_k_h3 = [];

        foreach ($nilai_kriteria->where('himpunan_id', '1') as $key => $value) {
            $bb_k_h1[] = [
                'kriteria_id' => $value->kriteria_id,
                'bobot_kriteria' => $value->bobot_kriteria,
                'himpunan' => $value->himpunan_id,
                'metode' => $value->metode,
                'operator' => $value->operator,
            ];
        }

        foreach ($nilai_kriteria->where('himpunan_id', '2') as $key => $value) {
            $bb_k_h2[] = [
                'kriteria_id' => $value->kriteria_id,
                'bobot_kriteria' => $value->bobot_kriteria,
                'himpunan' => $value->himpunan_id,
                'metode' => $value->metode,
                'operator' => $value->operator,
            ];
        }
        foreach ($nilai_kriteria->where('himpunan_id', '3') as $key => $value) {
            $bb_k_h3[] = [
                'kriteria_id' => $value->kriteria_id,
                'bobot_kriteria' => $value->bobot_kriteria,
                'himpunan' => $value->himpunan_id,
                'metode' => $value->metode,
                'operator' => $value->operator,
            ];
        }

        // $value['bobot_pemakai']
        $nilai_pemakai = json_decode($nilai_pemakai_a, true);
        $rendah = '';
        $sedang = '';
        $tinggi = '';
        $perhitungan_variabel = [];
        // Perhitungan Variabel
        foreach ($nilai_pemakai as $key => $value) {
            for ($i = 0; $i < 3; $i++) {
                if ($value['kriteria_id'] == $bb_k_h1[$i]['kriteria_id']) {
                    // Memberi nilai Pada variabel
                    $x = $value['bobot_pemakai'];
                    $domain_a = $bb_k_h1[$i]['bobot_kriteria'];
                    $domain_b = $bb_k_h2[$i]['bobot_kriteria'];
                    $domain_c = $bb_k_h3[$i]['bobot_kriteria'];
                    // Jika menggunakan nilai dari himpunan bukan bobot
                    if ($bb_k_h1[$i]['metode'] === "Himpunan" || $bb_k_h2[$i]['metode'] === "Himpunan" || $bb_k_h3[$i]['metode'] === "Himpunan") {

                        // Nanti Balik
                        if ($x  >=  $domain_a) {
                            $domain_a = $bb_k_h1[$i]['himpunan'];
                            $domain_b = $bb_k_h2[$i]['himpunan'];
                            $domain_c = $bb_k_h3[$i]['himpunan'];
                            $x = $bb_k_h1[$i]['himpunan'];
                        } elseif ($x <= $domain_b) {
                            $domain_a = $bb_k_h1[$i]['himpunan'];
                            $domain_b = $bb_k_h2[$i]['himpunan'];
                            $domain_c = $bb_k_h3[$i]['himpunan'];
                            $x = $bb_k_h2[$i]['himpunan'];
                        } elseif ($x >= $domain_c) {
                            $domain_a = $bb_k_h1[$i]['himpunan'];
                            $domain_b = $bb_k_h2[$i]['himpunan'];
                            $domain_c = $bb_k_h3[$i]['himpunan'];
                            $x = $bb_k_h3[$i]['himpunan'];
                        }
                    }
                    // Mencari Rendah
                    if ($x <= $domain_a) {
                        $rendah = 1;
                    }
                    if ($x >= $domain_a && $x <= $domain_b) {
                        $hitung = ($domain_b - $x) / ($domain_b - $domain_a);
                        $rendah = number_format($hitung, 2);
                    }
                    if ($x >= $domain_b) {
                        $hitung = 0;
                        $rendah = number_format($hitung, 2);
                    }
                    // Mencari Sedang
                    if ($x <= $domain_a) {
                        $hitung = 0;
                        $sedang = number_format($hitung, 2);
                    }
                    if ($x >= $domain_a && $x <= $domain_b) {
                        $hitung = ($x - $domain_a) / ($domain_b - $domain_a);
                        $sedang = number_format($hitung, 2);
                    }
                    if ($x >= $domain_b && $x <=  $domain_c) {
                        $hitung = ($domain_c - $x) / ($domain_c - $domain_b);
                        $sedang = number_format($hitung, 2);
                    }
                    if ($x >=  $domain_c) {
                        $hitung = 1;
                        $sedang = number_format($hitung, 2);
                    }
                    // Mencari Tinggi
                    if ($x <= $domain_b) {
                        $hitung = 0;
                        $tinggi = number_format($hitung, 2);
                    }
                    if ($x >= $domain_b && $x <=  $domain_c) {
                        $hitung = ($x - $domain_b) / ($domain_c - $domain_b);
                        $tinggi = number_format($hitung, 2);
                    }
                    if ($x >=  $domain_c) {
                        $hitung = 1;
                        $tinggi = number_format($hitung, 2);
                    }
                }
            }
            $perhitungan_variabel[] = [
                'pemakai_id' => $value['pemakai_id'],
                'nm_pemakai' => $value['nm_pemakai'],
                'bobot_pemakai' => $value['bobot_pemakai'],
                'nm_kriteria' => $value['nm_kriteria'],
                'kriteria_id' => $value['kriteria_id'],
                'rendah' => $rendah,
                'sedang' => $sedang,
                'tinggi' => $tinggi,
            ];
        }
        return $perhitungan_variabel;
    }


    public function index(Request $request)
    {
        $hasil = Hasil::all();
        $nilai_kriteria = NilaiKriteria::all()
            ->sortBy('kriteria.id')
            ->whereNotIn('kriteria.jenis', ['Z']);

        $nilai_pemakai = NilaiPemakai::all()
            ->sortBy('kriteria.id');

        $pemakai = Pemakai::all();



        if ($request->ajax()) {
            $view = view('admin.hasil.data', [
                'hasil' => $hasil,
                'nilai_kriteria' => $nilai_kriteria,
                'nilai_pemakai' => $nilai_pemakai,
                'pemakai' => $pemakai,


            ]);
            return $view;
        }

        return view('admin.hasil.index', [
            'hasil' => $hasil,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $perhitungan_variabel = $this->PerhitunganVariabel();
        $pemakai = Pemakai::all();
        $aturan = Aturan::with(['nilaiKriteria' => function ($nilaiKriteria) {
            $nilaiKriteria->with('kriteria');
            $nilaiKriteria->with('himpunan');
        }])->get();

        $group_aturan = DB::table('aturan')
            ->select('kelompok')->groupBy('kelompok')
            ->get();

        return response()->json([
            'pemakai' => $pemakai,
            'perhitungan_variabel' => $perhitungan_variabel,
            'aturan' => $aturan,
            'group_aturan' => $group_aturan
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Hasil::truncate();
        $ulang = $request->pemakai_id;

        for ($i = 0; $i < count($ulang); $i++) {
            Hasil::create([
                'pemakai_id' => $request->pemakai_id[$i],
                'nilai' => $request->hasil[$i],
            ]);
        }

        return redirect()->route('showHasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
