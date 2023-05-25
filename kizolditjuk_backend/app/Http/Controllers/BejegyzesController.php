<?php

namespace App\Http\Controllers;
use App\Models\Bejegyzes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BejegyzesController extends Controller
{
    public function index()
    {
        $bejegyzesek = response()->json(Bejegyzes::all());
        return $bejegyzesek;
    }

    public function show($id)
    {
        $bejegyzesek = response()->json(Bejegyzes::find($id));
        return $bejegyzesek;
    }

    public function osztallyal($osztaly_id){
        $bejegyzesek = DB::table('bejegyzes as b')
        ->select('b.id', 'o.nev as osztaly', 't.tevekenyseg_nev as tevekenyseg_nev', 't.pontszam as pontszam' )
        ->join('osztalies as o', 'b.osztaly_id', '=', 'o.osztaly_id')
        ->join('tevekenysegs as t', 'b.tevekenyseg_id', '=', 't.tevekenyseg_id')
        ->where('b.osztaly_id', '=', $osztaly_id)
        ->get();
        return $bejegyzesek;
    }

    public function store(Request $request){
        $bejegyzes = new Bejegyzes();
        $bejegyzes->osztaly_id = $request->osztaly_id;
        $bejegyzes->tevekenyseg_id = $request->tevekenyseg_id;
        $bejegyzes->allapot = 0;
        $bejegyzes->save();
    }

    public function osszesBejegyzes(){
        $bejegyzesek = DB::table('bejegyzes as b')
        ->join('osztalies as o', 'b.osztaly_id', '=', 'o.osztaly_id')
        ->join('tevekenysegs as t', 'b.tevekenyseg_id', '=', 't.tevekenyseg_id')
        ->select('b.id', 'o.nev as osztaly', 't.tevekenyseg_nev as tevekenyseg_nev', 't.pontszam as pontszam', 'b.allapot as allapot' )
        ->get();
        return $bejegyzesek;
    }
}
