<?php
class venue extends db{

    public function update_venue($address, $hall, $picture, $venue_id = 1){ 
        $query = $this->execute("UPDATE `venue` SET `venue_address` = ?, `venue_hall`= ?, `venue_picture` = ? WHERE `venue_id`=?",[$address, $hall, $picture, $venue_id]);
       return ($query)? true : false;
    }

    public function view_venue(){ 
        $query = $this->execute("SELECT * FROM `venue`", []);
       	return $this->f_one();
    }
    
}

  