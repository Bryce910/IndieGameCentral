<?php
/* This will be the user class system we build for our members */

class User
{

	public $id;
	public $firstName;
	public $lastName;
	public $address;
	public $email;
	public $password;
	public $role;
	public $banned;

	function __construct($id)
	{
		if($id == null)
		{
			// error
		}
		else
		{
			$user = "root";
			$pass = "";

			 global $db;
			 $db = new PDO("mysql:host=localhost;dbname=indiegamecentral;", $user, $pass);

			$stmt = $db->prepare("SELECT * FROM user WHERE id=:id");
			$stmt->execute(array(':id'=>$id));
			$user = $stmt->fetch(PDO::FETCH_OBJ);
			$this->firstName = $user->firstName;
			$this->lastName = $user->lastName;
			$this->address = $user->address;
			$this->email = $user->email;
			$this->password = $user->password;
			$this->type = $user->role;
			$this->banned =$user->banned;

		}
	}

}

?>
