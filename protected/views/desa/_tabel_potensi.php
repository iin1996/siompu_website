<table class="table is-striped">
    <thead>
    <tr>
        <th>Nama Potensi Desa</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($potensiDesas as $potensiDesa): ?>
        <tr>
            <th><?php echo $potensiDesa->nama?></th>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>