<?php

namespace App\Http\Controllers;
use App\Models\Tevekenyseg;
use Illuminate\Http\Request;

class TevekenysegController extends Controller
{
    public function index()
    {
        $tevekenysegek = response()->json(Tevekenyseg::all());
        return $tevekenysegek;
    }

    public function show($tevekenyseg_id)
    {
        $tevekenysegek = response()->json(Tevekenyseg::find($tevekenyseg_id));
        return $tevekenysegek;
    }
}
