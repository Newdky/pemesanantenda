<?php

namespace App\Controllers;
use App\Models\StatusModel;
class Status extends BaseController
{
    public function index(): string
    {  
        $statusModel = new StatusModel();
        $data=[
            'title'=> "SIPT || status",
            'judul' => "Data Status",
            'tbstatus' => $statusModel->findAll()
        ];
        return view('admin/status/index',$data);
    }
}
