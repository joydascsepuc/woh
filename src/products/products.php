<?php 

	namespace Woh\products;
	include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');
	use Woh\DataBase\Db;
	use Woh\utility\Utility;

	class Products{ 

		public $conn = null;
		
		public function __construct(){
			$this->conn = Db::connect();
		}

		public function addproduct($data){

			$file_name = "IMG_".time()."_".$_FILES['picture']['name'];
		    $target = $_FILES["picture"]["tmp_name"];

		    $_category = $data['category'];

		    if($_category === 'WirelessHeadphone'){
		    	$destination = Utility::WirelessFolder.$file_name;
		    }elseif($_category === 'WireHeadphone'){
		    	$destination = Utility::WireFolder.$file_name;
		    }elseif($_category === 'Cable'){
		    	$destination = Utility::CableFolder.$file_name;
		    }

			$isFileMoved  = move_uploaded_file($target, $destination);

			if($isFileMoved){
			     $_picture = $file_name;
			}
			else{

			    $_picture = 'noimage.png';
			}

			$sql = "INSERT INTO `products` (title, product_id, category, description, comment, img, price, discount, supplier, is_active)
					VALUES (:title, :product_id, :category, :description, :comment, :img, :price, :discount, :supplier, :is_active)";

			$statement = $this->conn->prepare($sql);

	        $statement->bindValue(':title', $data['title']);
	        $statement->bindValue(':product_id', $data['productid']);
	        $statement->bindValue(':category', $data['category']);
	        $statement->bindValue(':description', $data['description']);
	        $statement->bindValue(':comment', $data['comment']);
	        $statement->bindValue(':img', $_picture);
	        $statement->bindValue(':price', $data['price']);
	        $statement->bindValue(':discount', $data['discount']);
	        $statement->bindValue(':supplier', $data['supplier']);
	        $statement->bindValue(':is_active', $data['isactive']);

	        $result = $statement->execute();
        	return $result;
			
		}

		public function fetchallproducts(){
			$sql = "SELECT * FROM `products` ";
			$statement = $this->conn->prepare($sql);
			$result = $statement->execute();
        	$products = $statement->fetchAll();
        	return $products;
        	/*return $result;*/

		}

		
		public function fetchsingleproduct($id){				
			$sql = "SELECT * FROM `products` WHERE id = :id";
			$statement = $this->conn->prepare($sql);
			$statement->bindValue(':id',$id);
			$result = $statement->execute();
        	$product = $statement->fetch();
        	/*var_dump($product);*/
        	return $product;
		}

		public function fetchpendingd(){
			$sql = "SELECT * FROM `orders`";
			$statement = $this->conn->prepare($sql);
			$result = $statement->execute();
        	$productsd = $statement->fetchAll();
        	return $productsd;
		}

		public function deleteproduct($id){
			$sql = "DELETE FROM `products` WHERE id = :id";
			$statement = $this->conn->prepare($sql);
			$statement->bindValue(':id',$id);
			$result = $statement->execute();
			// var_dump($result);
        	return $result;
		}

		public function updateproduct($data){
			$filename = $_FILES['picture']['name'];
			if($filename === ""){
				$_picture = $data['imgname'];
				// var_dump($file_name);
			}else{
				$file_name = "IMG_".time()."_".$_FILES['picture']['name'];
			    $target = $_FILES["picture"]["tmp_name"];

			    $_category = $data['category'];

			    if($_category === 'Wireless-Headphone'){
			    	$destination = Utility::WirelessFolder.$file_name;
			    }elseif($_category === 'Wire-Headphone'){
			    	$destination = Utility::WireFolder.$file_name;
			    }else{
			    	$destination = Utility::CableFolder.$file_name;
			    }

				$isFileMoved  = move_uploaded_file($target, $destination);

				if($isFileMoved){
				     $_picture = $file_name;
				}
				else{

				    $_picture = 'noimage.png';
				}
			}
			

			$sql = "UPDATE products SET title = :title, product_id = :product_id, category = :category, description = :description, comment = :comment, img = :img, price = :price, discount = :discount, supplier = :supplier, is_active = :is_active WHERE id = :id";

			$statement = $this->conn->prepare($sql);

			$statement->bindValue(':id', $data['id']);
	        $statement->bindValue(':title', $data['title']);
	        $statement->bindValue(':product_id', $data['productid']);
	        $statement->bindValue(':category', $data['category']);
	        $statement->bindValue(':description', $data['description']);
	        $statement->bindValue(':comment', $data['comment']);
	        $statement->bindValue(':img', $_picture);
	        $statement->bindValue(':price', $data['price']);
	        $statement->bindValue(':discount', $data['discount']);
	        $statement->bindValue(':supplier', $data['supplier']);
	        $statement->bindValue(':is_active', $data['isactive']);
	        

	        $result = $statement->execute();
        	return $result;
		}


		public function fetchcartsdetails(){
			$sql = "SELECT * FROM `cart`";
			$statement = $this->conn->prepare($sql);
			$result = $statement->execute();
        	$productsd = $statement->fetchAll();
        	return $productsd;
		}







	}
	