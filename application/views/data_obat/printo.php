<div class="card shadow mb-4">
    <div class="card-header py-3" style="background-color: lightblue;">
        <h2 class="m-0 font-weight-bold text-primary">Data Obat</h2>

    </div>


    <div class="card-body">
        <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="2">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Obat</th>
                        <th>Keterangan Obat</th>


                    </tr>
                </thead>
                <?php
                foreach ($data_obat as $obat) { ?>
                    <tr>
                        <td> <?php echo $obat->id; ?></td>

                        <td> <?php echo $obat->nama_obat; ?></td>
                        <td> <?php echo $obat->keterangan_obat; ?></td>


                    </tr>
                <?php } ?>
                <tbody>



                </tbody>
            </table>
        </div>
    </div>
</div>

</div>