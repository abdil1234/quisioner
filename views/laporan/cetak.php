<?php
/* @var $this yii\web\View */
?>
<h3 style="text-align: center;">Laporan Kritik/Saran Kelurahan TB II </h3> <br/>
<table border="1" cellspacing="0" cellpadding="10" width=100%>
        <thead>
            <tr style="background:lavender;">
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Kritik</th>
                <th>Saran</th>
                <th>Waktu Buat</th>
                <th>Lingkungan</th>
            </tr>
        </thead>
        <tbody>
            
            <?php 
            $no = 1;
            foreach ($model as $d) { ?>
                <tr>
                    <td align="center"><?= $no++ ?></td>
                    <td align="center"><?= $d->nama ?></td>
                    <td align="center"><?= $d->jenis_kelamin ?></td>
                    <td align="center"><?= $d->tgl_lahir ?></td>
                    <td align="center"><?= $d->alamat ?></td>
                    <td align="center"><?= $d->kritik ?></td>
                    <td align="center"><?= $d->saran ?></td>
                    <td align="center"><?= $d->waktu ?></td>
                    <td align="center"><?= ($d->lingkungan) ? $d->lingkungan->lingkungan: null ?></td>
                </tr>

            <?php }?>

        </tbody>
     </table>
