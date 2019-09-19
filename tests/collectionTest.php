<?php
use PHPUnit\Framework\TestCase;

class collectionTest extends TestCase
{
	/** @test */
	 public function empty_instantiated_collection_returns_no_item(){
	 	$collection = new \App\Support\Collection;

	 	$this->assertEmpty($collection->get());
	 }
	 /** @test */
	 public function count_no_of_items_in_collection(){
	 	$collection = new \App\Support\Collection([
	 		'one', 'two', 'three'
	 	]);
	 	$this->assertEquals(3, $collection->count());
	 }
	  /** @test */
	  public function items_returned_match_items_passed(){
	  	$collection = new \App\Support\Collection([
	 		'one'
	 	]);
	 	$this->assertEquals($collection->get()[0], 'one');
	  }

}