<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><b> Data Pasien</b></h1>

    <p class="mb-4"> <a target="_blank" href="<?= base_url('pasien/data_pasien') ?>">official
            DataPasien documentation</a>.</p>

    <!-- DataTales Example -->

    <div class="card shadow mb-4">


        <div class="card-header py-3" style="background-color:lightblue;">
            <h6 class="m-0 font-weight-bold text-primary">Data Pasien</h6> <a href="<?= base_url('pasien/laporan_pdf') ?> " class="d-none d-sm-inline-block btn btn-sm  shadow-sm" style="background-color: red; color: white;"><i class="fas fa-download fa-sm text-blue-50" style="color:wheat;"></i> Generate Report</a>
        </div>


        <?php if (validation_errors()) : ?>
            <div class="alert alert-danger " role="alert">
                <?= validation_errors(); ?>
            </div>

        <?php endif; ?>

        <?php if ($this->session->flashdata('pasien')) :  ?>
            <div class="alert alert-warning alert-success fade show" role="alert">
                Data pasien<strong>berhasil di tambahkan</strong>
                <?= $this->session->flashdata('pasien'); ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php endif; ?>
        <div class=" card-body">
            <div class="table-responsive">
                <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#NewPasienModal">Tambah Pasien</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Jenis kelamin</th>
                            <th>Data lahir</th>
                            <th>Nama Ayah</th>
                            <th>Nama Ibu</th>
                            <th>Alamat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($data_pasien as $pasien) { ?>
                            <tr>
                                <td> <?php echo $pasien->id; ?></td>
                                <td><?php echo $pasien->nama; ?></td>
                                <td> <?php echo $pasien->umur; ?></td>
                                <td> <?php echo $pasien->jk; ?></td>
                                <td> <?php echo $pasien->lahir; ?></td>
                                <td> <?php echo $pasien->nama_ayah; ?></td>
                                <td> <?php echo $pasien->nama_ibu; ?></td>
                                <td><?php echo $pasien->alamat; ?></td>
                                <td> <a href="<?php echo base_url(); ?>pasien/edit/<?php echo $pasien->id; ?>" class="badge badge-success">Edit</a> <a href="<?php echo base_url(); ?>pasien/hapus/<?php echo $pasien->id; ?>" class='badge badge-danger'>Hapus</a> </td>


                            </tr>
                        <?php  } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


<!-- Modal -->
<div class="modal fade" id="NewPasienModal" tabindex="-1" role="dialog" aria-labelledby="NewPasienModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="NewPasienModalLabel">Tambah Pasien</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('pasien/data_pasien') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama pasien</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="nama">
                        <label>Umur Pasien</label>
                        <input type="text" class="form-control" id="umur" name="umur" placeholder="umur">
                        <label>Jenis Kelamin</label>
                        <input type="text" class="form-control" id="jk" name="jk" placeholder="jk">
                        <label>Data lahir</label>
                        <input type="text" class="form-control" id="lahir" name="lahir" placeholder="lahir">
                        <label>Nama Ayah</label>
                        <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder="nama_ayah">
                        <label>Nama Ibu</label>
                        <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder="nama_ibu">
                        <label>Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat">
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