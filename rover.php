<?php 

class Rover {
	private $_cardinalPoints = array("N","E","S","W");
	
	private $_coordinates = array("x"=>0,"y"=>0,"facingDirection"=>0);

	public function getCoordinates(){
		return $this->_coordinates;
	}
	public function getfacingDirection(){
		return $this->_coordinates["facingDirection"];
	}

	public function executeCommands($arrayCommands){
		$arrayCommandsLength= count($arrayCommands);
		for ($i=0;$i < $arrayCommandsLength; $i++){
			if($arrayCommands[$i] === "f"){
				$this->move(1);
			}elseif($arrayCommands[$i] === "b"){
				$this->move(-1);
			}elseif($arrayCommands[$i] === "r"){
				$this->turn(1);
			}elseif($arrayCommands[$i] === "l"){
				$this->turn(-1);
			}else{
				throw new Exception("Command not recognised", 1);
			}
		}
	}

	public function turn($turnDirection){
		$this->_coordinates["facingDirection"] = $this->getfacingDirection() + $turnDirection;
		if($this->getfacingDirection() === 4){
			$this->_coordinates["facingDirection"] = 0;
		}elseif($this->getfacingDirection() === -1){
			$this->_coordinates["facingDirection"] = 3;
		}
	}

	public function move($moveDirection){
    $moveX = array(0,1,0,-1);
	$moveY = array(1,0,-1,0);
	$this->_coordinates["y"] += $moveY[$this->getfacingDirection()] * $moveDirection;
	$this->_coordinates["x"] += $moveX[$this->getfacingDirection()] * $moveDirection;
	}
}
?>