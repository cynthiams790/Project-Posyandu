<html>

<head>
    <title>Edit Pasien</title>
</head>

<body>
    <div class="card-header py-3" style="background-color:lightblue;">
        <h6 class="m-0 font-weight-bold text-primary">Data Pasien</h6>
        <a href="<?php echo base_url(); ?>pasien/data_pasien/" class='badge badge-primary'>kembali</a>
    </div>

    <div class=" card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <?php foreach ($data_pasien as $pasien) { ?>
                        <form action="<?php echo base_url() . 'pasien/update'; ?>" method="post">
                            <tr>
                                <td>Nama</td>
                                <td>
                                    <input type="hidden" id="id" name="id" value="<?php echo $pasien->id ?>" readonly>
                                    <input type="text" id="nama" name="nama" value="<?php echo $pasien->nama ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>Umur</td>
                                <td><input type="text" id="umur" name="umur" value="<?php echo $pasien->umur ?>"></td>
                            </tr>
                            <tr>
                                <td>Jenis kelamin</td>
                                <td><input type="text" id="jk" name="jk" value="<?php echo $pasien->jk ?>"></td>
                            </tr>
                            <tr>
                                <td>Data Lahir</td>
                                <td><input type="text" id="lahir" name="lahir" value="<?php echo $pasien->lahir ?>"></td>
                            </tr>
                            <tr>
                                <td>Nama Ayah</td>
                                <td><input type="text" id="nama_ayah" name="nama_ayah" value="<?php echo $pasien->nama_ayah ?>"></td>
                            </tr>
                            <tr>
                                <td>Nama Ibu</td>
                                <td><input type="text" id="nama_ibu" name="nama_ibu" value="<?php echo $pasien->nama_ibu ?>"></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><input type="text" id="alamat" name="alamat" value="<?php echo $pasien->alamat ?>"></td>
                            </tr>

                            <tr>
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