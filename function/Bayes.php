<?php

class Bayes extends Koneksi
{
    public function __construct()
    {
        parent::__construct();
    }

    /*================================================================
    MENGHITUNG LABEL ATAU KELAS  KELOMPOK UKT
    =================================================================*/
    public function sumUkt1()
    {
        $query = $this->koneksi->prepare("SELECT * FROM dataset where ukt=1");
        $query->execute();
        return $query->rowCount();
    }

    public function sumUkt2()
    {
        $query = $this->koneksi->prepare("SELECT * FROM dataset where ukt=2");
        $query->execute();
        return $query->rowCount();
    }

    public function sumUkt3()
    {
        $query = $this->koneksi->prepare("SELECT * FROM dataset where ukt=3");
        $query->execute();
        return $query->rowCount();
    }

    public function sumUkt4()
    {
        $query = $this->koneksi->prepare("SELECT * FROM dataset where ukt=4");
        $query->execute();
        return $query->rowCount();
    }

    public function sumUkt5()
    {
        $query = $this->koneksi->prepare("SELECT * FROM dataset where ukt=5");
        $query->execute();
        return $query->rowCount();
    }

    public function sumUkt6()
    {
        $query = $this->koneksi->prepare("SELECT * FROM dataset where ukt=6");
        $query->execute();
        return $query->rowCount();
    }

    public function sumUkt7()
    {
        $query = $this->koneksi->prepare("SELECT * FROM dataset where ukt=7");
        $query->execute();
        return $query->rowCount();
    }


    /*================================================================
    Mencari Peluang Probabilitas Atribut
    =================================================================*/
    public function probFakultas($fakultas,$ukt)
    {
        $query = $this->koneksi->prepare("SELECT * FROM dataset where fakultas=? && ukt=?");
        $query->bindParam(1, $fakultas);
        $query->bindParam(2, $ukt);
        $query->execute();
        return $query->rowCount();
    }

    public function probPekerAyah($peker_ayah,$ukt)
    {
        $query = $this->koneksi->prepare("SELECT * FROM dataset where peker_ayah=? && ukt=?");
        $query->bindParam(1, $peker_ayah);
        $query->bindParam(2, $ukt);
        $query->execute();
        return $query->rowCount();
    }

    public function probPekerIbu($peker_ibu,$ukt)
    {
        $query = $this->koneksi->prepare("SELECT * FROM dataset where peker_ibu=? && ukt=?");
        $query->bindParam(1, $peker_ibu);
        $query->bindParam(2, $ukt);
        $query->execute();
        return $query->rowCount();
    }

    public function probPengAyah($peng_ayah,$ukt)
    {
        $query = $this->koneksi->prepare("SELECT * FROM dataset where peng_ayah=? && ukt=?");
        $query->bindParam(1, $peng_ayah);
        $query->bindParam(2, $ukt);
        $query->execute();
        return $query->rowCount();
    }

    public function probPengIbu($peng_ibu,$ukt)
    {
        $query = $this->koneksi->prepare("SELECT * FROM dataset where peng_ibu=? && ukt=?");
        $query->bindParam(1, $peng_ibu);
        $query->bindParam(2, $ukt);
        $query->execute();
        return $query->rowCount();
    }

    public function probPendAyah($pend_ayah,$ukt)
    {
        $query = $this->koneksi->prepare("SELECT * FROM dataset where pend_ayah=? && ukt=?");
        $query->bindParam(1, $pend_ayah);
        $query->bindParam(2, $ukt);
        $query->execute();
        return $query->rowCount();
    }

    public function probPendIbu($pend_ibu,$ukt)
    {
        $query = $this->koneksi->prepare("SELECT * FROM dataset where pend_ibu=? && ukt=?");
        $query->bindParam(1, $pend_ibu);
        $query->bindParam(2, $ukt);
        $query->execute();
        return $query->rowCount();
    }

    public function probJlhSaudara($jlh_saudara,$ukt)
    {
        $query = $this->koneksi->prepare("SELECT * FROM dataset where jlh_saudara=? && ukt=?");
        $query->bindParam(1, $jlh_saudara);
        $query->bindParam(2, $ukt);
        $query->execute();
        return $query->rowCount();
    }

