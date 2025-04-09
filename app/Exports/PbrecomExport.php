<?php

namespace App\Exports;

use App\Models\pbperslist;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PbrecomExport implements FromCollection, WithHeadings
{
    protected $trade;

    function __construct($trade) {
            $this->trade = $trade;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        return pbperslist::select(
            's_no',
            'bdno',
            "rank",
            "name",
            "trade",
            "entry_no",
            "avg_par",
            "career_marks",
            "ttl_score",
            "es",
            "cs",
            "conduct_sheet",
            "weight",
            "base_unit",
            "other_rmks",
            "rmks",
            "rmks_1",
            "decision",
        )->where("decision", "=", "true")
        ->where("trade", "=", $this->trade)
        ->get();
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
            "Avg Par",
            "Career Marks",
            "Ttl Score",
            "ES",
            "CS",
            "Conduct Sheet",
            "Weight",
            "Base Uunit",
            "Other Rmks",
            "Rmks",
            "Rmks_1",
            "Decision",
        ];
    }
}
