<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class UsersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::select("id", "firstName", "lastName", "userName", "email", "password", "type")->get();
    }
    public function headings(): array
    {
        return ["ID", "First Name", "Last Name", "User Name", "Email", "Password", "Type"];
    }
}
