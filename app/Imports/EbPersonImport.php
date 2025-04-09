<?php
namespace App\Imports;
use Carbon\Carbon;
use App\Models\EbPerson;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EbPersonImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        $data = [];
        foreach ($rows as $row) {
            $data[] = [
                's_no'          => $row['s_no'],
                'bdno'          => $row['bdno'],
                'rank'          => $row['rank'],
                'name'          => $row['name'],
                'trade'         => $row['trade'],
                'base_unit'     => $row['base_unit'],
                'doe'           => Carbon::parse($row['doe'])->format('d-m-Y'),
                'entry_no'      => $row['entry_no'],
                'avg_par'       => $row['avg_par'],
                'career_marks'  => $row['career_marks'],
                'conduct_sheet' => $row['conduct_sheet'],
                'dor'           => Carbon::parse($row['dor'])->format('d-m-Y'),
                'rmks_by_ro'    => $row['rmks_by_ro'],
                'rmks_by_board' => $row['rmks_by_board'],
                'type'          => $row['type'],
                'decision'      => $row['decision'],
                'salient_points'=> $row['salient_points'],
                'created_at'    => now(),
                'updated_at'    => now(),
            ];
        }
        EbPerson::insert($data);
    }
}
