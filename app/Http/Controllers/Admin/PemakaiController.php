<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pemakai;
use Illuminate\Http\Request;

class PemakaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pemakai = Pemakai::all();
        if ($request->ajax()) {
            $view = view('admin.pemakai.data', [
                'pemakai' => $pemakai,
            ]);
            return $view;
        }

        return view('admin.pemakai.index', [
            'pemakai' => $pemakai,
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
        Pemakai::create([
            'nm_pemakai' => $request->nm_pemakai,
            'umur' => $request->umur,
            'jenkel' => $request->jenkel,
            'alamat' => $request->alamat,
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
        return Pemakai::find($id);
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
        Pemakai::find($id)
            ->update([
                'nm_pemakai' => $request->nm_pemakai,
                'umur' => $request->umur,
                'jenkel' => $request->jenkel,
                'alamat' => $request->alamat,
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
        Pemakai::destroy($id);
    }
}
