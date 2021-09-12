<?php

namespace App\Exports\Products;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductsosExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product::all();
    }
}
