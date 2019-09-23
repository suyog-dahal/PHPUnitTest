<?php
namespace App\Calculator;
use \App\calculator\Exception\NoOperandsException;
class Addition{
	protected $value = [];
	public function setOperands($value = []){
		$this->value = $value; 
	}
	public function getOperands(){
		return $this->value;
	}
	public function calculate($value = []){
		$sum = 0;
		if(count($this->value) === 0){
			throw new NoOperandsException;			
		}
		foreach ($value as $value1) {
			$sum += $value1;
		}
		return $sum;
	}
}