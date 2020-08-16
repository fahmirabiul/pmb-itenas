<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">

            <div class="card mt-3" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center;">Upload Berkas Pendaftaran Ulang</h5>
                    <?= $this->session->flashdata('pasfoto'); ?>

                    <!-- Form Upload -->
                    <?= form_open_multipart('calon_mhs/upload'); ?>
                    <input type="hidden" name="nama_mhs" value="<?= $mhs_baru['nama_mhs']; ?>">
                    <div class="form-group row">
                        <div class="col-sm-2">(Pas Foto)</div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="<?= base_url('assets/img/daftul/pasfoto/') . $mhs_baru['foto']; ?>" class="img-thumbnail">
                                </div>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="pas_foto" name="pas_foto">
                                        <label class="custom-file-label" for="pas_foto">Pilih Foto</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-3 justify-content-end">
                        <div class="col-sm-1">
                            <button type="submit" class="btn btn-sm btn-primary" name="upload">Upload</button>
                        </div>
                    </div>
                    </form>
                    <!-- END of Form Upload -->
                </div>
            </div>
            <div class="card mt-3" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center;">Upload Berkas Pendaftaran Ulang</h5>
                    <?= $this->session->flashdata('ijazah'); ?>

                    <!-- Form Upload -->
                    <?= form_open_multipart('calon_mhs/uploadIjazah'); ?>
                    <input type="hidden" name="nama_mhs" value="<?= $mhs_baru['nama_mhs']; ?>">
                    <div class="form-group row">
                        <div class="col-sm-2">(Foto Ijazah)</div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="<?= base_url('assets/img/daftul/ijazah/') . $mhs_baru['ijazah']; ?>" class="img-thumbnail">
                                </div>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="ijazah" name="ijazah">
                                        <label class="custom-file-label" for="ijazah">Pilih Foto</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row mt-3 justify-content-end">
                        <div class="col-sm-1">
                            <button type="submit" class="btn btn-sm btn-primary" name="upload">Upload</button>
                        </div>
                    </div>
                    </form>
                    <!-- END of Form Upload -->
                </div>
            </div>


        </div>
    </main>