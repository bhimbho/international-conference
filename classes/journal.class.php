<?php
class journal extends db{

    public function count_journal(){ 
        $query = $this->execute("SELECT * FROM `journal`", []);
        return $this->row_count();
    }

    public function view_all_journals(){ 
        $query = $this->execute("SELECT * FROM `journal`", []);
        return $this->f_all();
    }

    public function view_specific_journal($journal_id){
    	$journal_id = DB::Validate($journal_id);
        $query = $this->execute("SELECT * FROM `journal` WHERE journal_id = ?", [$journal_id]);
        return $this->f_one();
    }

    public function editors_pick(){
        $admin = $this->execute("SELECT * FROM `journal` LEFT JOIN volume ON journal.volume_id = volume.volume_id  WHERE editors_pick = ? AND publish_status = ? ORDER BY journal_id DESC LIMIT 3", [1,1]);
        return $this->f_all();
    }

    public function search_by_volume($volume_id){ 
    	$volume_id = DB::Validate($volume_id);
        $admin = $this->execute("SELECT * FROM `journal` WHERE volume_id = ?", [$volume_id]);
        return $this->f_all();
    }

     public function view_specific_journal_w_volume($journal_id){ 
     	$journal_id = DB::Validate($journal_id);
        $admin = $this->execute("SELECT * FROM `journal` LEFT JOIN volume ON journal.volume_id = volume.volume_id WHERE journal_id = ?", [$journal_id]);
        return $this->f_one();
    }

    public function admin_details($admin_id){
        $admin = $this->execute("SELECT * FROM `admin` WHERE `admin_id`=?", [$admin_id]);
        return $this->fetch_all();
    }
    
     public function all_volumes(){ 
        $admin = $this->execute("SELECT * FROM `volume`", []);
        return $this->f_all();
    }
    public function get_volume($volume_id){ 
        $admin = $this->execute("SELECT * FROM `volume` WHERE volume_id = ?", [$volume_id]);
        return $this->f_one();
    }

    public function assign_volume($journal_id,$volume_id){ 
        if($admin = $this->execute("UPDATE journal SET `volume_id` =?, publish_status = ? WHERE journal_id = ?", [$volume_id,1,$journal_id])){
        	return true;
        }
        else{
        	return false;
        }
    }

     public function add_journal($title,$abstract,$file,$pages,$authors,$fname,$lname,$email,$phone){ 
     	/**
		*
		*
		**/
		$now = date('Y-m-d');
        if($query = $this->execute("INSERT INTO journal(`title`, `abstract`, `file`, `page_no`, `authors`, `firstname`, `lastname`, `email`, `phone`, `upload_date`, `publish_date`) VALUES (?,?,?,?,?,?,?,?,?,?,?)", [$title,$abstract,$file,$pages,$authors,$fname,$lname,$email,$phone,$now,$now])){
        	return true;
        }
        else{
        	return false;
        }
    }
//------------- new upload --------------
    public function count_new_journal(){ 
        $query = $this->execute("SELECT * FROM `new_upload`", []);
        return $this->row_count();
    }

    public function add_new_journal_upload($participant_id,$file){ 
        /**
        *
        *
        **/
        $now = date('Y-m-d');
        if($query = $this->execute("INSERT INTO `new_upload` (`participant_id`, `file_name`, `date_upload_created`) VALUES (?,?,?)", [$participant_id,$file,$now])){
            return true;
        }
        else{
            return false;
        }
    }

    public function view_all_new_journals(){ 
        $admin = $this->execute("SELECT * FROM `new_upload` LEFT JOIN journal ON new_upload.participant_id = journal.journal_id ORDER BY new_upload_id DESC", []);
        return $this->f_all();
    }

    public function delete_new_upload($upload_id){ 
        if($admin = $this->execute("DELETE FROM new_upload WHERE new_upload_id = ?", [$upload_id])){
            return true;
        }
        else{
            return false;
        }
    }
    //----------end upload----

    public function delete_journal($journal_id){ 
        if($admin = $this->execute("DELETE FROM journal WHERE journal_id = ?", [$journal_id])){
        	return true;
        }
        else{
        	return false;
        }
    }

    public function update_journal($journal_id){ 
    	
        if($admin = $this->execute("UPDATE journal SET `publish_status` =? WHERE journal_id = ?", [0,$journal_id])){
        	return true;
        }
        else{
        	return false;
        }
    }
}


