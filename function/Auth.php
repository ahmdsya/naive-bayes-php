<?php

class Auth extends Koneksi {
    
    public function __construct()
	{
		parent::__construct();
    }

    public function login($req)
    {
        $query = $this->koneksi->prepare("SELECT * FROM user WHERE username=? && password=?");
        $query->bindParam(1, $req['username']);
        $query->bindParam(2, $req['password']);
        $query->execute();
        $count = $query->rowCount();

        if ($count >= 1) {
            $_SESSION['username'] = $req['username'];
            return true;
        }else{
            return false;
        }
    }

    public function register($req)
    {
        if ($req['confirm'] == $req['password']) {
            $query = $this->koneksi->prepare('INSERT INTO user (username,password) VALUES (?,?)');
            $query->bindParam(1, $req['username']);
            $query->bindParam(2, $req['password']);
            $query->execute();

            $_SESSION['username'] = $req['username'];
            return true;
        }else {
            return false;
        }
    }
}