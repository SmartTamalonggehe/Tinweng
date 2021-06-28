<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hasil;
use Illuminate\Http\Request;

class ShowHasilController extends Controller
{
    public function index()
    {
        $hasil = Hasil::all();
        return view('admin.showHasil.index', [
            'hasil' => $hasil
        ]);
    }
}
