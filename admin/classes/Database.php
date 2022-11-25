<?php

class Database
{
	
	private $con;
	public function connect(){
		$this->con = new Mysqli("us-cdbr-east-06.cleardb.net", "b6f0ded1d0cab1", "4491d803", "heroku_93afb0207f5c90b");
		return $this->con;
	}
}

?>
