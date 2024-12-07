<?= $this->extend('layout/main'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4"><?= $judul; ?></h5>
            <form action="/tenda/store" method="post">
                <div class="mb-3 md-6">
                    <label for="nama_tenda" class="form-label">Nama Tenda</label>
                    <input type="text" class="form-control" id="nama_tenda" name="nama_tenda" required>
                </div>
                <div class="mb-3">
                    <label for="kapasitas" class="form-label">Kapasitas</label>
                    <input type="text" class="form-control" id="kapasitas" name="kapasitas" required>
                </div>
                <div class="mb-3">
                    <label for="harga_sewa" class="form-label">Harga Sewa</label>
                    <input type="text" class="form-control" id="harga_sewa" name="harga_sewa" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/lokasi" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
