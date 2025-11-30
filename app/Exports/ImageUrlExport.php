<?php

namespace App\Exports;

use App\Models\pbperslist;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ImageUrlExport implements FromCollection, WithHeadings
{
    protected $trade, $sheetNo;

    public function __construct($trade, $sheetNo)
    {
        $this->trade = $trade;
        $this->sheetNo = $sheetNo;
    }

    public function collection()
    {
        $records = Pbperslist::where('trade', $this->trade)
                ->where('sheetNo', $this->sheetNo)
                ->select('bdno', 'rank', 'name')
                ->orderBy('bdno', 'asc')->get();


        $basePath = 'D:\\\Laravel project\\\eboard_ro\\\public\\\promotionBoard\\\image\\\\';

        $records->transform(function ($item) use ($basePath) {
            $imagePath = $basePath . $item->bdno . '.gif';
            $item->image_formula = 'INCLUDEPICTURE "' . $imagePath . '" \d';
            return $item;
        });

        return $records;
    }

    public function headings(): array
    {
        return ['BD No', 'Rank', 'Name', 'Image Formula'];
    }
}
