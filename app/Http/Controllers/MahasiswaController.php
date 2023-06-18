<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //TUGAS W9
    public function index(){
        return view('form_mahasiswa');
    }

    public function output_form(Request $request){
        $data = [
            'nama'      => $request->input('nama'),
            'email'     => $request->input('email'),
            'lokasi'    => $request->input('lokasi'),
            'jk'        => $request->input('jk'),
            'skill'     => $request->input('skill'),
        ];

        return view('form_mahasiswa', compact('data'));
    }
}
