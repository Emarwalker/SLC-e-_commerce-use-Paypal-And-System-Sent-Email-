<?php

/**
 * 
 */
class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("localhost", "root", "123456789", "slc_shop");
		return $this->con;
	}
}

?>