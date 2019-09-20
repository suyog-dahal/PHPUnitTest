<?php
use PHPUnit\Framework\TestCase;

class AdditionTest extends Testcase
{	
	/** @test */
	public function addition_testing_method(){
		$addition = new \App\calculator\Addition;
		$addition->setOperands([4,5,6]);
		$this->assertEquals([4,5,6], $addition->getOperands());
		$this->assertEquals(1080, $addition->calculate([1000, 80]));
	}
}