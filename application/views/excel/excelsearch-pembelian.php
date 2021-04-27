<?php
header("Content-type:application/octet-stream/");

header("Content-Disposition:attachment; filename=$title.xls");

header("Pragma: no-cache");

header("Expires: 0");

?>
<h3>Laporan Pembelian S</h3>
<div class="navbar-form navbar-right">
    <?php echo form_open('searchpembelian') ?>
    <input type="date" name="keyword" class="form-control" placeholder="Search" required>
    <button type="submit" class="btn btn-danger btn-xs">Cari</button>
    <button type="button" class="btn btn-info btn-xs" onclick="location.href='<?= base_url('laporanpembelian'); ?>'">Kembali</button>
    <?php echo form_close() ?>
</div>
<table class="table">
    <thead class="table-light">
        <tr>
            <th>No</th>
            <th>Nama Polisi</th>
            <th>Jenis / Tipe</th>
            <th>Warna</th>
            <th>Bahan Bakar</th>
            <th>Tahun Keluaran</th>
            <th>Tanggal Pembelian</th>
            <th>Harga Beli</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1;
        foreach ($data_lapor  as $mobil) { ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?php echo $mobil->no_polis ?></td>
                <td><?php echo $mobil->jenis_typr ?></td>
                <td><?php echo $mobil->warna ?></td>
                <td><?php echo $mobil->bahan_bakar ?></td>
                <td><?php echo $mobil->tahun_keluaran ?></td>
                <td><?php echo $mobil->tgl_beli ?></td>
                <td>Rp <?php echo number_format($mobil->harga_beli) ?></td>
            </tr>
        <?php $i++;
        } ?>
        <tr style="font-weight: bold;">
            <td colspan="7">Total</td>
            <td>Rp <?php echo number_format($sum_jumlah->jumlah) ?></td>
        </tr>
    </tbody>
</table>