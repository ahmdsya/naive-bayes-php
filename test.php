<?php
error_reporting(0);
require_once 'require.php';

$bayes = new Bayes();

$nama        = "ADE IRMA MANURUNG";
$fakultas    = "FUSI";
$peker_ayah  = "PETANI/NELAYAN/SUPIR";
$peker_ibu   = "IBU RUMAH TANGGA";
$peng_ayah   = "2 - 2,9 Juta";
$peng_ibu    = "Tidak Berpenghasilan";
$pend_ayah   = "SLTA";
$pend_ibu    = "SLTA";
$jlh_saudara = "3 - 5 Orang";
$luas_rumah  = "41-80 meter persegi";
$pbb         = "Tidak Memiliki Rumah";
$rek_listrik = "Dibawah 50 ribu";

$request = [
    'nama'        => $nama,
    'fakultas'    => $fakultas,
    'peker_ayah'  => $peker_ayah,
    'peker_ibu'   => $peker_ibu,
    'peng_ayah'   => $peng_ayah,
    'peng_ibu'    => $peng_ibu,
    'pend_ayah'   => $pend_ayah,
    'pend_ibu'    => $pend_ibu,
    'jlh_saudara' => $jlh_saudara,
    'luas_rumah'  => $luas_rumah,
    'pbb'         => $pbb,
    'rek_listrik' => $rek_listrik
];

$data = $bayes->hitung($request);
var_dump($data);


?>