    public function probLuasRumah($luas_rumah,$ukt)
    {
        $query = $this->koneksi->prepare("SELECT * FROM dataset where luas_rumah=? && ukt=?");
        $query->bindParam(1, $luas_rumah);
        $query->bindParam(2, $ukt);
        $query->execute();
        return $query->rowCount();
    }

    public function probPBB($pbb,$ukt)
    {
        $query = $this->koneksi->prepare("SELECT * FROM dataset where pbb=? && ukt=?");
        $query->bindParam(1, $pbb);
        $query->bindParam(2, $ukt);
        $query->execute();
        return $query->rowCount();
    }

    public function probRekListrik($rek_listrik,$ukt)
    {
        $query = $this->koneksi->prepare("SELECT * FROM dataset where rek_listrik=? && ukt=?");
        $query->bindParam(1, $rek_listrik);
        $query->bindParam(2, $ukt);
        $query->execute();
        return $query->rowCount();
    }

    /*================================================================
    Hasil Perhitungan
    =================================================================*/

    public function hasilUKT1($probFakultas = 0,$probPekerAyah,$probPekerIbu = 0,$probPengAyah = 0,$probPengIbu = 0,$probPendAyah = 0,$probPendIbu = 0,$probJlhSaudara = 0,$probLuasRumah = 0,$probPBB = 0,$probRekListrik = 0)
    {
        $p1  = $probFakultas / $this->sumUkt1();
        $p2  = $probPekerAyah / $this->sumUkt1();
        $p3  = $probPekerIbu / $this->sumUkt1();
        $p4  = $probPengAyah / $this->sumUkt1();
        $p5  = $probPengIbu / $this->sumUkt1();
        $p6  = $probPendAyah / $this->sumUkt1();
        $p7  = $probPendIbu / $this->sumUkt1();
        $p8  = $probJlhSaudara / $this->sumUkt1();
        $p9  = $probLuasRumah / $this->sumUkt1();
        $p10 = $probPBB / $this->sumUkt1();
        $p11 = $probRekListrik / $this->sumUkt1();

        $hasil = $p1 * $p2 * $p3 * $p4 * $p5 * $p6 * $p7 * $p8 * $p9 * $p10 * $p11;
        $data = ['ukt'=>'1','p1'=>$p1,'p2'=>$p2,'p3'=>$p3,'p4'=>$p4,'p5'=>$p5,'p6'=>$p6,'p7'=>$p7,'p8'=>$p8,'p9'=>$p9,'p10'=>$p10,'p11'=>$p11,'hasil'=>$hasil,];

        return $data;
    }

    public function hasilUKT2($probFakultas = 0,$probPekerAyah,$probPekerIbu = 0,$probPengAyah = 0,$probPengIbu = 0,$probPendAyah = 0,$probPendIbu = 0,$probJlhSaudara = 0,$probLuasRumah = 0,$probPBB = 0,$probRekListrik = 0)
    {
        $p1  = $probFakultas / $this->sumUkt2();
        $p2  = $probPekerAyah / $this->sumUkt2();
        $p3  = $probPekerIbu / $this->sumUkt2();
        $p4  = $probPengAyah / $this->sumUkt2();
        $p5  = $probPengIbu / $this->sumUkt2();
        $p6  = $probPendAyah / $this->sumUkt2();
        $p7  = $probPendIbu / $this->sumUkt2();
        $p8  = $probJlhSaudara / $this->sumUkt2();
        $p9  = $probLuasRumah / $this->sumUkt2();
        $p10 = $probPBB / $this->sumUkt2();
        $p11 = $probRekListrik / $this->sumUkt2();

        $hasil = $p1 * $p2 * $p3 * $p4 * $p5 * $p6 * $p7 * $p8 * $p9 * $p10 * $p11;
        $data = ['ukt'=>'2','p1'=>$p1,'p2'=>$p2,'p3'=>$p3,'p4'=>$p4,'p5'=>$p5,'p6'=>$p6,'p7'=>$p7,'p8'=>$p8,'p9'=>$p9,'p10'=>$p10,'p11'=>$p11,'hasil'=>$hasil,];

        return $data;
    }

