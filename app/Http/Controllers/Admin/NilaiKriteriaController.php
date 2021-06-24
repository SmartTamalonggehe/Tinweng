<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Himpunan;
use App\Models\Kriteria;
use App\Models\NilaiKriteria;
use Illuminate\Http\Request;

class NilaiKriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $nilaiKriteria = NilaiKriteria::with('kriteria')
            ->get()
            ->sortBy('kriteria.nm_kriteria')->sortBy('kriteria.jenis');

        $kriteria = Kriteria::orderBy('nm_kriteria')->get();
        $himpunan = Himpunan::orderBy('nm_himpunan')->get();

        if ($request->ajax()) {
            $view = view('admin.nilaiKriteria.data', [
                'nilaiKriteria' => $nilaiKriteria,
            ]);
            return $view;
        }

        return view('admin.nilaiKriteria.index', [
            'kriteria' => $kriteria,
            'himpunan' => $himpunan
        ]);
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
        NilaiKriteria::create([
            'kriteria_id' => $request->kriteria_id,
            'bobot_kriteria' => $request->bobot_kriteria,
            'himpunan_id' => $request->himpunan_id,
            'metode' => $request->metode,
            'operator' => $request->operator,
        ]);
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
        return NilaiKriteria::find($id);
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
        NilaiKriteria::find($id)
            ->update([
                'kriteria_id' => $request->kriteria_id,
                'bobot_kriteria' => $request->bobot_kriteria,
                'himpunan_id' => $request->himpunan_id,
                'metode' => $request->metode,
                'operator' => $request->operator,
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        NilaiKriteria::destroy($id);
    }
}
