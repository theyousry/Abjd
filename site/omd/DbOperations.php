<?php 

	class DbOperations{

		private $con; 

		function __construct(){

			require_once dirname(__FILE__).'/DbConnect.php';

			$db = new DbConnect();

			$this->con = $db->connect();

		}

		/*CRUD -> C -> CREATE */
       public function createUser($fullname,$username,$email,$pass,$repassword){
		   
		   if($this->isUserExist($username,$email)){
                return 0; 
            }else{
				$password=md5($pass);
		  
				$stmt = $this->con->prepare("INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`, `repassword`) VALUES (NULL,?,?,?,?,?);");
				$stmt->bind_param("sssss",$fullname,$username,$email,$password,$repassword);
				if($stmt->execute()){
					return true ; 
				}else{
					return false; 
				}
			}
	   }
	        public function userLogin($email, $pass){
			$password = md5($pass);
			$stmt = $this->con->prepare("SELECT id FROM users WHERE email = ? AND password = ?");
			$stmt->bind_param("ss",$email,$password);
			$stmt->execute();
			$stmt->store_result(); 
			return $stmt->num_rows > 0; 
		}
		   public function getUserByemail($email){
			$stmt = $this->con->prepare("SELECT * FROM users WHERE email = ?");
			$stmt->bind_param("s",$email);
			$stmt->execute();
			return $stmt->get_result()->fetch_assoc();
		}
			private function isUserExist($username, $email){
			$stmt = $this->con->prepare("SELECT id FROM users WHERE username = ? OR email = ?");
			$stmt->bind_param("ss", $username, $email);
			$stmt->execute(); 
			$stmt->store_result(); 
			return $stmt->num_rows > 0; 
		}
	   }
	  
