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
	  /** @test */
	  public function collection_is_the_instance_of_iterator_aggregator(){
	  	$collection = new \App\Support\Collection();
	  	$this->assertInstanceOf(IteratorAggregate::class, $collection);
	  }
	  /** @test */
	  public function collection_can_iterate_with_iterator_aggregator(){
	  	$collection = new \App\Support\Collection([
	  		'one', 'two', 'three'
	  	]);

	  	$items = [];
	  	foreach($collection as $item){
	  		$items[] = $item;
	  	}
	  	$this->assertEquals($items, $collection->get());
	  }

	  /** @test */
	  public function collection_can_be_merged(){
	  	$collection1 = new \App\Support\Collection([
	  		'one', 'two'
	  	]);
	  	$collection2 = new \App\Support\Collection([
	  		'three', 'four'
	  	]);
	  	$newCollection = $collection1->merge($collection2);
	  	$this->assertEquals($newCollection, $collection1->get());
	  }
}