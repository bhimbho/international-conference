<?php
class callpapers extends db{

    public function update_callpapers($call_details, $call_id=1){ 
        $call = $this->execute("UPDATE `call_papers` SET `call_papers`=?, `date_updated`=NOW() WHERE `call_id`=?", [$call_details, $call_id]);
       return ($call)? true : false;
    }

 	public function view_callpapers($call_id=1){ 
        $call = $this->execute("SELECT * FROM `call_papers`WHERE call_id = ?", [$call_id]);
       	return $this->f_one();
    }


 
    
}


