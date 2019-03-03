<?php 
require_once('class-db.php');
if (!class_exists('INSERT')){
	class INSERT{
		public function post($postdata){
			global $db;
		
			$query = "
						INSERT INTO movies(movieName, movieDescription, movieGenre, trailer)

						VALUES ('$postdata[movieName]', '$postdata[movieDescription]', '$postdata[movieGenre]', '$postdata[trailer]')
					";

			return $db->insert($query);
		}

		public function like($movieID){
			global $db;

			$query = "
						UPDATE movies SET likes = likes + 1 WHERE moveID = '$movieID'
					";

			return $db->insert($query);

		}
	}
}

$insert = new INSERT;

?>