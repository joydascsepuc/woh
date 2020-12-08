<?php 

	namespace Woh\banners;
	include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');
	use Woh\DataBase\Db;
	use Woh\utility\Utility;

	class Banner{

		public $conn = null;	
		public function __construct(){
			$this->conn = Db::connect();
		}

		public function addbanner($data){

			$file_name = "IMG_".time()."_".$_FILES['picture']['name'];
		    $target = $_FILES["picture"]["tmp_name"];
		    $destination = Utility::BannersFolder.$file_name;

			$isFileMoved  = move_uploaded_file($target, $destination);

			if($isFileMoved){
			     $_picture = $file_name;
			}
			else{

			    $_picture = 'noimage.png';
			}


			$sql = "INSERT INTO `banners` (title, comment, img, alt) VALUES (:title, :comment, :img, :alt)";
			$statement = $this->conn->prepare($sql);
			$statement->bindValue(':title', $data['title']);
			$statement->bindValue(':comment', $data['comment']);
			$statement->bindValue(':img', $_picture);
			$statement->bindValue(':alt', $data['alt']);
			$result = $statement->execute();
        	return $result;
		}

		public function fetchallbanners(){
			$sql = "SELECT * FROM `banners`";
			$statement = $this->conn->prepare($sql);
			$result = $statement->execute();
        	$banners = $statement->fetchAll();
        	return $banners;
		}

		public function deletebanner($id){
			$sql = "DELETE FROM `banners` WHERE id = :id";
			$statement = $this->conn->prepare($sql);
			$statement->bindValue(':id',$id);
			$result = $statement->execute();
        	return $result;
		}

		public function fetchabanner($id){
			$sql = "SELECT * FROM `banners` WHERE id = :id";
			$statement = $this->conn->prepare($sql);
			$statement->bindValue(':id',$id);
			$result = $statement->execute();
        	$singlebanner = $statement->fetch();
        	return $singlebanner;
		}

		public function updatebanner($data){
			$filename = $_FILES['picture']['name'];
			if($filename === ""){
				$_picture = $data['oldpic'];
				// var_dump($file_name);
			}else{
				$file_name = "IMG_".time()."_".$_FILES['picture']['name'];
			    $target = $_FILES["picture"]["tmp_name"];
			    $destination = Utility::BannersFolder.$file_name;		    

				$isFileMoved  = move_uploaded_file($target, $destination);

				if($isFileMoved){
				     $_picture = $file_name;
				}
				else{

				    $_picture = 'noimage.png';
				}
			}

			$sql = "UPDATE banners SET title = :title, comment = :comment, img = :img, alt = :alt WHERE id = :id";
			$statement = $this->conn->prepare($sql);
			$statement->bindValue(':title', $data['title']);
			$statement->bindValue(':comment', $data['comment']);
			$statement->bindValue(':img', $_picture);
			$statement->bindValue(':alt', $data['alt']);
			$statement->bindValue(':id', $data['id']);
			$result = $statement->execute();
        	return $result;
		}


	}