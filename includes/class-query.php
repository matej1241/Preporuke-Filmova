<?php 
require_once('class-db.php');

	if(!class_exists('QUERY')){
		class QUERY{
			public function all_posts(){
				global $db;

				$query = "
						SELECT * FROM movies
					";

				return $db->select($query);
			}

			public function post($postid){
				global $db;
				$query = "
						SELECT * FROM movies
						WHERE moveID = '$postid'
					";

				return $db->select($query);
			}

			public function mostLikedPosts()
			{
				global $db;
				$query = " SELECT * FROM `movies` ORDER BY `movies`.`likes` DESC";

				return $db->selectTopThree($query);
			}
		}
	}

$query = new QUERY;
 ?>