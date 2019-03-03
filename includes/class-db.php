<?php 
if (!class_exists('DB')) {
	class DB{
		public function __construct(){
			$mysqli = new mysqli('localhost', 'root', '', 'login');

			if ($mysqli->connect_errno) {
				printf("Connect failed %s\n", $mysqli->connect_error);
				exit();
			}

			$this->connection = $mysqli;
		}

		public function insert($query){
			$mysqli = $this->connection;
			$result	= $mysqli->query($query);

			return $result;
		}

		public function select($query){
			

			$result = $this->connection->query($query);

			while ($obj = $result->fetch_object()) {
				$results[] = $obj;
			}

			return $results;
		}

		public function selectTopThree($query){
			
			$result = $this->connection->query($query);

			for ($i = 0; $i <3; $i++) {
				$obj = $result->fetch_object();
				$results[] = $obj;
			}

			return $results;
		}
	}
}

$db = new DB;
?>