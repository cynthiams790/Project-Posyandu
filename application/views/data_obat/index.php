<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Obat</h1>
    <p class="mb-4">Nama Obat dan keterangan pada Obat <a target="_blank" href="https://datatables.net">official
            DataObat documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3" style="background-color: lightblue;">
            <h6 class="m-0 font-weight-bold text-primary">Data Obat</h6>
            <a href="<?= base_url('obat/laporan_pdf') ?> " class="d-none d-sm-inline-block btn btn-sm  shadow-sm" style="background-color: red; color: white;"><i class="fas fa-download fa-sm text-blue-50" style="color:wheat;"></i> Generate Report</a>
        </div>
        <?php if (validation_errors()) : ?>
            <div class="alert alert-danger " role="alert">
                <?= validation_errors(); ?>
            </div>
        <?php endif; ?>

        <div class="card-body">
            <div class="table-responsive">
                <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#NewObatModal">Tambah Obat</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Obat</th>
                            <th>Keterangan Obat</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <?php
                    foreach ($obat as $o) { ?>
                        <tr>
                            <td> <?php echo $o->id; ?></td>

                            <td> <?php echo $o->nama_obat; ?></td>
                            <td> <?php echo $o->keterangan_obat; ?></td>
                            <td><a href="<?php echo base_url(); ?>obat/edit/<?php echo $o->id; ?>" class="badge badge-success">Edit</a> <a href="<?php echo base_url(); ?>obat/hapus/<?php echo $o->id; ?>" class="badge badge-danger">Hapus</a> </td>


                        </tr>
                    <?php } ?>
                    <tbody>



                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<!-- Modal -->
<div class="modal fade" id="NewObatModal" tabindex="-1" role="dialog" aria-labelledby="NewObatModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="NewObatModalLabel">Tambah Obat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('obat/data_obat') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Obat</label>
                        <input type="text" class="form-control" id="nama_obat" name="nama_obat" placeholder="nama obat">
                        <label>Keterangan Obat</label>
                        <input type="text" class="form-control" id="keterangan_obat" name="keterangan_obat" placeholder="keterangan obat">


                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>