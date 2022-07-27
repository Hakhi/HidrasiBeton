<?php

namespace App\Exports;

use App\Models\Measurement;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MeasurementExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Measurement::all();
    }
    public function headings(): array
    {
        return [
            "id",
            "suhu",
            "susut",
            "created_at",
            "updated_at",
        ];
    }
}
