<?php

namespace App\Exports;

use App\Models\EbPerson;
use App\Models\pbperslist;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EbListExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        return EbPerson::select(
            's_no',
            'bdno',
            "rank",
            "name",
            "trade",
            "entry_no",
            "doe",
            "avg_par",
            "career_marks",
            "conduct_sheet",
            "base_unit",
            "dor",
            "rmks_by_ro",
            "rmks_by_board",
            "type",
            "decision",
        )->get();
    }
    public function headings(): array
    {
        return [
            "Ser No",
            "BD No",
            "Rank",
            "Name",
            "Trade",
            "Entry No",
            "Date Of Enrolment",
            "Avg Par",
            "Career Marks",
            "Conduct Sheet",
            "Base Uunit",
            "Dt Of Retaird Present Rank",
            "Rmks By RO/D Pers",
            "Rmks By Board",
            "Type",
            "Decision",
        ];
    }
}
