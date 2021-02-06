<?php

class Koneksi
{
    private $dbhost     = 'localhost';
	private $dbusername = 'root';
	private $dbpassword = '';
	private $dbname     = 'bayes';
	
    protected $koneksi;
    
    public function __construct()
    {
        $this->koneksi = new PDO("mysql:host={$this->dbhost};dbname={$this->dbname}", $this->dbusername, $this->dbpassword);
    }
}
