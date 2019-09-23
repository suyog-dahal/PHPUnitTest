<?php

namespace App\Calculator;

class Division{
	protected $value = [];
	// public function __construct($value = []){
	// 	$this->value = $value;
	// }

	public function setOperands(array $value){
		$this->value = $value;
	}
	public function getOperands(){
		return $this->value;
	}

	public function calculate(){
		if(count($this->value) === 0 ){
			throw new NoOperandsException;
		}
		$result = 0;
		$count = 0;
		foreach ($this->value as $index => $value1) {
			if($index === 0){
				$result = $value1;
			}
			if($count >= 1){
				$result = $result / $value1;
			}
			$count += 1;
		}
		return $result;
	}
}