    public function hasilUKT3($probFakultas = 0,$probPekerAyah,$probPekerIbu = 0,$probPengAyah = 0,$probPengIbu = 0,$probPendAyah = 0,$probPendIbu = 0,$probJlhSaudara = 0,$probLuasRumah = 0,$probPBB = 0,$probRekListrik = 0)
    {
        $p1  = $probFakultas / $this->sumUkt3();
        $p2  = $probPekerAyah / $this->sumUkt3();
        $p3  = $probPekerIbu / $this->sumUkt3();
        $p4  = $probPengAyah / $this->sumUkt3();
        $p5  = $probPengIbu / $this->sumUkt3();
        $p6  = $probPendAyah / $this->sumUkt3();
        $p7  = $probPendIbu / $this->sumUkt3();
        $p8  = $probJlhSaudara / $this->sumUkt3();
        $p9  = $probLuasRumah / $this->sumUkt3();
        $p10 = $probPBB / $this->sumUkt3();
        $p11 = $probRekListrik / $this->sumUkt3();

        $hasil = $p1 * $p2 * $p3 * $p4 * $p5 * $p6 * $p7 * $p8 * $p9 * $p10 * $p11;
        $data = ['ukt'=>'3','p1'=>$p1,'p2'=>$p2,'p3'=>$p3,'p4'=>$p4,'p5'=>$p5,'p6'=>$p6,'p7'=>$p7,'p8'=>$p8,'p9'=>$p9,'p10'=>$p10,'p11'=>$p11,'hasil'=>$hasil,];

        return $data;
    }

    public function hasilUKT4($probFakultas = 0,$probPekerAyah,$probPekerIbu = 0,$probPengAyah = 0,$probPengIbu = 0,$probPendAyah = 0,$probPendIbu = 0,$probJlhSaudara = 0,$probLuasRumah = 0,$probPBB = 0,$probRekListrik = 0)
    {
        $p1  = $probFakultas / $this->sumUkt4();
        $p2  = $probPekerAyah / $this->sumUkt4();
        $p3  = $probPekerIbu / $this->sumUkt4();
        $p4  = $probPengAyah / $this->sumUkt4();
        $p5  = $probPengIbu / $this->sumUkt4();
        $p6  = $probPendAyah / $this->sumUkt4();
        $p7  = $probPendIbu / $this->sumUkt4();
        $p8  = $probJlhSaudara / $this->sumUkt4();
        $p9  = $probLuasRumah / $this->sumUkt4();
        $p10 = $probPBB / $this->sumUkt4();
        $p11 = $probRekListrik / $this->sumUkt4();

        $hasil = $p1 * $p2 * $p3 * $p4 * $p5 * $p6 * $p7 * $p8 * $p9 * $p10 * $p11;
        $data = ['ukt'=>'4','p1'=>$p1,'p2'=>$p2,'p3'=>$p3,'p4'=>$p4,'p5'=>$p5,'p6'=>$p6,'p7'=>$p7,'p8'=>$p8,'p9'=>$p9,'p10'=>$p10,'p11'=>$p11,'hasil'=>$hasil,];

        return $data;
    }

    public function hasilUKT5($probFakultas = 0,$probPekerAyah,$probPekerIbu = 0,$probPengAyah = 0,$probPengIbu = 0,$probPendAyah = 0,$probPendIbu = 0,$probJlhSaudara = 0,$probLuasRumah = 0,$probPBB = 0,$probRekListrik = 0)
    {
        $p1  = $probFakultas / $this->sumUkt5();
        $p2  = $probPekerAyah / $this->sumUkt5();
        $p3  = $probPekerIbu / $this->sumUkt5();
        $p4  = $probPengAyah / $this->sumUkt5();
        $p5  = $probPengIbu / $this->sumUkt5();
        $p6  = $probPendAyah / $this->sumUkt5();
        $p7  = $probPendIbu / $this->sumUkt5();
        $p8  = $probJlhSaudara / $this->sumUkt5();
        $p9  = $probLuasRumah / $this->sumUkt5();
        $p10 = $probPBB / $this->sumUkt5();
        $p11 = $probRekListrik / $this->sumUkt5();

        $hasil = $p1 * $p2 * $p3 * $p4 * $p5 * $p6 * $p7 * $p8 * $p9 * $p10 * $p11;
        $data = ['ukt'=>'5','p1'=>$p1,'p2'=>$p2,'p3'=>$p3,'p4'=>$p4,'p5'=>$p5,'p6'=>$p6,'p7'=>$p7,'p8'=>$p8,'p9'=>$p9,'p10'=>$p10,'p11'=>$p11,'hasil'=>$hasil,];

        return $data;
    }

