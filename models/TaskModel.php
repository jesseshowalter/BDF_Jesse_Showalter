<?php  

class TaskModel{

	private $db;

	public function __construct($dbhost, $dbuser, $dbpass, $dbname) {
		$this->db = new mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	} // __construct


	/**
	* @return array Records from the databse, as an array of arrays
	*/

	public function getTasks(){


		// 2. Perform databse query
		$honeydo = "SELECT * ";
		$honeydo .= "FROM taskInfo ";
		//$honeydo .= "WHERE taskGroup_id = 1 ";


		$result = mysqli_query($connection, $honeydo);
		// test if there was a query error
		if(!$result){
			die("Database query failed.");
		}
	 
		
		// 3. Use return data (if any)
		while($taskList = mysqli_fetch_assoc($result)) {
		return $rows;
			// output data from each row
		} // if execute

		return array();

	} // getTasks

}