<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data=[
            'title' => "SIPT || Dashboard",
            'judul' => "Dashboard"
        ];
        return view('home',$data);
    }
}