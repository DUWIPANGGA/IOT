<?php

namespace App\Http\Controllers;

use App\Models\siswa as siswaModel;
use Illuminate\Http\Request;

class siswa extends Controller
{
    function index(){
        $data =siswaModel::all();
        return $data;
    }
    function detail($id){
        return "<h1>saya diswa dari controlerdengan id $id<h1>";
    }
}
