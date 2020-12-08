<?php 

	namespace Woh\employee;
	include_once ($_SERVER['DOCUMENT_ROOT'].'/Woh/vendor/autoload.php');
	use Woh\DataBase\Db;
	use Woh\utility\Utility;

	class Employee{
		public $conn = null;	
		public function __construct(){
			$this->conn = Db::connect();
	}


	public function fetchallemployee(){
		$sql = "SELECT * FROM `employee`";
		$statement = $this->conn->prepare($sql);
		$result = $statement->execute();
    	$employees = $statement->fetchAll();
    	return $employees;
	}

	public function addemployee($data){

			$a = $_FILES['picture']['name'];
			$b = $_FILES['idcardpicture']['name'];

			if($a === ""){
				$profilepicname = "noimage.png";	
			}else{
				$profilepicname = "IMG_".time()."_".$_FILES['picture']['name'];
			}

			if($b === ""){
				$idcardpicname = "noimage.png";
			}else{
				$idcardpicname = "IMG_".time()."_".$_FILES['idcardpicture']['name'];
			}


		    $targetofDP = $_FILES["picture"]["tmp_name"];
		    $targetofID = $_FILES["idcardpicture"]["tmp_name"];

		    $destinationofDP = Utility::EmployeeDP.$profilepicname;
		    $destinationofID = Utility::EmployeeID.$idcardpicname;
		    

			$isDPMoved  = move_uploaded_file($targetofDP, $destinationofDP);
			$isIDMoved  = move_uploaded_file($targetofID, $destinationofID);		
			if($isDPMoved){
			     $_DPNAME = $profilepicname;
			}
			else{

			    $_DPNAME = 'noimage.png';
			}

			
			if($isIDMoved){
			     $_IDNAME = $idcardpicname;
			}
			else{

			    $_IDNAME = 'noimage.png';
			}

			$sql = "INSERT INTO `employee` (name, email, mobile, emppicture, empidcardpicture, position, gender, is_active, salary, address)
					VALUES (:name, :email, :mobile, :emppicture, :empidcardpicture, :position, :gender, :is_active, :salary, :address)";

			$statement = $this->conn->prepare($sql);

	        $statement->bindValue(':name', $data['name']);
	        $statement->bindValue(':email', $data['email']);
	        $statement->bindValue(':mobile', $data['mobile']);
	        $statement->bindValue(':emppicture', $_DPNAME);
	        $statement->bindValue(':empidcardpicture', $_IDNAME);
	        $statement->bindValue(':position', $data['position']);
	        $statement->bindValue(':gender', $data['gender']);
	        $statement->bindValue(':is_active', $data['isactive']);
	        $statement->bindValue(':salary', $data['salary']);
	        $statement->bindValue(':address', $data['address']);

	        $result = $statement->execute();
        	return $result; 
		
	}

	public function fetchsingleemployee($id){
			$sql = "SELECT * FROM `employee` WHERE id = :id";
			$statement = $this->conn->prepare($sql);
			$statement->bindValue(':id',$id);
			$result = $statement->execute();
        	$employee = $statement->fetch();
			return $employee;
	}

	public function updateemployee($data){
			$a = $_FILES['picture']['name'];
			$b = $_FILES['idcardpicture']['name'];


			if($a === ""){
				$_DPNAME = $data['oldpic'];

			}else{
				$profilepicname = "IMG_".time()."_".$_FILES['picture']['name'];
				$targetofDP = $_FILES["picture"]["tmp_name"];
				$destinationofDP = Utility::EmployeeDP.$profilepicname;
				$isDPMoved  = move_uploaded_file($targetofDP, $destinationofDP);
				if($isDPMoved){
			     $_DPNAME = $profilepicname;
				}
				else{

				    $_DPNAME = 'noimage.png';
				}
			}

			if($b === ""){
				$_IDNAME = $data['oldidpic'];
			}else{
				$idcardpicname = "IMG_".time()."_".$_FILES['idcardpicture']['name'];
				$targetofID = $_FILES["idcardpicture"]["tmp_name"];
				$destinationofID = Utility::EmployeeID.$idcardpicname;
				$isIDMoved  = move_uploaded_file($targetofID, $destinationofID);
				if($isIDMoved){
			     $_IDNAME = $idcardpicname;
				}
				else{

				    $_IDNAME = 'noimage.png';
				}
			}
	    

			$sql = "UPDATE employee SET name = :name, email = :email, mobile = :mobile, emppicture = :emppicture, empidcardpicture = :empidcardpicture, position = :position, gender = :gender, is_active = :is_active, salary = :salary, address = :address WHERE id = :id";

			$statement = $this->conn->prepare($sql);

	        $statement->bindValue(':name', $data['name']);
	        $statement->bindValue(':email', $data['email']);
	        $statement->bindValue(':mobile', $data['mobile']);
	        $statement->bindValue(':emppicture', $_DPNAME);
	        $statement->bindValue(':empidcardpicture', $_IDNAME);
	        $statement->bindValue(':position', $data['position']);
	        $statement->bindValue(':gender', $data['gender']);
	        $statement->bindValue(':is_active', $data['isactive']);
	        $statement->bindValue(':salary', $data['salary']);
	        $statement->bindValue(':address', $data['address']);
	        $statement->bindValue(':id', $data['id']);

	        $result = $statement->execute();
        	return $result; 
	}


	public function deleteemployee($id){
			$sql = "DELETE FROM `employee` WHERE id = :id";
			$statement = $this->conn->prepare($sql);
			$statement->bindValue(':id',$id);
			$result = $statement->execute();
        	return $result;
		}














}