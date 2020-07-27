<?php
class guideline extends db{

    public function update_guideline($guideline, $guideline_id = 1){ 
        $query = $this->execute("UPDATE `guideline` SET `guideline` = ?,`updated_at`=NOW() WHERE `guideline_id`=?", [$guideline, $guideline_id]);
       return ($query)? true : false;
    }

    public function view_guideline(){ 
        $guideline = $this->execute("SELECT * FROM `guideline`", []);
       	return $this->f_one();
    }

    
    
}


