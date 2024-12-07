<?= $this->extend('layout/main'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4"><?= $judul; ?></h5>
            <form action="/tenda/store" method="post">
                <div class="mb-3 md-6">
                    <label for="rating" class="form-label">Rating</label>
                    <input type="text" class="form-control" id="rating" name="rating" required>
                </div>
                <div class="mb-3">
                    <label for="komentar" class="form-label">Komentar</label>
                    <input type="text" class="form-control" id="komentar" name="komentar" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="/lokasi" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
