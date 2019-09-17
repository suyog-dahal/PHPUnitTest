<?php
use PHPUnit\Framework\TestCase;
use \App\Models\Users;
class SampleTest extends TestCase 
{
	public function testgettingAndSettingName(){
		$user = new \App\Models\Users;
		$user->setFirstName('suyog');
		$this->assertEquals($user->getFirstName(), 'suyog');
	}

	public function testgetSetFullName(){
		$user = new \App\Models\Users;
		$user->setFullName('suyog', 'dahal');
		$this->assertEquals($user->getFullName(), 'suyog dahal');
	}

	public function testtrim(){
		$user = new \App\Models\Users;
		$user->setFirstName('    suyog');
		$this->assertEquals($user->getFirstName(), 'suyog'); 	
	}

	public function testEmail(){
		$user = new \App\Models\Users;
		$user->setEmail('suyog@gmail.com');
		$this->assertEquals($user->getEmail(), 'suyog@gmail.com');
	}

	public function testEmailVar(){
		$user = new \App\Models\Users;
		$user->setFirstName('suyog');
		$user->setLastName('dahal');
		$user->setEmail('suyo@gmail.com');
	
		//check whether the array has keys
		$EmailVariables = $user->getEmailVariable();
		$this->assertArrayHasKey('full_name', $EmailVariables);
		$this->assertArrayHasKey('email', $EmailVariables);

		$this->assertEquals($EmailVariables['full_name'], 'suyog dahal');
		$this->assertEquals($EmailVariables['email'], 'suyo@gmail.com');
	}
}