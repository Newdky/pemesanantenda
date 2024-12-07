<?= $this->extend('layout/main'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="card">
    <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="card-title fw-semibold"><?= esc($judul); ?></h5>
                <a href="/pemesanan/tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
            </div>
            <table id="myTable" class="display">
                <thead> 
                    <tr>
                        <th>No</th>
                        <th>Tanggal Sewa </th>
                        <th>Tanggal Kembali</th>
                        <th>Status</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($tbpemesanan as $value): ?>
                        <tr>
                            <td><?= ($no++); ?></td>
                            <td><?= ($value['tanggal_sewa']); ?></td>
                            <td><?= ($value['tanggal_kembali']); ?></td>
                            <td><?= ($value['status']); ?></td>
                            
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="py-6 px-6 text-center">
        <p class="mb-0 fs-4">Design and Developed by 
            <a href="https://adminmart.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">AdminMart.com</a> 
            Distributed by 
            <a href="https://themewagon.com/" target="_blank" class="pe-1 text-primary text-decoration-underline">ThemeWagon</a>
        </p>
    </div>
</div>
<?= $this->endSection(); ?>
