<?php 

class Rover {
	private $_cardinalPoints = array("N","E","S","W");
	private $_moveX = array(0,1,0,-1);
	private $_moveY = array(1,0,-1,0);

	private $_coordinates = array("x"=>0,"y"=>0,"direction"=>0);

	public function getCoordinates(){
		return $this->_coordinates;
	}

	public function executeCommands($arrayCommands){
		$arrayCommandsLength= count($arrayCommands);
		for ($i=0;$i < $arrayCommandsLength; $i++){
			if($arrayCommands[$i] === "f" || $arrayCommands[$i] === "b"){
				$this->moveRover($arrayCommands[$i]);
			}else{
				$this->turnRover($arrayCommands[$i]);
			}
		}
	}

	private function turnRover($command){
		$command === "r"? $this->turnRight():$this->turnLeft();	
	}

	public function turnRight(){
		$currentDirection = $this->_coordinates["direction"];
		$this->_coordinates["direction"] = $currentDirection +1;
		if($this->_coordinates["direction"] === 4){
			$this->_coordinates["direction"] = 0;
		}
	}

	public function turnLeft(){
		$currentDirection = $this->_coordinates["direction"];
		$this->_coordinates["direction"] = $currentDirection -1;
		if($this->_coordinates["direction"] === -1){
			$this->_coordinates["direction"] = 3;
		}
	}

	private function moveRover($command){
		$command === "f"? $this->moveForward():$this->moveBackward();
	}

	public function moveForward(){
		$currentDirection = $this->_coordinates["direction"];
		$this->_coordinates["y"] += $this->_moveY[$currentDirection];
		$this->_coordinates["x"] += $this->_moveX[$currentDirection];
	}
	public function moveBackward(){
		$currentDirection = $this->_coordinates["direction"];
		$this->_coordinates["y"] -= $this->_moveY[$currentDirection];
		$this->_coordinates["x"] -= $this->_moveX[$currentDirection];
	}
}

?>