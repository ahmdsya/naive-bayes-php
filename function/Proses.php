<?php

class Proses extends Koneksi 
{
    public function __construct()
	{
		parent::__construct();
    }

    public function addData($req)
    {
        $data = $this->koneksi->prepare('INSERT INTO data (nama,fakultas,peker_ayah,peker_ibu,peng_ayah,peng_ibu,pend_ayah,pend_ibu,jlh_saudara,luas_rumah,pbb,rek_listrik) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)');
        
        $data->bindParam(1, $req['nama']);
        $data->bindParam(2, $req['fakultas']);
        $data->bindParam(3, $req['peker_ayah']);
        $data->bindParam(4, $req['peker_ibu']);
        $data->bindParam(5, $req['peng_ayah']);
        $data->bindParam(6, $req['peng_ibu']);
        $data->bindParam(7, $req['pend_ayah']);
        $data->bindParam(8, $req['pend_ibu']);
        $data->bindParam(9, $req['jlh_saudara']);
        $data->bindParam(10, $req['luas_rumah']);
        $data->bindParam(11, $req['pbb']);
        $data->bindParam(12, $req['rek_listrik']);

        $exe = $data->execute();

        if ($exe) {
            $query = $this->koneksi->prepare("SELECT * FROM data ORDER BY id DESC LIMIT 1");
            $query->execute();
            $fetch = $query->fetch();

            $id = $fetch['id'];
        }

        return $id;
    }

    public function addHasil($id,$hasil)
    {
        foreach ($hasil as $req) {
            $data = $this->koneksi->prepare('INSERT INTO hasil (data_id,kelompok,fakultas,peker_ayah,peker_ibu,peng_ayah,peng_ibu,pend_ayah,pend_ibu,jlh_saudara,luas_rumah,pbb,rek_listrik,ukt) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
        
            $data->bindParam(1, $id);
            $data->bindParam(2, $req['ukt']);
            $data->bindParam(3, $req['p1']);
            $data->bindParam(4, $req['p2']);
            $data->bindParam(5, $req['p3']);
            $data->bindParam(6, $req['p4']);
            $data->bindParam(7, $req['p5']);
            $data->bindParam(8, $req['p6']);
            $data->bindParam(9, $req['p7']);
            $data->bindParam(10, $req['p8']);
            $data->bindParam(11, $req['p9']);
            $data->bindParam(12, $req['p10']);
            $data->bindParam(13, $req['p11']);
            $data->bindParam(14, $req['hasil']);

            $data->execute();
        }

        $query = $this->koneksi->prepare("SELECT * FROM hasil WHERE data_id=$id ORDER BY ukt DESC LIMIT 1");
        $query->execute();
        $fetch = $query->fetch();

        $ukt = $fetch['kelompok'];
        if ($ukt) {
            $query1 = $this->koneksi->prepare('UPDATE data set ukt=? where id=?');
        
            $query1->bindParam(1, $ukt);
            $query1->bindParam(2, $id);

            $query1->execute();
        }

        return true;
    }

    public function getData($id)
    {
        $query = $this->koneksi->prepare("SELECT * FROM data WHERE id=$id");
        $query->execute();
        $data = $query->fetch();

        return $data;
    }

    public function getHasil($data_id)
    {
        $query = $this->koneksi->prepare("SELECT * FROM hasil WHERE data_id=$data_id");
        $query->execute();
        $data = $query->fetchAll();

        return $data;
    }

    public function getRiwayat()
    {
        $query = $this->koneksi->prepare("SELECT * FROM data ORDER BY id DESC");
        $query->execute();
        $data = $query->fetchAll();

        return $data;
    }
}