<?php

namespace App\Controllers;

use App\Models\PelayananModel;
use App\Models\AntrianModel;

class AmbilAntrian extends BaseController
{
    public function index()
    {
        $title = 'Menu Antrian';
        $model = new PelayananModel();
        $pelayanandata = $model->findAll();
        return view('antrian/ambilantrian',compact('title','pelayanandata'));
    }

    public function ambil(){
        $antrian = new AntrianModel();
        $id_pelayanan = $this->request->getPost('id_pelayan');
        $tanggal = $this->request->getPost('tanggal');
        $no_antrian = $this->request->getPost('no_antrian');

        $data = [
            'pelayanan_id' => $id_pelayanan,
            'tanggal' => $tanggal,
            'no_antrian' => $no_antrian,
            'status' => 0,
            'waktu_selesai' => null,
            'waktu_panggil' => null
        ];

    $this->antrian->insert_data($data);
    
    $res = ['status' => 'insert sukses'];

    return json_encode($data);
        
       
 
    }


}
