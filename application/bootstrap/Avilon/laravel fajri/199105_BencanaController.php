<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\provinces;
use App\regencies;
use DB;

class BencanaController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:web');
    }
	public function index()
	{
		 $regencies = DB::table('regencies')->pluck("name","id")->all();
   		 $provinces = DB::table('provinces')->orderBy('provinces.name')->pluck("name","id")->all();

    	return view('coba',compact('regencies','provinces'));
	}

    public function selectAjax(Request $request)
    {
        if($request->ajax()){
            $regencies = DB::table('regencies')->where('province_id',$request->id_province)->pluck("name","id")->all();
            $data = view('ajax-select',compact('regencies'))->render();
            return response()->json(['options'=>$data]);
        }
    }
  
}

