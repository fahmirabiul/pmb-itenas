<div class="container">

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Soal <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url('admin/soal_create') ?>" class="btn btn-primary">Tambah Data Soal</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-9">
            <h1>Daftar Soal</h1>
            <ul class="list-group">
                <?php foreach ($soal as $so) : ?>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-4">
                                <?= $so['mapel']; ?>
                            </div>
                            <div class="col-md-4">
                                <?= $so['pertanyaan']; ?>
                            </div>
                            <div class="col-md-4">
                                <a href="<?= base_url('admin/soal_delete/'); ?><?= $so['id_soal']; ?>" class="badge badge-danger float-right margin-left: 3px;" onclick="return confirm('yakin?');">Hapus</a>
                                <a href="<?= base_url('admin/soal_edit/'); ?><?= $so['id_soal']; ?>" class="badge badge-success float-right mr-1">Edit</a>
                                <a href="<?= base_url('admin/soal_detail/') ?><?= $so['id_soal']; ?>" class="badge badge-primary float-right margin-left: 5 mr-1">Detail</a>
                            </div>
                        </div>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>