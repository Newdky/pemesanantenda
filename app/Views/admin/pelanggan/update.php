<?= $this->extend('layout/main'); ?>
<?= $this->section('content'); ?>
<div class="page-inner">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title"><?= $judul;?></h4>
            </div>
            <div class="col-md-6 col-lg-6">
                <form action="/pelanggan/store" method="post">
                    <div class="form-group">
                        <label for="email2">Nama</label>
                        <input type="text"
                               class="form-control"
                               name="nama"
                               value="<?= old('nama', $pelanggan['nama']) ?>" >
                    </div>
                    <div class="form-group">
                        <label for="email2">Alamat</label>
                        <input type="text"
                               class="form-control"
                               name="alamat"
                               value="<?= old('alamat', $pelanggan['alamat']) ?>" >
                    </div>
                    <div class="form-group">
                        <label for="email2">No Telpon</label>
                        <input type="text"
                               class="form-control"
                               name="no_telepon"
                               value="<?= old('no_telepon', $pelanggan['no_telepon']) ?>" >
                    </div>
                    <div class="form-group">
                        <label for="email2">Email</label>
                        <input type="text"
                               class="form-control"
                               name="email"
                               value="<?= old('email', $pelanggan['email']) ?>" >

                               <div class="form-group">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    <a href="/pelanggan" class="btn btn-danger">Cancel</a>
                               </div>
                            </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>