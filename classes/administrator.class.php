<?php
include('db.class.php');
class administrator extends db{

    public function login($username, $password){ 
        $admin = $this->execute("SELECT * FROM `administrator` WHERE `admin_username`=? and `admin_password`=?", [$username, $password]);
        return $this->fetch_all();
    }

    public function admin_details($admin_id){
        $admin = $this->execute("SELECT * FROM `administrator` WHERE `administrator_id`=?", [$admin_id]);
        return $this->fetch_all();
    }
    
}


