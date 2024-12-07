<?php

namespace App\Controllers;
use App\Models\PembayaranModel;
class Pembayaran extends BaseController
{
    public function index(): string
    {  
        $pembayaranModel = new PembayaranModel();
        $data=[
            'title'=> "SIPT || Pembayaran",
            'judul' => "Data Pembayaran",
            'tbpembayaran' => $pembayaranModel->findAll()
        ];
        return view('admin/pembayaran/index',$data);
    }
        public function create(){
            $data=[
                'title'=> "SIPT || Pembayaran",
                'judul' => "Tambah Pembayaran"
            ];
            return view('admin/pembayaran/create',$data);   
        }
        public function store(){
            $pembayaranModel = new PembayaranModel();
            $pembayaranModel->save([
                'metode_pembayaran' => $this->request->getPost('metode_pembayaran'),
                'jumlah_pembayaran' => $this->request->getPost('jumlah_pembayaran'),
                'tanggal_bayar' => $this->request->getPost('tanggal_bayar'),
            ]);
            
            return redirect()->to('/pembayaran');
    }
}
