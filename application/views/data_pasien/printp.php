<div class=" card-body">
    <div class="table-responsive">
        <center>
            <h1 class="h3 mb-2 text-gray-800"><b>Posyandu</b></h1>
        </center>
        <h2 class="h3 mb-2 text-gray-800"><b> Data Pasien</b></h2>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Jenis Kelamin</th>
                    <th>Data lahir</th>
                    <th>Nama Ayah</th>
                    <th>Nama Ibu</th>
                    <th>Alamat</th>

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



                    </tr>
                <?php  } ?>

            </tbody>
        </table>
        <br>

        <center>
            <p>@Copy Right 2020</p>
        </center>
    </div>
</div>