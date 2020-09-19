<?php

namespace App\Exports;

use App\User;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;

class UserExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        //return User::all();

         return DB::table('users')
            ->join('products', 'products.created_by', '=', 'users.id')
            ->select('users.name', 'products.name', 'products.price')
            ->where('is_approve', '=', '1')->get();


    }
}
