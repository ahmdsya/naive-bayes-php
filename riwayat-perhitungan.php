<?php
error_reporting(0);
$proses = new Proses();
$data  = $proses->getRiwayat();
?>

<div class="row">
    <div class="col-12 mt-4">
        <h3 class="tebal">Riwayat Perhitungan Pengelompokkan UKT</h3>
    </div>

    <div class="col-12 mt-4 mb-4">
        <table class="table table-responsive">
            <thead class="bg-warning">
                <tr>
                    <th>Nama/Kelompok</th>
                    <th>Fakultas</th>
                    <th>Peker.Ayah</th>
                    <th>Peker.Ibu</th>
                    <th>Peng.Ayah</th>
                    <th>Peng.Ibu</th>
                    <th>Pend.Ayah</th>
                    <th>Pend.Ibu</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                        foreach ($data as $row) {
                        ?>
                <tr>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['fakultas'] ?></td>
                    <td><?= $row['peker_ayah'] ?></td>
                    <td><?= $row['peker_ibu'] ?></td>
                    <td><?= $row['peng_ayah'] ?></td>
                    <td><?= $row['peng_ibu'] ?></td>
                    <td><?= $row['pend_ayah'] ?></td>
                    <td><?= $row['pend_ibu'] ?></td>
                    <td>
                        <a href="index.php?p=detail&id=<?= $row['id'] ?>" class="btn btn-primary">Detail</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>