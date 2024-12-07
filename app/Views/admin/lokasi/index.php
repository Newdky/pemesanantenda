<?= $this->extend('layout/main'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="card-title fw-semibold"><?= esc($judul); ?></h5>
                <a href="/lokasi/tambah" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
            </div>
            <table id="myTable" class="display">
                <thead> 
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Aksi</th> <!-- Kolom untuk tombol aksi -->
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($tblokasi as $value): ?>
                        <tr>
                            <td><?= esc($no++); ?></td>
                            <td><?= esc($value['nama_lokasi']); ?></td>
                            <td><?= esc($value['alamat_lokasi']); ?></td>
                            <td>
                                <a href="/lokasi/ubah<?= esc($value['id_lokasi']); ?>" class="btn btn-warning btn-sm">
                                    <i class="fas fa-edit"></i> Ubah
                                </a>
                                <form action="lokasi/hapus/<?= esc($value['id_lokasi']); ?>" method="post" style="display:inline;">
                                    <input type="hidden" name="_method" value="DELETE"> <!-- Menandakan metode DELETE -->
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus lokasi ini?');">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
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
