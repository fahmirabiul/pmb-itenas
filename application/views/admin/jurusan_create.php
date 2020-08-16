<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Jurusan
                </div>
                <div class="card-body">
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger" role="alert">
                            <?= validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="kode_jrs">Kode jurusan</label>
                            <input type="text" class="form-control" name="kode_jrs" id="kode_jrs">
                        </div>
                        <div class="form-group">
                            <label for="nama_jrs">Nama jurusan</label>
                            <input type="text" class="form-control" name="nama_jrs" id="nama_jrs">
                        </div>
                        <div class="form-group">
                            <label for="fakultas">Fakultas</label>
                            <input type="text" class="form-control" name="fakultas" id="fakultas">
                        </div>
                        <div class="form-group">
                            <label for="akreditasi">Akreditasi</label>
                            <input type="text" class="form-control" name="akreditasi" id="akreditasi">
                        </div>
                        <div class="form-group">
                            <label for="uang_kuliah">Uang Kuliah</label>
                            <input type="number" class="form-control" name="uang_kuliah" id="uang_kuliah">
                        </div>
                        <div class="form-group">
                            <label for="dpp_wajib">DPP Wajib</label>
                            <input type="number" class="form-control" name="dpp_wajib" id="dpp_wajib">
                        </div>
                        <div class="form-group">
                            <label for="brosur">Link Brosur</label>
                            <input type="text" class="form-control" name="brosur" id="brosur">
                        </div>
                        <button type="submit" name="create" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>



        </div>
    </div>

</div>