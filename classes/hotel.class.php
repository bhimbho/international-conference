<?php 
/**
 * 
 */
class hotel extends db
{
	/**
		ADD hotels functions
	**/
	public function add_hotel($name,$location,$rates,$room,$contact)
	{
		$query = $this->execute("INSERT INTO `hotels`(`hotel_name`, `location`, `rates`, `rooms`, `contact`) VALUES (?,?,?,?,?)", [$name,$location,$rates,$room,$contact]);
        return ($query)? true : false;
	}

	/**
		get all hotels functions
	**/
	public function all_hotels()
	{
		$query = $this->execute("SELECT * FROM `hotels` ORDER BY `hotel_id` DESC", []);
        return $this->f_all();
	}
	/**
		view speaker
	**/
	public function view_hotels($hotel_id)
	{
		$query = $this->execute("SELECT * FROM `hotels` WHERE `hotel_id`=?", [$hotel_id]);
        return $this->$this->f_one();
	}
	/**
		delete speaker
	**/
	public function delete_hotel($hotel_id)
	{
		$query = $this->execute("DELETE FROM `hotels` WHERE `hotel_id`=?", [$hotel_id]);
        return ($query)? true : false;
	}
}
?>