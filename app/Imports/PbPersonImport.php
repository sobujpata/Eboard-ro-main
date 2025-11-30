<?php
namespace App\Imports;
use Carbon\Carbon;
use App\Models\pbperslist;
use Illuminate\Support\Collection;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PbPersonImport implements ToCollection, WithHeadingRow
{
    // private function parseDate($date)
    // {
    //     try {
    //         return Carbon::createFromFormat('d M Y', trim($date))->format('Y-m-d');
    //     } catch (\Exception $e) {
    //         return null; // Handle invalid dates
    //     }
    // }

    public function collection(Collection $rows)
    {

        $data = [];
        foreach ($rows as $row) {
            // dd($row->keys());
            $data[] = [
                's_no'          => $row['s_no'],
                'bdno'          => $row['bdno'],
                'rank'          => $row['rank'],
                'name'          => $row['name'],
                'trade'         => $row['trade'],
                'basic_trade'   => $row['basic_trade'],
                'dob'           => $this->parseExcelDate($row['dob']),
                'doe'           => $this->parseExcelDate($row['doe']),
                'dor'           => $this->parseExcelDate($row['dor']),
                'entry_no'      => $row['entry_no'],
                'promotion_dt'  =>  $this->parseExcelDate($row['promotion_dt']),
                'svc_length'    => $row['svc_length'],
                'svc_left'      => $row['svc_left'],
                'avg_par'       => $row['avg_par'],
                'career_marks'  => $row['career_marks'],
                'ttl_score'     => $row['ttl_score'],
                'es'            => $row['es'],
                'cs'            => $row['cs'],
                'base_unit'     => $row['base_unit'],
                'weight'        => $row['weight'],
                'madical_category'  => $row['madical_category'],
                'conduct_sheet' => $row['conduct_sheet'],
                'punishment_date' => $this->parseExcelDate($row['punishment_date']),
                'morale_turpitude' => $row['morale_turpitude'],
                'other_rmks'    => $row['other_rmks'],
                'sheetNo'       => $row['sheetno'],
                'base'          => $row['base'],
            ];
        }
        pbperslist::insert($data);
    }
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
