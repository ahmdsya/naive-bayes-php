<?php
error_reporting(0);

if (isset($_GET['id'])) {
    $id     = $_GET['id'];
}else {
    header('Location: index.php');
}

$proses = new Proses();

$data  = $proses->getData($id);
$hasil = $proses->getHasil($id);
?>

<div class="row">
    <div class="col-12 mt-4">
        <h3 class="tebal">Detail Hasil Pengelompokkan UKT</h3>
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
                    <th>Jlh.Saudara</th>
                    <th>Luas Rumah</th>
                    <th>PBB</th>
                    <th>Rek.Listrik</th>
                    <th>UKT</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['fakultas'] ?></td>
                    <td><?= $data['peker_ayah'] ?></td>
                    <td><?= $data['peker_ibu'] ?></td>
                    <td><?= $data['peng_ayah'] ?></td>
                    <td><?= $data['peng_ibu'] ?></td>
                    <td><?= $data['pend_ayah'] ?></td>
                    <td><?= $data['pend_ibu'] ?></td>
                    <td><?= $data['jlh_saudara'] ?></td>
                    <td><?= $data['luas_rumah'] ?></td>
                    <td><?= $data['pbb'] ?></td>
                    <td><?= $data['rek_listrik'] ?></td>
                    <td><?= $data['ukt'] ?></td>
                </tr>
                <tr class="table-secondary">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <?php 
                        foreach($hasil as $row) {
                        if ($row['kelompok'] == $data['ukt']) {
                            $class = 'bg-success';
                        }else {
                            $class = '';
                        }
                        ?>
                <tr class="<?= $class ?>">
                    <td>Kel. <?= $row['kelompok'] ?></td>
                    <td><?= $row['fakultas'] ?></td>
                    <td><?= $row['peker_ayah'] ?></td>
                    <td><?= $row['peker_ibu'] ?></td>
                    <td><?= $row['peng_ayah'] ?></td>
                    <td><?= $row['peng_ibu'] ?></td>
                    <td><?= $row['pend_ayah'] ?></td>
                    <td><?= $row['pend_ibu'] ?></td>
                    <td><?= $row['jlh_saudara'] ?></td>
                    <td><?= $row['luas_rumah'] ?></td>
                    <td><?= $row['pbb'] ?></td>
                    <td><?= $row['rek_listrik'] ?></td>
                    <td><?= $row['ukt'] ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>