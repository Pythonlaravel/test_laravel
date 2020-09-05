<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class company extends Controller
{
    public function index(){
        // $data['table'] =DB::select('select * from tblcompany');
        $data['table'] = DB::table("tblcompany")->get();
        // the upper line select query not works.
        // print_r($data);
        return view('company.index', $data);
    }

    // public function index2(){
    //     $data['tblcompany'] =DB::select('select * from tblcompany');
    //     // print_r($data);
    //     return view('company.index', $data);
    // }
    public function insertcompany(Request $r){
        // Here is the file handing yahan file se data kaisy read krwana hai 

        //$file = $r->file('txtlogo');
        // for knowing the name and extension of the file 
        //$ext = $file->extension();
        //$clogo  = time().".".$ext;


        $cname = request("txtcname");
        $cdetails = request("txtdetails");

        // $cname = request('txtcname');
        $clogo = request('txtclogo');
        $cdetails = request('txtcdetails');

        // for uplaoding the file we use the move method
        // it includes the two arguments where u r gonna upload and and which file upload 
    

        //$file = move(public_path('/uploads'),$clogo);
        DB::insert("insert into tblcompany(cpname, cplogo, cpdetails) values(?, ?, ?)", [$cname, 
        $clogo, $cdetails]);
        return  redirect('/company');
    }
}
