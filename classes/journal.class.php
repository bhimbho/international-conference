<?php
class journal extends db{

    public function count_journal(){ 
        $query = $this->execute("SELECT * FROM `journal`", []);
        return $this->row_count();
    }

    public function view_all_journals(){ 
        $query = $this->execute("SELECT * FROM `journal` LEFT JOIN participant ON journal.journal_id=participant.journal_id", []);
        return $this->f_all();
    }

    public function view_specific_journal($journal_id){
    	$journal_id = DB::Validate($journal_id);
        $query = $this->execute("SELECT * FROM `journal` LEFT JOIN participant ON journal.journal_id=participant.journal_id WHERE journal.journal_id = ?", [$journal_id]);
        return $this->f_one();
    }


     public function add_journal($title,$abstract,$file,$pages,$authors,$fname,$lname,$email,$phone,$institution){ 
     	/**
		*
		*
		**/
		$now = date('Y-m-d');
        if($query = $this->execute("INSERT INTO journal(`title`, `abstract`, `file`, `page_no`, `authors`, `email`, `phone`,`institution`, `upload_date`) VALUES (?,?,?,?,?,?,?,?,?)", [$title,$abstract,$file,$pages,$authors,$email,$phone,$institution,$now])){
        	$new_query = $this->execute("SELECT max(journal_id) FROM journal", []);
            $new_query = $new_query->fetchColumn();
            // var_dump($new_query);
            if($query = $this->execute("INSERT INTO participant(`firstname`, `lastname`,`journal_id`, `date_created`) VALUES (?,?,?,?)", [strtolower($fname),strtolower($lname),$new_query,$now])){
                return true;
            }
            else{
                return false;
            }
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
        $admin = $this->execute("SELECT * FROM `new_upload` LEFT JOIN participant ON new_upload.participant_id = participant.participantid LEFT JOIN journal ON journal.journal_id=participant.journal_id ORDER BY new_upload_id ASC", []);
        return $this->f_all();
    }

    public function view_specific_new_journal($id){ 
        $id = DB::Validate($id);
        $admin = $this->execute("SELECT * FROM `new_upload` LEFT JOIN participant ON new_upload.participant_id = participant.participantid LEFT JOIN journal ON journal.journal_id=participant.journal_id WHERE new_upload.new_upload_id =? ORDER BY new_upload_id ASC", [$id]);
        return $this->f_one();
    }

    public function search_by_title_author_institution($search_val){ 
        $search_val = DB::text_val($search_val);
        $admin = $this->execute("SELECT * FROM `new_upload` LEFT JOIN journal ON new_upload.participant_id = journal.journal_id WHERE MATCH(`journal`.`title`,`journal`.`authors`,`journal`.`institution`) AGAINST(? IN NATURAL LANGUAGE MODE)", [$search_val]);
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

    //------------------------- certificate ----------------------
public function search_certificate($search_val){ 
        $search_val = DB::text_val($search_val);
        $admin = $this->execute("SELECT * FROM `participant` LEFT JOIN journal ON participant.journal_id = journal.journal_id WHERE MATCH(`firstname`,`lastname`) AGAINST(? IN NATURAL LANGUAGE MODE)", [$search_val]);
        return $this->f_all();
    }
}


