<?php
header("Content-type:application/octet-stream/");

header("Content-Disposition:attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<h3>Laporan Penjualan</h3>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nomor Polisi</th>
            <th>Jenis / Tipe</th>
            <th>Warna</th>
            <th>Bahan Bakar</th>
            <th>Tahun Keluaran</th>
            <th>Harga Jual</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1;
        foreach ($data_penjualan as $penjualan) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?php echo $penjualan->no_polis ?></td>
                <td><?php echo $penjualan->jenis_typr ?></td>
                <td><?php echo $penjualan->warna ?></td>
                <td><?php echo $penjualan->bahan_bakar ?></td>
                <td><?php echo $penjualan->tahun_keluaran ?></td>
                <td>Rp <?php echo number_format($penjualan->harga_jual) ?></td>
            </tr>
        <?php endforeach;
        ?>
        <tr style="font-weight: bold;">
            <td colspan="6">Total</td>
            <td>Rp <?php echo number_format($sum_jumlahpenjualan->jumlahpenjualan) ?></td>
        </tr>
    </tbody>
</table>