<?php 
	namespace Woh\front;
	include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');
	use Woh\DataBase\Db;

	class Front{ 

		public $conn = null;
		public function __construct(){
			$this->conn = Db::connect();
		}

		public function getallbanners(){
			$sql = "SELECT * FROM `banners`";
			$statement = $this->conn->prepare($sql);
			$result = $statement->execute();
        	$banners = $statement->fetchAll();
        	return $banners;
		}

		public function getallwireheadphones(){
			$type = "WireHeadphone";
			$sql = "SELECT * FROM `products` WHERE category = :type";
			$statement = $this->conn->prepare($sql);
			$statement->bindValue(':type', $type);
			$result = $statement->execute();
        	$wireheadphones = $statement->fetchAll();
        	return $wireheadphones;
		} 

		public function getallwireless(){
			$type = "WirelessHeadphone";
			$sql = "SELECT * FROM `products` WHERE  category = :type";
			$statement = $this->conn->prepare($sql);
			$statement->bindValue(':type', $type);
			$result = $statement->execute();
        	$wirelessheadphones = $statement->fetchAll();
        	return $wirelessheadphones;
		}

		

		public function getallcables(){
			$type = "Cable";
			$sql = "SELECT * FROM `products` WHERE  category = :type";
			$statement = $this->conn->prepare($sql);
			$statement->bindValue(':type', $type);
			$result = $statement->execute();
        	$cables = $statement->fetchAll();
        	return $cables;
		}

		public function getproductdetails($id){
			$sql = "SELECT * FROM `products` WHERE id = :id";
			$statement = $this->conn->prepare($sql);
			$statement->bindValue(':id', $id);
			$result = $statement->execute();
        	$data = $statement->fetch();
        	return $data;
		}

		public function addtocart($data){
			$sql = "INSERT INTO `cart` (product_name, product_id, product_price, product_category, img, product_discount, customer_name, customer_username, customer_mobile_no)
					VALUES (:product_name, :product_id, :product_price, :product_category, :img, :product_discount, :customer_name, :customer_username, :customer_mobile_no)";

			$statement = $this->conn->prepare($sql);

	        $statement->bindValue(':product_name', $data['product_name']);
	        $statement->bindValue(':product_id', $data['product_id']);
	        $statement->bindValue(':product_price', $data['product_price']);
	        $statement->bindValue(':product_category', $data['product_category']);
	        $statement->bindValue(':img', $data['img']);
	        $statement->bindValue(':product_discount', $data['product_discount']);
	        $statement->bindValue(':customer_name', $data['customer_name']);
	        $statement->bindValue(':customer_username', $data['customer_username']);
	        $statement->bindValue(':customer_mobile_no', $data['customer_mobile_no']);

	        $result = $statement->execute();
        	return $result;  
		}

		public function getcartitems(){
			$sql = "SELECT * FROM `cart` WHERE customer_username = :username";
			$statement = $this->conn->prepare($sql);
			$statement->bindValue(':username', $_SESSION['username']);
			$result = $statement->execute();
        	$data = $statement->fetchAll();
        	return $data;
		}

		public function deletecartitem($id){
			$sql = "DELETE FROM `cart` WHERE id = :id";
			$statement = $this->conn->prepare($sql);
			$statement->bindValue(':id',$id);
			$result = $statement->execute();
        	return $result;
		}

		public function getallsummary(){
		/*	$sql = "SELECT COUNT(*) FROM products";
			$statement = $this->conn->prepare($sql);
			$result = $statement->execute();
			$data['products'] = $statement->fetchColumn();

			$sql = "SELECT COUNT(*) FROM cart";
			$statement = $this->conn->prepare($sql);
			$result = $statement->execute();
			$data['carts'] = $statement->fetchColumn();*/

			/*$sql = "SELECT COUNT(*) FROM products AS products;
					SELECT * FROM products AS activeproducts;
					SELECT COUNT(*) FROM orders AS pending;
					SELECT COUNT(*) FROM cart AS cart;
					SELECT COUNT(*) FROM orders AS orders;
					SELECT COUNT(*) FROM users AS users";

			$statement = $this->conn->prepare($sql);
			$result = $statement->execute();
			$data['products'] = $statement->fetchColumn(0);
			$data['activeproducts'] = $statement->fetchColumn(1);
			$data['pending'] = $statement->fetchColumn(2);
			$data['carts'] = $statement->fetchColumn(3);
			$data['orders'] = $statement->fetchColumn(4);
			$data['users'] = $statement->fetchColumn(5);*/

			$sql = "SELECT COUNT(*) FROM products";
			$statement = $this->conn->prepare($sql);
			$result = $statement->execute();
			$data['products'] = $statement->fetchColumn();

			$sql = "SELECT * FROM products";
			$statement = $this->conn->prepare($sql);
			$result = $statement->execute();
			$data['activeproducts'] = $statement->fetchColumn();

			$sql = "SELECT COUNT(*) FROM orders";
			$statement = $this->conn->prepare($sql);
			$result = $statement->execute();
			$data['pending'] = $statement->fetchColumn();

			$sql = "SELECT COUNT(*) FROM cart";
			$statement = $this->conn->prepare($sql);
			$result = $statement->execute();
			$data['carts'] = $statement->fetchColumn();

			$sql = "SELECT COUNT(*) FROM orders";
			$statement = $this->conn->prepare($sql);
			$result = $statement->execute();
			$data['orders'] = $statement->fetchColumn();

			$sql = "SELECT COUNT(*) FROM users";
			$statement = $this->conn->prepare($sql);
			$result = $statement->execute();
			$data['users'] = $statement->fetchColumn();

			return $data;
		}









	}
