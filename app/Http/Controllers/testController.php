<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class testController extends Controller
{
    public function testDataBaseFunc()
    {
        $data['myUsers']= DB::Select("select * from users");

        return view('testDB', $data);
    }
}
