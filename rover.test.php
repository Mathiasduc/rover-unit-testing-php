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

	public function testTurnToRightWhenFacingNorth(){
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

	public function testMoveForwardWhenFacingNorth(){
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

	public function testMoveForwardWhenFacingEast(){
		$rover = new Rover();
		$rover->executeCommands(["r","f"]);
		$this->assertEquals(
			$rover->getCoordinates(),
			array(
				"x"=>1,
				"y"=>0,
				"direction"=>"east"
				)
			);
	}

	public function testmoveForwardWhenFacingSouth(){
		$rover = new Rover();
		$rover->executeCommands(["l","l","f"]);
		$this->assertEquals(
			$rover->getCoordinates(),
			array(
				"x"=>0,
				"y"=>-1,
				"direction"=>"south"
				)
			);

	}

	public function testMoveForwardWhenFacingWest(){
		$rover = new Rover();
		$rover->executeCommands(["l","f"]);
		$this->assertEquals(
			$rover->getCoordinates(),
			array(
				"x"=>-1,
				"y"=>0,
				"direction"=>"west"
				)
			);
	}

	public function testMoveBackwardWhenFacingNorth(){
		$rover = new Rover();
		$rover->executeCommands(["b"]);
		$this->assertEquals(
			$rover->getCoordinates(),
			array(
				"x"=>0,
				"y"=>-1,
				"direction"=>"north"
				)
			);
	}

	public function testMoveBackwardWhenFacingEast(){
		$rover = new Rover();
		$rover->executeCommands(["r","b"]);
		$this->assertEquals(
			$rover->getCoordinates(),
			array(
				"x"=>-1,
				"y"=>0,
				"direction"=>"east"
				)
			);
	}

	public function testMoveBackwardWhenFacingSouth(){
		$rover = new Rover();
		$rover->executeCommands(["r","r","b"]);
		$this->assertEquals(
			$rover->getCoordinates(),
			array(
				"x"=>0,
				"y"=>1,
				"direction"=>"south"
				)
			);
	}

	public function testMoveBackwardWhenFacingWest(){
		$rover = new Rover();
		$rover->executeCommands(["l","b"]);
		$this->assertEquals(
			$rover->getCoordinates(),
			array(
				"x"=>1,
				"y"=>0,
				"direction"=>"west"
				)
			);
	}
	public function testTurnRightWhenFacingEast(){
		$rover = new Rover();
		$rover->executeCommands(["r","r"]);
		$this->assertEquals(
			$rover->getCoordinates(),
			array(
				"x"=>0,
				"y"=>0,
				"direction"=>"south"
				)
			);
	}

	public function testTurnRightWhenFacingSouth(){
		$rover = new Rover();
		$rover->executeCommands(["r","r","r"]);
		$this->assertEquals(
			$rover->getCoordinates(),
			array(
				"x"=>0,
				"y"=>0,
				"direction"=>"west"
				)
			);
	}

	public function testTurnRightWhenFacingWest(){
		$rover = new Rover();
		$rover->executeCommands(["r","r","r","r"]);
		$this->assertEquals(
			$rover->getCoordinates(),
			array(
				"x"=>0,
				"y"=>0,
				"direction"=>"north"
				)
			);
	}

	public function testTurnLeftWhenFacingNorth(){
		$rover = new Rover();
		$rover->executeCommands(["l"]);
		$this->assertEquals(
			$rover->getCoordinates(),
			array(
				"x"=>0,
				"y"=>0,
				"direction"=>"west"
				)
			);
	}

	public function testTurnLeftWhenFacingWest(){
		$rover = new Rover();
		$rover->executeCommands(["l","l"]);
		$this->assertEquals(
			$rover->getCoordinates(),
			array(
				"x"=>0,
				"y"=>0,
				"direction"=>"south"
				)
			);
	}
	public function testTurnLeftWhenFacingSouth(){
		$rover = new Rover();
		$rover->executeCommands(["l","l","l"]);
		$this->assertEquals(
			$rover->getCoordinates(),
			array(
				"x"=>0,
				"y"=>0,
				"direction"=>"east"
				)
			);
	}
	public function testTurnLeftWhenFacingEast(){
		$rover = new Rover();
		$rover->executeCommands(["l","l","l","l"]);
		$this->assertEquals(
			$rover->getCoordinates(),
			array(
				"x"=>0,
				"y"=>0,
				"direction"=>"north"
				)
			);
	}
}
