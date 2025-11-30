<?php

namespace App\Imports;

use App\Models\ConductSheet;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class ConductSheetImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        $data = [];

        foreach ($rows as $row) {
            $data[] = [
                'bdno'              => $row['bdno'],
                'present_rank'      => $row['present_rank'],
                'name'              => $row['name'],
                'trade'             => $row['trade'],
                'base_or_unit'      => $row['base_or_unit'],
                'date_of_offense'   => $this->parseExcelDate($row['date_of_offense']),
                'rank'              => $row['rank'],
                'offense'           => $row['offense'],
                'date_of_punishment'=> $this->parseExcelDate($row['date_of_punishment']),
                'awarded'           => $row['awarded'],
                'entry'             => $row['entry'],
                'moral_trapitude'   => $row['moral_trapitude'],
            ];
        }

        // Insert all at once for better performance
        ConductSheet::insert($data);
    }

    /**
     * Convert Excel serial or text date to Y-m-d
     */
    private function parseExcelDate($value)
    {
        if (empty($value)) {
            return null;
        }

        // Handle Excel numeric date serials
        if (is_numeric($value)) {
            return Date::excelToDateTimeObject($value)->format('Y-m-d');
        }

        // Handle already formatted date strings
        try {
            return date('Y-m-d', strtotime($value));
        } catch (\Exception $e) {
            return null;
        }
    }
}
