<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Measurement;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\MeasurementExport;

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
            $suhu[] = $p->suhu;
        }
        // dd(json_encode($time));
        return view('user.dashboard', compact('datakartu'), ['time' => $time, 'panjang' => $panjang, 'suhu' => $suhu,]);
    }
    public function measurement()
    {
        $measurement = Measurement::get();
        return view('user.measurement', compact('measurement'));
    }
    public function exportMeasurement()
    {
        return Excel::download(new MeasurementExport, 'HasilPengukuran.xlsx');
    }
}
