<?php
class registration_fee extends db{

    public function update_registration_fee($bankname, $acc_name, $acc_number, $registration_fee,$reg_fee_in_dollars, $registration_fee_id = 1){ 
        $query = $this->execute("UPDATE `registration_fee` SET `bank` = ?, `account_name`= ?, `account_number` = ?, `amount`= ?,`amount_in_dollar`=?, `updated_at`=NOW() WHERE `reg_id`=?",[$bankname, $acc_name, $acc_number,$registration_fee,$reg_fee_in_dollars, $registration_fee_id]);
       return ($query)? true : false;
    }

    public function view_reg_fee(){ 
        $query = $this->execute("SELECT * FROM `registration_fee`", []);
       	return $this->f_one();
    }
    
}

  
