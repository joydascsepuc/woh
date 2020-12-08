<?php 
	namespace Woh\UserControl;
	include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');
	use Woh\DataBase\Db;

	class UserControl{

		public $conn = null;

		public function __construct(){

			$this->conn = Db::connect();
		}

		public function registerUser($data){
			$sql = "INSERT INTO `users` (firstname, lastname, email, username, usertype, mobile, password)
					VALUES (:firstname, :lastname, :email, :username, :usertype, :mobile, :password)";

			$statement = $this->conn->prepare($sql);

	        $statement->bindValue(':firstname', $data['firstname']);
	        $statement->bindValue(':lastname', $data['lastname']);
	        $statement->bindValue(':email', $data['registeremail']);
	        $statement->bindValue(':username', $data['registerusername']);
	        $statement->bindValue(':usertype', $data['usertype']);
	        $statement->bindValue(':mobile', $data['mobile']);
	        $statement->bindValue(':password', $data['password']);

	        $result = $statement->execute();
        	return $result;
		}

		public function loginUser($data){

			$sql = "SELECT * FROM `users` WHERE username = :username AND password = :password";

			$statement = $this->conn->prepare($sql);

          	$statement->bindValue(':username',$data['signinusername']);
          	$statement->bindValue(':password',$data['signinpassword']);

          	$result = $statement->execute();
          	$details = $statement->fetch();

          	return $details;
		}

		public function fetchallusers(){
			$sql = "SELECT * FROM `users` ";
			$statement = $this->conn->prepare($sql);
			$result = $statement->execute();
        	$users = $statement->fetchAll();
        	return $users;
		}

		public function settings(){
			$username = $_SESSION['adminusername'];
			/*var_dump($username);*/
			$usertype = "admin";
			$sql = "SELECT * FROM `users` WHERE username = :username";
			$statement = $this->conn->prepare($sql);
			$statement->bindValue(':username',$username);
			$result = $statement->execute();
        	$user = $statement->fetch();
        	return $user;
        	// var_dump($user);
		}

		public function updateInformation($data){
			$username = $_SESSION['adminusername'];
			$sql = "UPDATE users SET firstname = :firstname, lastname = :lastname, email = :email, mobile = :mobile, password = :password WHERE username = :username";
			$statement = $this->conn->prepare($sql);
			$statement->bindValue(':firstname', $data['firstname']);
			$statement->bindValue(':lastname', $data['lastname']);	
			$statement->bindValue(':email', $data['email']);	
			$statement->bindValue(':mobile', $data['mobile']);	
			$statement->bindValue(':password', $data['password']);	
			$statement->bindValue(':username', $username);	
			$result = $statement->execute();
        	return $result;
		}





	}

?>