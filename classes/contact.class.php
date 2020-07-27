<?php
class contact extends db{

    public function update_contact($contact_address, $contact_phone, $contact_id = 1){ 
        $admin = $this->execute("UPDATE `contact` SET `contact_address`=?,`contact_phone`=?,`updated_at`=NOW() WHERE `contact_id`=?", [$contact_address, $contact_phone, $contact_id]);
       return $admin;
    }

 
    
}


