<?php

namespace App\Exports;

use App\Models\Reader;
use Maatwebsite\Excel\Concerns\FromCollection;

class ReaderExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
        return Reader::all();
    }
}
