<?= $this->extend('layout/main'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4"><?= $judul; ?></h5>
            <form action="/status/store" method="post">
                <div class="mb-3 md-6">
                    <label for="tenda" class="form-label">Tenda</label>
                    <input type="text" class="form-control" id="tenda" name="tenda" required>
                </div>
                <div class="mb-3">
                    <label for="kursi" class="form-label">Kursi</label>
                    <input type="text" class="form-control" id="kursi" name="kursi" required>
                </div>
                <div class="mb-3">
                    <label for="meja" class="form-label">Meja</label>
                    <input type="text" class="form-control" id="meja" name="Meja" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/lokasi" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
