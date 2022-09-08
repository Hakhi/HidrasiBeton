<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Measurement;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\MeasurementExport;
use Illuminate\Support\Facades\Redirect;

class MeasurementController extends Controller
{
    public function dashboard()
    {
        $datakartu = Measurement::latest()->first();
        $pengukuran = Measurement::get();
        $time = [];
        foreach ($pengukuran as $p) {
            $time[] = $p->created_at->format('H:i d-m');
            $panjang[] = $p->panjang;
            $suhu_10_cm[] = $p->suhu_10_cm;
            $suhu_15_cm[] = $p->suhu_15_cm;
        }
        //dd(json_encode($datakartu));
        return view('user.dashboard', compact('datakartu'), ['time' => $time, 'panjang' => $panjang, 'suhu_10_cm' => $suhu_10_cm, 'suhu_15_cm' => $suhu_15_cm,]);
    }
    public function measurement()
    {
        $measurement = Measurement::get();
        return view('user.measurement', compact('measurement'));
    }
    public function delete()
    {
        Measurement::truncate();
        return redirect('/measurement');
    }
    public function exportMeasurement()
    {
        return Excel::download(new MeasurementExport, 'HasilPengukuran.xlsx');
    }
}
