<?php
header("Content-type:application/octet-stream/");

header("Content-Disposition:attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<h3>Laporan Pembelian</h3>
<table border="1" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nomor Polisi</th>
            <th>Jenis / Tipe</th>
            <th>Warna</th>
            <th>Bahan Bakar</th>
            <th>Tahun Keluaran</th>
            <th>Tanggal Pembelian</th>
            <th>Harga Jual</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1;
        foreach ($data_pembelian as $pembelian) : ?>
            <tr>
                <td><?= $i++; ?></td>
                <td><?php echo $pembelian->no_polis ?></td>
                <td><?php echo $pembelian->jenis_typr ?></td>
                <td><?php echo $pembelian->warna ?></td>
                <td><?php echo $pembelian->bahan_bakar ?></td>
                <td><?php echo $pembelian->tahun_keluaran ?></td>
                <td><?php echo $pembelian->tgl_beli ?></td>
                <td>Rp <?php echo number_format($pembelian->harga_beli) ?></td>
            </tr>
        <?php endforeach;
        ?>
        <tr style="font-weight: bold;">
            <td colspan="7">Total</td>
            <td>Rp <?php echo number_format($sum_jumlah->jumlah) ?></td>
        </tr>
    </tbody>
</table>