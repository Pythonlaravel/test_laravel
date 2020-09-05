<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class branch extends Controller
{
    public function index1(){
        // first method to get data from tblbranch
        // $data["table"] = DB::table("vbranch")->get();
        // 2nd method to get data from same table
        $data['table'] = DB::select('SELECT a.*,b.cpname FROM `tblbranch`
         as a JOIN tblcompany as b on a.cpid*b.cpid');
        // create view vbranch AS SELECT a.*,b.cpname FROM `tblbranch` as a join tblcompany as b on a.cpid*b.cpid

        return view('branch.index1',$data);
    }

    public function newbranch(){
        $data["table"] = DB::table("tblcompany")->get();
        return view('branch.addbranch',$data);
    }
    public function addbranch(){
        return redirect('/branch');
    }
}
