<?= $this->extend('layout/main'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4"><?= $judul; ?></h5>
            <form action="/pembayaran/store" method="post">
                <div class="mb-3 md-6">
                    <label for="jumlah" class="form-label">jumlah</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah" required>
                </div>
                <div class="mb-3">
                    <label for="tanggal_bayar" class="form-label">Tanggal_bayar</label>
                    <input type="text" class="form-control" id="tanggal_bayar" name="Tanggal_bayar" required>
                </div>
                <div class="mb-3">
                    <label for="metode_pembayaran" class="form-label">Tanggal_pengambilan</label>
                    <input type="text" class="form-control" id="tanggal_pembayaran" name="Tanggal_pembayaran" required>
                </div>
                <div class="mb-3">
                    <label for="id_pembayaran" class="form-label">id_pembayaran</label>
                    <input type="text" class="form-control" id="id_pembayaran" name="id_pembayaran" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/lokasi" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
