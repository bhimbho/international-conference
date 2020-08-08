<?php 
/**
 * 
 */
class ourteam extends db
{
	public function count_team(){ 
        $query = $this->execute("SELECT * FROM `our_team`", []);
        return $this->row_count();
    }
	/**
		ADD team functions
	**/
	public function add_team($name,$position,$order,$picture)
	{
		$query = $this->execute("INSERT INTO `our_team`(`team_name`, `team_pos`,`team_order`, `team_pic`) VALUES (?,?,?,?)", [$name,$position,$order,$picture]);
        return ($query)? true : false;
	}

	/**
		get all team functions
	**/
	public function all_team_limit()
	{
		$query = $this->execute("SELECT * FROM `our_team` ORDER BY `team_id` ASC LIMIT 3", []);
        return $this->f_all();
	}

	public function all_team()
	{
		$query = $this->execute("SELECT * FROM `our_team` ORDER BY `team_order` ASC", []);
        return $this->f_all();
	}
	
	/**
		delete our_team
	**/
	public function delete_team($team_id)
	{
		$query = $this->execute("DELETE FROM `our_team` WHERE `team_id`=?", [$team_id]);
        return ($query)? true : false;
	}
}
?>