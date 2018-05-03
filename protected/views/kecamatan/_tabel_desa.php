<table class="table is-striped">
    <thead>
    <tr>
        <th>Nama desa</th>
        <th>Luas wilayah</th>
        <th>Potensi desa</th>
        <th>nama kepala desa</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($desas as $desa): ?>
        <tr>
            <th><?php echo $desa->nama_desa ?></th>
            <th><?php echo $desa->luas_wilayah. ' Km 2' ?></th>
            <th><?php echo $desa->nama_kepdes ?></th>
            <th><?php echo $desa->potensi_desa ?></th>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>