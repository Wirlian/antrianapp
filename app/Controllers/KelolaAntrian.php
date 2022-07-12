<?php

namespace App\Controllers;

use App\Models\PelayananModel;
use App\Models\AntrianModel;

class KelolaAntrian extends BaseController
{
    public function index()
    {
        $title = 'Menu Antrian';
        $model = new PelayananModel();
        $pelayanandata = $model->findAll();
        return view('antrian/kelolaantrian',compact('title','pelayanandata'));
    }

    public function tampil(){
    
    }


}
