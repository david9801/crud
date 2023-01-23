<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class ProductsExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
       //En el return comentado se me devuelve todos los productos de todos los usuarios, y yo quiero descargar un excel con los productos ligados a un unico user
        //return Product::all();

        //aqui tendre que hacer lo mismo que en la funcion index de ProductsController
        $user = auth()->user();
        $products = $user->productS;
        return $products;
    }

    public function headings(): array
    {
        return [
            'id',
            'title',
            'country',
            'price',
            'created_at',
            'updated_at',
            'user_id'

        ];
    }
}
