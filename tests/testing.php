<?php
use PHPUnit\Framework\TestCase;
use \App\Models\Users;
class SampleTest extends TestCase 
{
	protected $user;
	public function setUp(){
		$this->user = new \App\Models\Users;
	}
	public function testgettingAndSettingName(){
		$this->user->setFirstName('suyog');
		$this->assertEquals($this->user->getFirstName(), 'suyog');
	}

	public function testgetSetFullName(){
		$user->setFullName('suyog', 'dahal');
		$this->assertEquals($user->getFullName(), 'suyog dahal');
	}

	public function testtrim(){
		$user->setFirstName('    suyog');
		$this->assertEquals($user->getFirstName(), 'suyog'); 	
	}

	public function testEmail(){
		$user->setEmail('suyog@gmail.com');
		$this->assertEquals($user->getEmail(), 'suyog@gmail.com');
	}

	public function testEmailVar(){
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