<?php

namespace App\Controllers;
use App\Models\TestimoniModel;
class Testimoni extends BaseController
{
    public function index(): string
    {  
        $testimoniModel = new TestimoniModel();
        $data=[
            'title'=> "SIPT || testimoni",
            'judul' => "Data testimoni",
            'tbtestimoni' => $testimoniModel->findAll()
        ];
        return view('admin/testimoni/index',$data);
    }
}
