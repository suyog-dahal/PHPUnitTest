<?php

namespace App\Calculator;

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
		foreach ($value as $value1) {
			$sum += $value1;
		}
		return $sum;
	}
}