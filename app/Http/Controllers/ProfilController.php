<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        return view('beranda', [
            'title' => 'beranda'
        ]);
    }

    public function profil()
    {
        $data = [
            'nama'    => 'Riffat Arfa Pramna',  
            'kelas'   => 'XI PPLG 1',     
            'sekolah' => 'SMK RADEN UMAR SAID'
        ];

        return view('profil',[
            'title' => 'Profil'
        ], $data);
    }
}
