<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Firmalar;
use DataTables;



class Firmayonetimi extends Controller
{
    //


   public function index ()
   {


      return view ('panel.firma_ekle');


   }

   public function getFirmalar(Request $request)
    {
        if ($request->ajax()) {



            $data = Firmalar::latest()->orderBy('firma_id')->get(['firma_id','firma_tam_unvan','firma_kisa_adi','firma_sgk_no','firma_tehlike_sinifi','firma_tip']);


            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

}
