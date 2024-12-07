<?php

namespace App\Controllers;
use App\Models\PemesananModel;
class Pemesanan extends BaseController
{
    public function index(): string
    {  
        $pemesananModel = new PemesananModel();
        $data=[
            'title'=> "SIPT || pemesanan",
            'judul' => "Data Pemesanan",
            'tbpemesanan' => $pemesananModel->findAll()
        ];
        return view('admin/pemesanan/index',$data);
    }
}
