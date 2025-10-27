<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\ConductSheet;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ConductSheetImport implements ToCollection, WithHeadingRow
{
    private function parseDate($date)
    {
        try {
            return Carbon::createFromFormat('d M Y', trim($date))->format('Y-m-d');
        } catch (\Exception $e) {
            return null; // Handle invalid dates
        }
    }

    public function collection(Collection $rows)
    {

        $data = [];
        foreach ($rows as $row) {
            // dd($this->parseDate($row['date_of_offense']));
            $data[] = [
                'bdno'          => $row['bdno'],
                'present_rank'  => $row['present_rank'],
                'name'          => $row['name'],
                'trade'         => $row['trade'],
                'base_or_unit'   => $row['base_or_unit'],
                'date_of_offense'=> $this->parseDate($row['date_of_offense']),
                'rank'           => $row['rank'],
                'offense'      => $row['offense'],
                'date_of_punishment' => $this->parseDate($row['date_of_punishment']),
                'awarded'    => $row['awarded'],
                'entry'      => $row['entry'],
                'moral_trapitude'       => $row['moral_trapitude'],
            ];
        }
        ConductSheet::insert($data);
    }
}
