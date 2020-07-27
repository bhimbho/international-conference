<?php  
/**
 * 
 */
class conference extends db
{
	/**
		ADD conference functions
	**/
	public function add_conference($theme,$sub_theme,$venue,$email,$about,$date)
	{
		$query = $this->execute("INSERT INTO `conference`(`theme`, `sub_theme`, `venue`, `email`, `about`, `date`) VALUES (?,?,?,?,?,?)", [$theme,$sub_theme,$venue,$email,$about,$date]);
        return ($query)? true : false;
	}

	/**
		get all conference functions
	**/
	public function all_conference()
	{
		$query = $this->execute("SELECT * FROM `conference` ORDER BY `conference_id` DESC", []);
        return $this->f_all();
	}
	/**
		view conference
	**/
	public function view_conference($conference_id)
	{
		$query = $this->execute("SELECT * FROM `conference` WHERE `conference_id`=?", [$conference_id]);
        return $this->f_one();
	}
	/**
		delete conference
	**/
	public function delete_conference($conference_id)
	{
		$query = $this->execute("DELETE FROM `conference` WHERE `conference_id`=?", [$conference_id]);
        return ($query)? true : false;
	}


	//--------------------- conference dates -------------------
	public function add_conference_date($event, $date)
	{
		$query = $this->execute("INSERT INTO `conference_date`(`event`, `date`) VALUES (?,?)", [$event,$date]);
        return ($query)? true : false;
	}

	/**
		view all conference date functions
	**/
	public function all_conference_date($arrangement)
	{
		$query = $this->execute("SELECT * FROM `conference_date` ORDER BY `conference_date_id` ".$arrangement, []);
        return $this->f_all();
	}
	/**
		view conference date
	**/
	public function view_conference_date($conference_date_id)
	{
		$query = $this->execute("SELECT * FROM `conference_date` WHERE `conference_date_id`=?", [$conference_date_id]);
        return $this->f_one();
	}
	/**
		delete conference date
	**/
	public function delete_conference_date($conference_date_id)
	{
		$query = $this->execute("DELETE FROM `conference_date` WHERE `conference_date_id`=?", [$conference_date_id]);
        return ($query)? true : false;
	}
}
?>