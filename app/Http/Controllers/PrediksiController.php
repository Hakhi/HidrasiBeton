<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Measurement;
use Illuminate\Support\Collection;
use App\Models\Predict;

class PrediksiController extends Controller
{
    public function prediksi(Request $request)
    {
        $measurement = Measurement::get();
        $maturity = array();
        $strength = array();
        $jeda = $request->rentang;
        $dfc = $request->dfc;
        // $mutu_beton = $request->mutu_beton;
        $bentuk_sampel = $request->bentuk_sampel;

        if ($dfc < 17.5) {
            $A = -10;
            $B = 68;
        } else if (17.5 <= $dfc && $dfc < 35) {
            $A = -21;
            $B = 62;
        } else if (35 <= $dfc && $dfc < 52.5) {
            $A = -32;
            $B = 54;
        } else {
            $A = 42;
            $B = 46.5;
        }

        foreach ($measurement as $p) {
            $suhu[] = $p->suhu;
        }
        for ($i = 0; $i < count($suhu); $i++) {
            $waktu[$i] = $jeda * $i;
            if ($i == 0) {
                $maturity[$i] = 0;
                $strength[$i] = 0;
            } else {
                $maturity[$i] = $jeda * ($suhu[$i] + $suhu[$i - 1]) * 0.5 + $maturity[$i - 1];
                $strength[$i] = round($A + $B * log10($maturity[$i]), 4);
            }
        }
        // dd($strength);
        return view('user.hasil', compact(['strength', 'maturity', 'suhu', 'waktu']));
    }

    public function tampilanForm()
    {
        return view('user.prediksi');
    }

    public function hasilPrediksi()
    {
    }
}
