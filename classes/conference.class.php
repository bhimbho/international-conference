<?php  
/**
 * 
 */
class conference extends db
{
	/**
		ADD conference functions
	**/
	public function add_conference($theme,$sub_theme,$email,$date)
	{
		$query = $this->execute("INSERT INTO `conference`(`theme`, `sub_theme`, `email`, `date`) VALUES (?,?,?,?)", [$theme,$sub_theme,$email,$date]);
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
	public function conference_slider()
	{
		$query = $this->execute("SELECT * FROM `conference` ORDER BY `conference_id` DESC", []);
        return $this->f_one();
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
	public function add_conference_date($event, $date,$desc)
	{
		$query = $this->execute("INSERT INTO `conference_date`(`event`, `date`,`description`) VALUES (?,?,?)", [$event,$date,$desc]);
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

	//--------------------- upcoming conference -------------------
	public function update_up_conf($event, $day,$month,$year,$location,$picture,$conf_id=1)
	{
		$query = $this->execute("UPDATE up_conference SET `up_theme`=?,`day`=?,`month`=?,`year`=?,`location`=?,`up_picture`=? WHERE up_conf_id=?", [$event, $day,$month,$year,$location,$picture, $conf_id]);
        return ($query)? true : false;
	}

	/**
		view conference date
	**/
	public function view_up_conference($up_conf_id=1)
	{
		$query = $this->execute("SELECT * FROM `up_conference` WHERE `up_conf_id`=?", [$up_conf_id]);
        return $this->f_one();
	}
	/**
		delete conference date
	**/
	public function delete_up_conference($up_conf_id)
	{
		$query = $this->execute("DELETE FROM `up_conference` WHERE `up_conf_id`=?", [$up_conf_id]);
        return ($query)? true : false;
	}
}
?>