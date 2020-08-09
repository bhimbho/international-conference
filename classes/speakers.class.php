<?php 
/**
 * 
 */
class speakers extends db
{
	public function count_speakers(){ 
        $query = $this->execute("SELECT * FROM `speakers`", []);
        return $this->row_count();
    }
	/**
		ADD speakers functions
	**/
	public function add_speakers($name,$institution,$address,$picture,$profile,$type,$order)
	{
		$query = $this->execute("INSERT INTO `speakers`(`name`, `institution`, `address`, `picture`, `profile`, `type`,`speaker_order`) VALUES (?,?,?,?,?,?,?)", [$name,$institution,$address,$picture,$profile,$type,$order]);
        return ($query)? true : false;
	}

	/**
		get all speakers functions
	**/
	public function all_speakers_limit()
	{
		$query = $this->execute("SELECT * FROM `speakers` ORDER BY `speaker_order` ASC LIMIT 4", []);
        return $this->f_all();
	}

	public function all_speakers()
	{
		$query = $this->execute("SELECT * FROM `speakers` ORDER BY `speaker_order` ASC", []);
        return $this->f_all();
	}
	/**
		view speaker
	**/
	public function view_speaker($speaker_id)
	{
		$this->Validate($speaker_id);
		$query = $this->execute("SELECT * FROM `speakers` WHERE `speaker_id`=?", [$speaker_id]);
        return $this->f_one();
	}
	/**
		delete speaker
	**/
	public function delete_speaker($speaker_id)
	{
		$query = $this->execute("DELETE FROM `speakers` WHERE `speaker_id`=?", [$speaker_id]);
        return ($query)? true : false;
	}
}
?>