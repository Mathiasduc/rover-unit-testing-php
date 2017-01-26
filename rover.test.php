<?php
use PHPUnit\Framework\TestCase;

class testRover extends TestCase{

	public function testDefaultPosition(){
		$rover1= new Rover();
		$this->assertEquals(
			$rover1->getCoordinates(),
			array(
				"x"=>0,
				"y"=>0,
				"direction"=>"north"
				)
		);
	}

	public function testMoveForwardToNorth(){
		$rover2 = new Rover();
		$rover2->executeCommands(["f"]);
		$this->assertEquals(
			$rover2->getCoordinates(),
			array(
				"x"=>0,
				"y"=>1,
				"direction"=>"north"
				)
		);


	}
	public function testTurnToRight(){
		$rover3= new Rover();
		$rover3->executeCommands(["r"]);
		$this->assertEquals(
			$rover3->getCoordinates(),
			array(
				"x"=>0,
				"y"=>0,
				"direction"=>"east"
				)
		);


	}
	public function testMultipleCommands(){
		$rover4= new Rover();
		$rover4->executeCommands(["r","f","l","b"]);
		var_dump($rover4->getCoordinates());
		$this->assertEquals(
			$rover4->getCoordinates(),
			array(
				"x"=>1,
				"y"=>-1,
				"direction"=>"north"
				)
			);

	}
}