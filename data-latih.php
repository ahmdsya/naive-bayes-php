<?php
$obj   = new DataLatih();
$data  = $obj->tampil();
?>
<div class="row">
    <div class="col-12 mt-4 mb-4">
        <table id="dataLatih" class="display pt-3 mb-3 table-responsive" style="margin-top:90px">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Mahasiswa</th>
                    <th>Prodi</th>
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
                <?php 
                        $no = 1;
                        foreach ($data as $value) {
                        ?>
                <tr>
                    <td><?= $no ?></td>
                    <td><?= $value['nama'] ?></td>
                    <td><?= $value['prodi'] ?></td>
                    <td><?= $value['fakultas'] ?></td>
                    <td><?= $value['peker_ayah'] ?></td>
                    <td><?= $value['peker_ibu'] ?></td>
                    <td><?= $value['peng_ayah'] ?></td>
                    <td><?= $value['peng_ibu'] ?></td>
                    <td><?= $value['pend_ayah'] ?></td>
                    <td><?= $value['pend_ibu'] ?></td>
                    <td><?= $value['jlh_saudara'] ?></td>
                    <td><?= $value['luas_rumah'] ?></td>
                    <td><?= $value['pbb'] ?></td>
                    <td><?= $value['rek_listrik'] ?></td>
                    <td><?= $value['ukt'] ?></td>
                </tr>
                <?php
                        $no++;
                        }
                        ?>
            </tbody>
        </table>
    </div>
</div>