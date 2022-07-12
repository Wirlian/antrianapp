<?php

namespace App\Controllers;

use App\Models\PelayananModel;

class Pelayanan extends BaseController
{
    public function index()
    {
        $title = 'Menu pelayanan';
        $model = new PelayananModel();
        $pelayanan = $model->findAll();
        return view('pelayanan/pelayanan',compact('pelayanan', 'title'));
    }

    public function add(){
        // validasi data.
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required',
            'keterangan' => 'required',
            'kode' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid){
            $pelayanan = new PelayananModel();
            $pelayanan->insert([
            'nama' => $this->request->getPost('nama'),
            'keterangan' => $this->request->getPost('keterangan'),
            'kode' => $this->request->getPost('kode'),
            ]);
            return redirect()->to('/pelayanan');
        }
            $title = "Tambah Pelayanan";
            return view('pelayanan/tambahpelayanan', compact('title'));
    }

    public function edit($id){
        $pelayanan= new PelayananModel();
        // validasi data.
        $validation = \Config\Services::validation();
        $validation->setRules([
            'nama' => 'required',
            'keterangan' => 'required',
            'kode' => 'required',
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if ($isDataValid){
            $pelayanan = new PelayananModel();
            $pelayanan->update($id, [
            'nama' => $this->request->getPost('nama'),
            'keterangan' => $this->request->getPost('keterangan'),
            'kode' => $this->request->getPost('kode'),
            ]);
            return redirect()->to('/pelayanan');
        }
        $data= $pelayanan->where('id',$id)->first();
        $title = "Edit Pelayanan";
        return view('pelayanan/editpelayanan', compact('title', 'data'));
    }

    public function delete($id)
    {
        $pelayanan = new PelayananModel();
        $pelayanan->delete($id);
        return redirect()->to('/pelayanan');
    }

}
