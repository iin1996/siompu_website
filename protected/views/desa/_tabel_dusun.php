<table class="table is-striped">
    <thead>
    <tr>
        <th>No</th>
        <th>Nama Dusun</th>
        <th>Jumlah RT</th>
        <th>Jumlah RW</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($dusuns as $key => $dusun): ?>
        <tr>
            <th><?php echo $key+1 ?></th>
            <th><?php echo $dusun->nama_dusun ?></th>
            <th><?php echo $dusun->jumlah_rt ?></th>
            <th><?php echo $dusun->jumlah_rw ?></th>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>