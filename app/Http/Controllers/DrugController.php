<?php

namespace App\Http\Controllers;

use App\Exports\DrugExport;
use App\Imports\DrugImport;
use App\Models\Drug;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
class DrugController extends Controller
{
    public function index(){
        $data = Drug::all();

        return view('pages.drug', ['data'=>$data]);
    }

    public function generatepdf(){
        $data = Drug::all();

        $pdf = PDF::loadView('pages.drug', [ 'data' => $data]);

        return $pdf->download('latihanpdf.pdf');
    }
    //import
    public function import(){
        Excel::import(new DrugImport, request()->file('file'));

        return back();
    }

    //export
    public function export(){
        return Excel::download(new DrugExport, 'drug.xlsx');
    }

}
