            <div class="mt-3">
                <div class="card" style="width: 80%; margin-left: auto; margin-right: auto;">
                    <div class="card-body">
                        <h5 class="card-title">DATA DIRI CALON MAHASISWA</h5>
                        <br>
                        <h6 class="card-subtitle mb-2 text-muted mt-2">Data Pribadi</h6>
                        <div class="row">
                            <div class="col-md-3">
                                <p class="card-text">Nama</p>
                                <p class="card-text">No Ijazah/Password</p>
                                <p class="card-text">Tempat Lahir</p>
                                <p class="card-text">Tanggal Lahir</p>
                                <p class="card-text">Jenis Kelamin</p>
                                <p class="card-text">Alamat</p>
                                <p class="card-text">Nomor HandPhone</p>
                                <p class="card-text">Agama</p>
                                <p class="card-text">Email</p>
                                <p class="card-text">Asal Sekolah</p>
                                <p class="card-text">Jalur Pendaftaran</p>
                                <p class="card-text">Calon Jurusan</p>
                            </div>
                            <div class="col-md-6">
                                <p class="card-text">: <?= ucwords($calon['nama']); ?></p>
                                <p class="card-text">: <?= ucwords($calon['no_ijazah']); ?></p>
                                <p class="card-text">: <?= ucwords($calon['tempat_lahir']); ?></p>
                                <p class="card-text">: <?= ucwords($calon['tgl_lahir']); ?></p>
                                <p class="card-text">: <?= ucwords($calon['jns_kelamin']); ?></p>
                                <p class="card-text">: <?= ucwords($calon['alamat']); ?></p>
                                <p class="card-text">: <?= ucwords($calon['nohp']); ?></p>
                                <p class="card-text">: <?= ucwords($calon['agama']); ?></p>
                                <p class="card-text">: <?= ($calon['email']); ?></p>
                                <p class="card-text">: <?= ucwords($calon['asal_sekolah']); ?></p>
                                <p class="card-text">: <?= ucwords($calon['nama_jalur']); ?></p>
                                <p class="card-text">: <?= ucwords($calon['nama_jrs']); ?></p>
                            </div>
                        </div>

                        <hr>
                        <h6 class="card-subtitle mb-2 text-muted">Data Orang Tua</h6>
                        <div class="row">
                            <div class="col-md-3">
                                <p class="card-text">Nama</p>
                                <p class="card-text">Alamat</p>
                                <p class="card-text">Nomor HandPhone</p>
                            </div>
                            <div class="col-md-6">
                                <p class="card-text"> : <?= ucwords($calon['nama_ortu']); ?></p>
                                <p class="card-text"> : <?= ucwords($calon['alamat_ortu']); ?></p>
                                <p class="card-text"> : <?= ucwords($calon['nohp_ortu']); ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>