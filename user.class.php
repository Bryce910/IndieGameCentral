<?php

/* This will be the user class system we build for our members */

class User
{
	public $id;
	public $firstName;
	public $lastName;
	public $address;
	public $email;
	public $role;


	function __construct($id)
	{
		if($id == null)
		{
			// error
		}
		else
		{
			$stmt = $db->prepare("SELECT * FROM user WHERE id=:id");
			$stmt->execute(array(':id'=>$id));
			$user = $stmt->fetch(PDO::FETCH_OBJ);
			$this->firstName = $user[0]['firstName'];
			$this->lastName = $user[0]['lastName'];
			$this->address = $user[0]['address'];
			$this->email = $user[0]['email'];
			$this->type = $user[0]['role'];

		}
	}

}

?>
