<?php
namespace App\Models;

class Users{
	public $Last_Name;
	public function setFirstName($FirstName){
		$this->First_Name = trim($FirstName);
	}

	public function setLastname($LastName){
		$this->Last_Name = trim($LastName);
	}

	public function getFirstName(){
		return $this->First_Name;
	}

	public function setFullName($FirstName, $LastName){
		$this->First_Name = $FirstName;
		$this->Last_Name = $LastName;
	}

	public function getFullName(){
		return $this->First_Name.' '.$this->Last_Name;
	}

	public function setEmail($E_mail){
		$this->Email = $E_mail;
	}
	public function getEmail(){
		return $this->Email;
	}

	public function getEmailVariable(){
		return [
			'full_name' => $this->getFullName(),
			'email' => $this->getEmail() 
		];
	}
}