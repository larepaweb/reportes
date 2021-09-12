<?php

namespace App\Imports\Products;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithValidation;

class ProductsosImport implements ToModel
{
    private $numRows = 0;

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {

        ++$this->numRows;

        $iva = (get_setting_value('iva')  / 100) * $row[3];
        $isr = (get_setting_value('isr')  / 100) * $row[3];

        $pventa = $row[1] * ( $row[3] + $isr + $iva);
        $utilidad = $row[1] * ($row[3] - $row[2]);

        return new Product([

            'product_name' => $row[0],
            'cantidad' => $row[1],
            'pCompra'=> $row[2],
            'pBase' => $row[3],
            'isr' => $isr,
            'iva' => $iva,
            'pVenta' => $pventa,
            'utilidad' => $utilidad,
            'imagen' => 'default.png',

        ]);


    }

    // public function rules(): array
    // {
    //         return [

    //         'product_name' => 'required',
    //         'cantidad' => 'required',
    //         'pCompra' => 'required',
    //         'pBase' => 'required',

    //         ];
    // }

    public function getRowCount(): int
    {
            return $this->numRows;
    }

}
