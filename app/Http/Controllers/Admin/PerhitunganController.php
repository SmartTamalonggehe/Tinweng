<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    public function index(Request $request)
    {

        if ($request->ajax()) {
            $view = view('admin.hitungVariabel.data');
            return $view;
        }

        return view('admin.hitungVariabel.index');
    }
}
