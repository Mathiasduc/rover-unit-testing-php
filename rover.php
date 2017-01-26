<?php 

class Rover {
	private $_coordinates = array("x"=>0,"y"=>0,"direction"=>"north");

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

	private function moveRover($command){
        $direction = $this->_coordinates["direction"];
        if($direction === "north"){
            $command === "f"? $this->_coordinates["y"]++ : $this->_coordinates["y"]--;
        }else if($direction === "south"){
            $command === "f"? $this->_coordinates["y"]-- : $this->_coordinates["y"]++;
        }
        else if ($direction === "east") {
            $command === "f"? $this->_coordinates["x"]++ : $this->_coordinates["x"]--;    
        }else{
            $command === "f"? $this->_coordinates["x"]-- : $this->_coordinates["x"]++;    
        }
	}
	private function turnRover($command){
		$direction = $this->_coordinates["direction"];
		if($direction === "north"){
			if ($command === "r" ){ 
				$this->_coordinates["direction"]= "east";
			}else {
				$this->_coordinates["direction"]= "west";
			}
		}else


	}
}

?>