<?php

namespace App\Http\Controllers\Admin;

use App\Models\Kriteria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Aturan;
use App\Models\NilaiKriteria;

class AturanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $kriteria = Kriteria::all();
        $nilai_kriteria = NilaiKriteria::all();

        $aturan = Aturan::all();

        // return $aturan;
        // $aturan = Aturan::where('kelompok', Aturan::get('kelompok'))->get();

        if ($request->ajax()) {
            $view = view('admin.aturan.data', [
                'kriteria' => $kriteria,
                'nilai_kriteria' => $nilai_kriteria,
                'aturan' => $aturan
            ]);
            return $view;
        }

        return view('admin.aturan.index', [
            'nilai_kriteria' => $nilai_kriteria,
            'kriteria' => $kriteria,
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

        $aturan = $request->nilai_kriteria_id;

        $kelompok = Aturan::max('kelompok') + 1;

        for ($i = 0; $i < count($aturan); $i++) {
            Aturan::create([
                'nilai_kriteria_id' => $aturan[$i],
                'kelompok' => $kelompok
            ]);
        }
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
