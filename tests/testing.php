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
	/**
	 * @test
	**/

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
	// testing validation Requests
	public function test_validating_name(){
		$user = new \App\Models\users;
		$this->post('/{route}', [$user->First_Name => ''])->assertSessionHasErrors('name');
	}
	/**
	 * @test
	 * @dataProvider form_inputs_validation
	 **/
	public function form_validation($form_key, $form_value){
		$user = new \App\Models\users;
		$this->post('/{{route}}', [$form_key => $form_value])->assertSessionHasErrors($form_key);
	}

	/** 
	 *	@test 
	**/
	public function form_inputs_validation(){
		$user = new \App\Models\users;
		return [
			[$user->First_Name, ' '],
			[$user->Last_Name, ' ']
		]
	}


}