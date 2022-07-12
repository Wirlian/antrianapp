<?php

namespace App\Controllers;

use App\Models\PelayananModel;
use App\Models\AntrianModel;

class TampilAntrian extends BaseController
{
    public function index()
    {
        $title = 'Menu Antrian';
        $model = new PelayananModel();
        $pelayanandata = $model->findAll();
        return view('antrian/tampilantrian',compact('title','pelayanandata'));
    }

    public function tampil(){
    
    }


}
