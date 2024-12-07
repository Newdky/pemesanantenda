<?= $this->extend('layout/main'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4"><?= $judul; ?></h5>
            <form action="/status/store" method="post">
                <div class="mb-3 md-6">
                    <label for="tanggal_sewa" class="form-label">Tanggal Sewa</label>
                    <input type="text" class="form-control" id="tanggal_sewa" name="tanggal_sewa" required>
                </div>
                <div class="mb-3">
                    <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
                    <input type="text" class="form-control" id="tanggal_kembali" name="tanggal_kembali" required>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <input type="text" class="form-control" id="status" name="status" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/lokasi" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
