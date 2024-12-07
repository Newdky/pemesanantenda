<?php

namespace App\Controllers;
use App\Models\TendaModel;
class Tenda extends BaseController
{
    public function index(): string
    {  
        $tendaModel = new TendaModel();
        $data=[
            'title'=> "SIPT || Tenda",
            'judul' => "Data Tenda",
            'tbtenda' => $tendaModel->findAll()
        ];
        return view('admin/tenda/index',$data);
    }

    public function create(){
        $data=[
            'title'=> "SIPT || Tenda",
            'judul' => "Tambah Tenda"
        ];
        return view('admin/tenda/create',$data) ; 
    }

    public function store(){
        $tendaModel = new TendaModel();
        $tendaModel->save([
            'nama_tenda' => $this->request->getPost('nama_tenda'),
            'kapasitas' => $this->request->getPost('kapasitas'),
            'harga_sewa' => $this->request->getPost('harga_sewa')
        ]);

        return redirect()->to('/tenda');
    }
}
