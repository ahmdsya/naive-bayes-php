<?php

error_reporting(0);

require_once 'require.php';

$bayes  = new Bayes();
$proses = new Proses();

if(isset($_POST['submit'])){
    $nama        = $_POST['nama'];
    $fakultas    = $_POST['fakultas'];
    $peker_ayah  = $_POST['peker_ayah'];
    $peker_ibu   = $_POST['peker_ibu'];
    $peng_ayah   = $_POST['peng_ayah'];
    $peng_ibu    = $_POST['peng_ibu'];
    $pend_ayah   = $_POST['pend_ayah'];
    $pend_ibu    = $_POST['pend_ibu'];
    $jlh_saudara = $_POST['jlh_saudara'];
    $luas_rumah  = $_POST['luas_rumah'];
    $pbb         = $_POST['pbb'];
    $rek_listrik = $_POST['rek_listrik'];

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

    // add data request ke table data
    //tampilkan id data terakhir
    $id = $proses->addData($request);

    if ($id) {
        //perhitungan
        $hasil = $bayes->hitung($request);
        
        //add hasil perhitungan ke table hasil
        $addHasil = $proses->addHasil($id,$hasil);
        
        //redirect ke halama detail perhitungan
        if($addHasil){
        header('Location: index.php?p=detail&id='.$id);
        }
    }

    // echo $id;
}