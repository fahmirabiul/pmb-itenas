<div class="container">

    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Jurusan <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url('admin/jurusan_create') ?>" class="btn btn-primary">Tambah Data Jurusan</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-9">
            <h1>Daftar Jurusan</h1>
            <ul class="list-group">
                <?php foreach ($jurusan as $jrs) : ?>
                    <li class="list-group-item">
                        <?= $jrs['nama_jrs']; ?>
                        <a href="<?= base_url('admin/jurusan_delete/'); ?><?= $jrs['kode_jrs']; ?>" class="badge badge-danger float-right margin-left: 3px;" onclick="return confirm('yakin?');">Hapus</a>
                        <a href="<?= base_url('admin/jurusan_edit/'); ?><?= $jrs['kode_jrs']; ?>" class="badge badge-success float-right mr-1">Edit</a>
                        <a href="<?= base_url('admin/jurusan_detail/') ?><?= $jrs['kode_jrs']; ?>" class="badge badge-primary float-right margin-left: 5 mr-1">Detail</a>

                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>