<?php

namespace App\Controllers;
use App\Models\PelangganModel;
class Pelanggan extends BaseController
{
    public function index(): string
    {  
        $pelangganModel = new PelangganModel();
        $data=[
            'title'=> "SIPT || Pelanggan",
            'judul' => "Data Pelanggan",
            'tbpelanggan' => $pelangganModel->findAll()
        ];
        return view('admin/pelanggan/index',$data);
    }

    public function create(){
        $data=[
            'title'=> "SIPT || Pelanggan",
            'judul' => "Tambah Pelanggan"
        ];
        return view('admin/pelanggan/create',$data);   
    }
    public function store(){
        $pelangganModel = new PelangganModel();
        $pelangganModel->save([
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'no_telpon' => $this->request->getPost('no_telpon'),
            'email' => $this->request->getPost('email')
        ]);
        
        return redirect()->to('/pelanggan');
    }

    
    public function ubah($id)
    {
        $data=[
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'no_telpon' => $this->request->getPost('no_telpon'),
            'email' => $this->request->getPost('email')
        ];
        $this->pelangganModel->insert($data);
        return redirect()->to('/pelanggan')->with('success', 'pelanggan berhasil diubah');
    }

    public function delete($id)
    {
        $this->pelangganModel->delete($id);
        return redirect()->to('/pelanggan')->with('success', 'pelanggan deleted successfully');
    }
}
