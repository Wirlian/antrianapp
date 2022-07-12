<?php

namespace App\Controllers;

use App\Models\LoketModel;
use App\Models\PelayananModel;

class Loket extends BaseController
{
    
    protected $modelloket;
    public function __construct(){
        $this->modelloket = new LoketModel();
    }

    public function index()
    {
        
        $title = 'Menu Loket';
        $data_loket = $this->modelloket->getLoket();
        
        return view('loket/loket',compact('data_loket', 'title'));
    }

    public function add(){
        // validasi data.
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required',
            'keterangan' => 'required',
            'pelayanan_id' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid){
            $loket = new LoketModel();
            $loket->insert([
            'nama' => $this->request->getPost('nama'),
            'keterangan' => $this->request->getPost('keterangan'),
            'pelayanan_id' => $this->request->getPost('pelayanan_id'),
            ]);
            return redirect()->to('/loket');
        }
            $title = "Tambah Loket";
            $model = new PelayananModel();
            $pelayanandata = $model->findAll();
            return view('loket/tambahloket', compact('title','pelayanandata'));
    }

    public function edit($id){
        $loket= new LoketModel();
        // validasi data.
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required',
            'keterangan' => 'required',
            'pelayanan_id' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid){
            $loket = new LoketModel();
            $loket->update($id, [
            'nama' => $this->request->getPost('nama'),
            'keterangan' => $this->request->getPost('keterangan'),
            'pelayanan_id' => $this->request->getPost('pelayanan_id'),
            ]);
            return redirect()->to('/loket');
        }
        $data= $loket->where('id',$id)->first();
        $title = "Edit Loket";
        $model = new PelayananModel();
        $pelayanandata = $model->findAll();
        return view('loket/editloket', compact('title', 'data','pelayanandata'));
    }

    public function delete($id)
    {
        $loket = new LoketModel();
        $loket->delete($id);
        return redirect()->to('/loket');
    }

}
