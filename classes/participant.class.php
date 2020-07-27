<?php 
/**
 * 
 */
class participant extends db
{
	/**
		ADD participant functions
	**/
	public function add_participant($part_fullname,$institution,$paper_title,$author,$file_url,$abstract, $pages)
	{
		$query = $this->execute("INSERT INTO `participant`(`p_fullname`, `p_insitution`, `paper_title`, `author`, `file_url`, `abstract`, `pages`) VALUES (?,?,?,?,?)", [$part_fullname,$institution,$paper_title,$author,$file_url,$abstract, $pages]);
        return $this->$this->f_all();
	}

	/**
		get all participant functions
	**/
	public function all_participants()
	{
		$query = $this->execute("SELECT * FROM `participant` ORDER BY `participant_id` DESC", []);
        return $this->$this->f_all();
	}
	/**
		view participant
	**/
	public function view_participant($participant_id)
	{
		$query = $this->execute("SELECT * FROM `participant` WHERE `participant_id`=?", [$participant_id]);
        return $this->$this->f_one();
	}
	/**
		delete participant
	**/
	public function delete_participant($participant_id)
	{
		$query = $this->execute("DELETE FROM `participant` WHERE `participant_id`=?", [$participant_id]);
        return $this->$this->f_one();
	}
}
?>