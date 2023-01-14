<?php

namespace App\Http\Controllers;


use App\Exports\ProductsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
class ExcelController extends Controller
{
    /**
     * Muestra la lista de usuarios registrados.
     *
     * @return Response
     */
    public function ProductsExport()
    {

        return Excel::download(new ProductsExport(), 'products.xlsx');

    }
}
