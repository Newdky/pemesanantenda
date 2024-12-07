<?php

namespace App\Controllers;
use App\Models\LokasiModel;
class Lokasi extends BaseController
{
    public function index(): string
    {  
        $lokasiModel = new LokasiModel();
        $data=[
            'title'=> "SIPT || Lokasi",
            'judul' => "Data Lokasi",
            'tblokasi' => $lokasiModel->findAll()
        ];
        return view('admin/lokasi/index',$data);
    }

    public function create(){
        $data=[
            'title'=> "SIPT || Lokasi",
            'judul' => "Tambah Lokasi"
        ];
        return view('admin/lokasi/create',$data);
    }
    public function store(){
        $lokasiModel = new LokasiModel();
        $lokasiModel->save([
            'nama_lokasi' => $this->request->getPost('nama_lokasi'),
            'alamat_lokasi' => $this->request->getPost('alamat_lokasi')
        ]);

        return redirect()->to('/lokasi');
    }

    public function edit($id){
        $lokasiModel = new LokasiModel();
        $data=[
            'title'=> "SIPT || Lokasi",
            'judul' => "Tambah Lokasi",
            'lokasi' => $lokasiModel->find($id)
        ];
        return view('admin/lokasi/update',$data);
    }
    public function hapus($id)
{
    // Load model jika belum
    $lokasiModel = new LokasiModel();
    $lokasiModel->delete($id);

    // Redirect ke halaman daftar lokasi dengan pesan sukses
    return redirect()->to('/lokasi')->with('success', 'Lokasi berhasil dihapus.');
}

    
}
