<?php 

	namespace Woh\category;
	include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');
	use Woh\DataBase\Db;
	use Woh\utility\Utility;

	class Category{

		public $conn = null;	
		public function __construct(){
			$this->conn = Db::connect();
		}

		public function addcategory($data){
			$sql = "INSERT INTO `categories` (name) VALUES (:name)";
			$statement = $this->conn->prepare($sql);
			$statement->bindValue(':name', $data['name']);
			$result = $statement->execute();
        	return $result;
		}

		public function fetchallcategory(){
			$sql = "SELECT * FROM `categories`";
			$statement = $this->conn->prepare($sql);
			$result = $statement->execute();
        	$categories = $statement->fetchAll();
        	return $categories;
        	/*return $result;*/
		}

		public function deletecategory($id){
			$sql = "DELETE FROM `categories` WHERE id = :id";
			$statement = $this->conn->prepare($sql);
			$statement->bindValue(':id',$id);
			$result = $statement->execute();
			// var_dump($result);
        	return $result;
		}

		public function fetchacategory($id){
			$sql = "SELECT * FROM `categories` WHERE id = :id";
			$statement = $this->conn->prepare($sql);
			$statement->bindValue(':id',$id);
			$result = $statement->execute();
        	$singlecate = $statement->fetch();
        	/*var_dump($product);*/
        	return $singlecate;
		}

		public function updatecategory($data){
			$sql = "UPDATE categories SET name = :name WHERE id = :id";
			$statement = $this->conn->prepare($sql);
			$statement->bindValue(':name', $data['name']);
			$statement->bindValue(':id', $data['id']);	
			$result = $statement->execute();
        	return $result;
		}


	}