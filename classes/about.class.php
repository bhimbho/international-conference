<?php
class about extends db{

    public function update_about($about, $about_id = 1){ 
        $admin = $this->execute("UPDATE `about` SET `about`=?, `updated_at`=NOW() WHERE `about_id`=?", [$about, $about_id]);
       return $admin;
    }

 	public function view_about(){ 
        $welcome = $this->execute("SELECT * FROM `about`", []);
       	return $this->f_one();
    }

 	public function view_welcome(){ 
        $welcome = $this->execute("SELECT * FROM `welcome_message`", []);
       	return $this->f_one();
    }
 
    
}


