<?php

class DataLatih extends Koneksi 
{
    public function __construct()
	{
		parent::__construct();
    }

    public function tampil()
    {
        $query = $this->koneksi->prepare('SELECT * FROM dataset');
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
}