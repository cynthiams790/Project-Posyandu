<html>

<head>
    <title>Edit Obat</title>
</head>

<body>
    <div class="card-header py-3" style="background-color:lightblue;">
        <h6 class="m-0 font-weight-bold text-primary">Data Obat</h6>
        <a href="<?php echo base_url(); ?>obat/data_obat/" class='badge badge-primary'>kembali</a>
    </div>

    <div class=" card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <?php foreach ($data_obat as $obat) { ?>
                        <form action="<?php echo base_url() . 'obat/update'; ?>" method="post">
                            <tr>
                                <td>Nama Obat</td>
                                <td>
                                    <input type="hidden" id="id" name="id" value="<?php echo $obat->id ?>" readonly>
                                    <input type="text" id="nama_obat" name="nama_obat" value="<?php echo $obat->nama_obat ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Keterangan Obat</td>
                                <td><input type="text" id="keterangan_obat" name="keterangan_obat" value="<?php echo $obat->keterangan_obat ?>"></td>
                            </tr>
                            <td></td>
                            <td><button input type="submit" class="btn btn-primary">Simpan</button></td>
                            </tr> <?php } ?>
                </thead>
            </table>
            </form>
        </div>
    </div>
</body>

</html>