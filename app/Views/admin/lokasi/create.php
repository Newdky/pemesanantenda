<?= $this->extend('layout/main'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4"><?= $judl; ?></h5>
            <form action="/lokasi/store" method="post">
                <div class="mb-3 md-6">
                    <label for="nama_lokasi" class="form-label">Nama Lokasi</label>
                    <input type="text" class="form-control" id="nama_lokasi" name="nama_lokasi" required>
                </div>
                <div class="mb-3">
                    <label for="alamat_lokasi" class="form-label">Alamat Lokasi</label>
                    <input type="text" class="form-control" id="alamat_lokasi" name="alamat_lokasi" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/lokasi" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
