<?= $this->extend('layout/main'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
        <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="card-title fw-semibold"><?= esc($judul); ?></h5>
                <a href="/tenda/tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
            </div>
            <table id="myTable" class="display">
                <thead> 
                    <tr>
                        <th>No</th>
                        <th>Nama Tenda</th>
                        <th>Kapasitas</th>
                        <th>Harga Sewa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($tbtenda as $value): ?>
                        <tr>
                            <td><?= esc($no++); ?></td>
                            <td><?= esc($value['nama_tenda']); ?></td>
                            <td><?= esc($value['kapasitas']); ?></td>
                            <td>Rp. <?= esc($value['harga_sewa']); ?></td>
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