    public function hasilUKT6($probFakultas = 0,$probPekerAyah,$probPekerIbu = 0,$probPengAyah = 0,$probPengIbu = 0,$probPendAyah = 0,$probPendIbu = 0,$probJlhSaudara = 0,$probLuasRumah = 0,$probPBB = 0,$probRekListrik = 0)
    {
        $p1  = $probFakultas / $this->sumUkt6();
        $p2  = $probPekerAyah / $this->sumUkt6();
        $p3  = $probPekerIbu / $this->sumUkt6();
        $p4  = $probPengAyah / $this->sumUkt6();
        $p5  = $probPengIbu / $this->sumUkt6();
        $p6  = $probPendAyah / $this->sumUkt6();
        $p7  = $probPendIbu / $this->sumUkt6();
        $p8  = $probJlhSaudara / $this->sumUkt6();
        $p9  = $probLuasRumah / $this->sumUkt6();
        $p10 = $probPBB / $this->sumUkt6();
        $p11 = $probRekListrik / $this->sumUkt6();

        $hasil = $p1 * $p2 * $p3 * $p4 * $p5 * $p6 * $p7 * $p8 * $p9 * $p10 * $p11;
        $data = ['ukt'=>'6','p1'=>$p1,'p2'=>$p2,'p3'=>$p3,'p4'=>$p4,'p5'=>$p5,'p6'=>$p6,'p7'=>$p7,'p8'=>$p8,'p9'=>$p9,'p10'=>$p10,'p11'=>$p11,'hasil'=>$hasil,];

        return $data;
    }

    public function hasilUKT7($probFakultas = 0,$probPekerAyah,$probPekerIbu = 0,$probPengAyah = 0,$probPengIbu = 0,$probPendAyah = 0,$probPendIbu = 0,$probJlhSaudara = 0,$probLuasRumah = 0,$probPBB = 0,$probRekListrik = 0)
    {
        $p1  = $probFakultas / $this->sumUkt7();
        $p2  = $probPekerAyah / $this->sumUkt7();
        $p3  = $probPekerIbu / $this->sumUkt7();
        $p4  = $probPengAyah / $this->sumUkt7();
        $p5  = $probPengIbu / $this->sumUkt7();
        $p6  = $probPendAyah / $this->sumUkt7();
        $p7  = $probPendIbu / $this->sumUkt7();
        $p8  = $probJlhSaudara / $this->sumUkt7();
        $p9  = $probLuasRumah / $this->sumUkt7();
        $p10 = $probPBB / $this->sumUkt7();
        $p11 = $probRekListrik / $this->sumUkt7();

        $hasil = $p1 * $p2 * $p3 * $p4 * $p5 * $p6 * $p7 * $p8 * $p9 * $p10 * $p11;
        $data = ['ukt'=>'7','p1'=>$p1,'p2'=>$p2,'p3'=>$p3,'p4'=>$p4,'p5'=>$p5,'p6'=>$p6,'p7'=>$p7,'p8'=>$p8,'p9'=>$p9,'p10'=>$p10,'p11'=>$p11,'hasil'=>$hasil,];

        return $data;
    }

