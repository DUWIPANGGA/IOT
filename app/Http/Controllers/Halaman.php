<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Halaman extends Controller
{
    function index(){
        return view("Halaman.index");

    }
    function tentang(){
        return view("Halaman.tentang");
    }
    function kontak(){
        $judul ='halaman kontak';
        $data=[
            'nama'=>'dimas arya duwipangga',
            'kontak'=>[
            'email'=>'aryad2232@gmail.com',
            'nomor_hp'=>'08971444573'
            ]
        ];
        return view("Halaman.kontak")->with(['judul'=>$judul,'data'=>$data]);
    }
}
