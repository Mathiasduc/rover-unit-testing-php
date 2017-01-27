<?php 

class Rover {
	private $_cardinalPoints = array("N","E","S","W");
	
	private $_coordinates = array("x"=>0,"y"=>0,"direction"=>0);

	public function getCoordinates(){
		return $this->_coordinates;
	}
	public function getDirection(){
		return $this->_coordinates["direction"];
	}

	public function executeCommands($arrayCommands){
		$arrayCommandsLength= count($arrayCommands);
		for ($i=0;$i < $arrayCommandsLength; $i++){
			if($arrayCommands[$i] === "f"){
				$this->move(true);
			}elseif($arrayCommands[$i] === "b"){
				$this->move(false);
			}elseif($arrayCommands[$i] === "r"){
				$this->turnRight();
			}elseif($arrayCommands[$i] === "l"){
				$this->turnLeft();
			}else{
				throw new Exception("Command not recognised", 1);
			}
		}
	}

	public function turnRight(){
		$this->_coordinates["direction"] = $this->getDirection() +1;
		if($this->getDirection() === 4){
			$this->_coordinates["direction"] = 0;
		}
	}

	public function turnLeft(){
		$this->_coordinates["direction"] = $this->getDirection() -1;
		if($this->getDirection() === -1){
			$this->_coordinates["direction"] = 3;
		}
	}
	
	public function move($forwardBool){
    $moveX = $forwardBool? array(0,1,0,-1): array(0,-1,0,1);
	$moveY = $forwardBool? array(1,0,-1,0): array(-1,0,1,0);
	$this->_coordinates["y"] += $moveY[$this->getDirection()];
	$this->_coordinates["x"] += $moveX[$this->getDirection()];
	}
}
?>