<?= $this->extend('layout/main'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4"><?= $judul; ?></h5>
            <form action="/penyewaan/store" method="post">
                <div class="mb-3 md-6">
                    <label for="tanggal_pengambilan" class="form-label">Tanggal_pengambilan</label>
                    <input type="text" class="form-control" id="tanggal_pengambilan" name="tanggal_pengambilan" required>
                </div>
                <div class="mb-3">
                    <label for="tanggal_pengembalian" class="form-label">Tanggal_pengembalian</label>
                    <input type="text" class="form-control" id="tanggal_pengambilan" name="tanggal_pengambilan" required>
                </div>
                <div class="mb-3">
                    <label for="id_pemesanan" class="form-label">Id_pemesanan</label>
                    <input type="text" class="form-control" id="id_pemesanan" name="id_pemesanan" required>
                </div>
                <div class="mb-3">
                    <label for="id_lokasi" class="form-label">Id_lokasi</label>
                    <input type="text" class="form-control" id="id_lokasi" name="id_lokasi" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/lokasi" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
