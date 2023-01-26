<?php

namespace App\Http\Controllers;


use App\Exports\ProductsExport;
use App\Mail\SendExcel;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Log;
class ExcelController extends Controller
{
    /**
     * Muestra la lista de usuarios registrados.
     *
     * @return Response
     */
    public function ProductsExport()
    {
        //$user = auth()->user()->name;
        //return Excel::download(new ProductsExport(), $user.'-products.xlsx');
        //Las lineas anteriores me devuelven un fichero excel con los productos del cliente y con nombre: nombrecliente-products.xlsx
        //Ahora quiero hacer lo mismo, pero que además me lo envíe por e-mail
        $user = auth()->user();
        $FileName = $user->name.'products.xlsx';
        $pathFile=storage_path('app/public/'.$FileName);
        echo $pathFile;
        Log::error('error_1a');
        Excel::store(new ProductsExport(),$FileName,'public');
        Log::error('error_2a');
        Mail::to($user->email)->send(new SendExcel($pathFile, $FileName));
        Log::error('error_3a');
        return Excel::download(new ProductsExport(), $FileName);

    }
}