    public function hitung($req)
    {
        // UKT 1
        $fakultas1    = $this->probFakultas($req['fakultas'],1);
        $peker_ayah1  = $this->probPekerAyah($req['peker_ayah'],1);
        $peker_ibu1   = $this->probPekerIbu($req['peker_ibu'],1);
        $peng_ayah1   = $this->probPengAyah($req['peng_ayah'],1);
        $peng_ibu1    = $this->probPengIbu($req['peng_ibu'],1);
        $pend_ayah1   = $this->probPendAyah($req['pend_ayah'],1);
        $pend_ibu1    = $this->probPendIbu($req['pend_ibu'],1);
        $jlh_saudara1 = $this->probJlhSaudara($req['jlh_saudara'],1);
        $luas_rumah1  = $this->probLuasRumah($req['luas_rumah'],1);
        $pbb1         = $this->probPBB($req['pbb'],1);
        $rek_listrik1 = $this->probRekListrik($req['rek_listrik'],1);

        // UKT 2
        $fakultas2    = $this->probFakultas($req['fakultas'],2);
        $peker_ayah2  = $this->probPekerAyah($req['peker_ayah'],2);
        $peker_ibu2   = $this->probPekerIbu($req['peker_ibu'],2);
        $peng_ayah2   = $this->probPengAyah($req['peng_ayah'],2);
        $peng_ibu2    = $this->probPengIbu($req['peng_ibu'],2);
        $pend_ayah2   = $this->probPendAyah($req['pend_ayah'],2);
        $pend_ibu2    = $this->probPendIbu($req['pend_ibu'],2);
        $jlh_saudara2 = $this->probJlhSaudara($req['jlh_saudara'],2);
        $luas_rumah2  = $this->probLuasRumah($req['luas_rumah'],2);
        $pbb2         = $this->probPBB($req['pbb'],2);
        $rek_listrik2 = $this->probRekListrik($req['rek_listrik'],2);

        // UKT 3
        $fakultas3    = $this->probFakultas($req['fakultas'],3);
        $peker_ayah3  = $this->probPekerAyah($req['peker_ayah'],3);
        $peker_ibu3   = $this->probPekerIbu($req['peker_ibu'],3);
        $peng_ayah3   = $this->probPengAyah($req['peng_ayah'],3);
        $peng_ibu3    = $this->probPengIbu($req['peng_ibu'],3);
        $pend_ayah3   = $this->probPendAyah($req['pend_ayah'],3);
        $pend_ibu3    = $this->probPendIbu($req['pend_ibu'],3);
        $jlh_saudara3 = $this->probJlhSaudara($req['jlh_saudara'],3);
        $luas_rumah3  = $this->probLuasRumah($req['luas_rumah'],3);
        $pbb3         = $this->probPBB($req['pbb'],3);
        $rek_listrik3 = $this->probRekListrik($req['rek_listrik'],3);

        // UKT 4
        $fakultas4    = $this->probFakultas($req['fakultas'],4);
        $peker_ayah4  = $this->probPekerAyah($req['peker_ayah'],4);
        $peker_ibu4   = $this->probPekerIbu($req['peker_ibu'],4);
        $peng_ayah4   = $this->probPengAyah($req['peng_ayah'],4);
        $peng_ibu4    = $this->probPengIbu($req['peng_ibu'],4);
        $pend_ayah4   = $this->probPendAyah($req['pend_ayah'],4);
        $pend_ibu4    = $this->probPendIbu($req['pend_ibu'],4);
        $jlh_saudara4 = $this->probJlhSaudara($req['jlh_saudara'],4);
        $luas_rumah4  = $this->probLuasRumah($req['luas_rumah'],4);
        $pbb4         = $this->probPBB($req['pbb'],4);
        $rek_listrik4 = $this->probRekListrik($req['rek_listrik'],4);

        // UKT 5
        $fakultas5    = $this->probFakultas($req['fakultas'],5);
        $peker_ayah5  = $this->probPekerAyah($req['peker_ayah'],5);
        $peker_ibu5   = $this->probPekerIbu($req['peker_ibu'],5);
        $peng_ayah5   = $this->probPengAyah($req['peng_ayah'],5);
        $peng_ibu5    = $this->probPengIbu($req['peng_ibu'],5);
        $pend_ayah5   = $this->probPendAyah($req['pend_ayah'],5);
        $pend_ibu5    = $this->probPendIbu($req['pend_ibu'],5);
        $jlh_saudara5 = $this->probJlhSaudara($req['jlh_saudara'],5);
        $luas_rumah5  = $this->probLuasRumah($req['luas_rumah'],5);
        $pbb5         = $this->probPBB($req['pbb'],5);
        $rek_listrik5 = $this->probRekListrik($req['rek_listrik'],5);

        // UKT 6
        $fakultas6    = $this->probFakultas($req['fakultas'],6);
        $peker_ayah6  = $this->probPekerAyah($req['peker_ayah'],6);
        $peker_ibu6   = $this->probPekerIbu($req['peker_ibu'],6);
        $peng_ayah6   = $this->probPengAyah($req['peng_ayah'],6);
        $peng_ibu6    = $this->probPengIbu($req['peng_ibu'],6);
        $pend_ayah6   = $this->probPendAyah($req['pend_ayah'],6);
        $pend_ibu6    = $this->probPendIbu($req['pend_ibu'],6);
        $jlh_saudara6 = $this->probJlhSaudara($req['jlh_saudara'],6);
        $luas_rumah6  = $this->probLuasRumah($req['luas_rumah'],6);
        $pbb6         = $this->probPBB($req['pbb'],6);
        $rek_listrik6 = $this->probRekListrik($req['rek_listrik'],6);

        // UKT 7
        $fakultas7    = $this->probFakultas($req['fakultas'],7);
        $peker_ayah7  = $this->probPekerAyah($req['peker_ayah'],7);
        $peker_ibu7   = $this->probPekerIbu($req['peker_ibu'],7);
        $peng_ayah7   = $this->probPengAyah($req['peng_ayah'],7);
        $peng_ibu7    = $this->probPengIbu($req['peng_ibu'],7);
        $pend_ayah7   = $this->probPendAyah($req['pend_ayah'],7);
        $pend_ibu7    = $this->probPendIbu($req['pend_ibu'],7);
        $jlh_saudara7 = $this->probJlhSaudara($req['jlh_saudara'],7);
        $luas_rumah7  = $this->probLuasRumah($req['luas_rumah'],7);
        $pbb7         = $this->probPBB($req['pbb'],7);
        $rek_listrik7 = $this->probRekListrik($req['rek_listrik'],7);

        // Hasil
        $hasilukt1 = $this->hasilUKT1($fakultas1,$peker_ayah1,$peker_ibu1,$peng_ayah1,$peng_ibu1,$pend_ayah1,$pend_ibu1,$jlh_saudara1,$luas_rumah1,$pbb1,$rek_listrik1);
        $hasilukt2 = $this->hasilUKT2($fakultas2,$peker_ayah2,$peker_ibu2,$peng_ayah2,$peng_ibu2,$pend_ayah2,$pend_ibu2,$jlh_saudara2,$luas_rumah2,$pbb2,$rek_listrik2);
        $hasilukt3 = $this->hasilUKT3($fakultas3,$peker_ayah3,$peker_ibu3,$peng_ayah3,$peng_ibu3,$pend_ayah3,$pend_ibu3,$jlh_saudara3,$luas_rumah3,$pbb3,$rek_listrik3);
        $hasilukt4 = $this->hasilUKT4($fakultas4,$peker_ayah4,$peker_ibu4,$peng_ayah4,$peng_ibu4,$pend_ayah4,$pend_ibu4,$jlh_saudara4,$luas_rumah4,$pbb4,$rek_listrik4);
        $hasilukt5 = $this->hasilUKT5($fakultas5,$peker_ayah5,$peker_ibu5,$peng_ayah5,$peng_ibu5,$pend_ayah5,$pend_ibu5,$jlh_saudara5,$luas_rumah5,$pbb5,$rek_listrik5);
        $hasilukt6 = $this->hasilUKT6($fakultas6,$peker_ayah6,$peker_ibu6,$peng_ayah6,$peng_ibu6,$pend_ayah6,$pend_ibu6,$jlh_saudara6,$luas_rumah6,$pbb6,$rek_listrik6);
        $hasilukt7 = $this->hasilUKT7($fakultas7,$peker_ayah7,$peker_ibu7,$peng_ayah7,$peng_ibu7,$pend_ayah7,$pend_ibu7,$jlh_saudara7,$luas_rumah7,$pbb7,$rek_listrik7);

        $data = [$hasilukt1,$hasilukt2,$hasilukt3,$hasilukt4,$hasilukt5,$hasilukt6,$hasilukt7];
        
        return $data;
    }
}

?>