<?php

namespace App\Http\Controllers;


use App\Exports\ProductsExport;
use Maatwebsite\Excel\Facades\Excel;
class ExcelController extends Controller
{
    /**
     * Muestra la lista de usuarios registrados.
     *
     * @return Response
     */
    public function ProductsExport()
    {
        $user = auth()->user()->name;
        return Excel::download(new ProductsExport(), $user.'-products.xlsx');


    }
}
