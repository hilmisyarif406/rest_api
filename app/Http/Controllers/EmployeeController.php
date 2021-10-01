<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function karyawan(){
        $emp = DB::table('m_karyawan')->get();

        return response()->json([
            'EMP' => $emp
        ],200);
    }
}
