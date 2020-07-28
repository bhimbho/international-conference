<?php 
/**
 * 
 */
class sponsor extends db
{
	/**
		ADD sponsor functions
	**/
	public function add_sponsor($file)
	{
		$query = $this->execute("INSERT INTO `sponsors`(`sponsor_img`) VALUES (?)", [$file]);
        return ($query)? true : false;
	}

	/**
		get all sponsor functions
	**/
	public function all_sponsor()
	{
		$query = $this->execute("SELECT * FROM `sponsors` ORDER BY `sponsor_id` DESC", []);
        return $this->f_all();
	}
	/**
		view speaker
	**/
	public function view_sponsor($sponsor_id)
	{
		$query = $this->execute("SELECT * FROM `sponsors` WHERE `sponsor_id`=?", [$sponsor_id]);
        return $this->$this->f_one();
	}
	/**
		delete speaker
	**/
	public function delete_sponsor($sponsor_id)
	{
		$query = $this->execute("DELETE FROM `sponsors` WHERE `sponsor_id`=?", [$sponsor_id]);
        return ($query)? true : false;
	}
}
?>