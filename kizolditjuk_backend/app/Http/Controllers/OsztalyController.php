<?php

namespace App\Http\Controllers;
use App\Models\Osztaly;
use Illuminate\Http\Request;

class OsztalyController extends Controller
{
    public function index()
    {
        $osztalyok = response()->json(Osztaly::all());
        return $osztalyok;
    }

    public function show($osztaly_id)
    {
        $osztalyok = response()->json(Osztaly::find($osztaly_id));
        return $osztalyok;
    }
}
