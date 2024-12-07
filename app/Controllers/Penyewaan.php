<?php

namespace App\Controllers;
use App\Models\PenyewaanModel;
class Penyewaan extends BaseController
{
    public function index(): string
    {  
        $penyewaanModel = new PenyewaanModel();
        $data=[
            'title'=> "SIPT || Penyewaan",
            'judul' => "Data Penyewaan",
            'tbpenyewaan' => $penyewaanModel->findAll()
        ];
        return view('admin/penyewaan/index',$data);
    }
}
