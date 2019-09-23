<?php
use PHPUnit\Framework\TestCase;
class DivisionTest extends TestCase{
	/** @test */
	public function check_the_division_of_the_two_numbers(){
		$division = new \App\calculator\Division;
		$division->setOperands([100,2,2]);
		$this->assertEquals(25, $division->calculate());
	}
}