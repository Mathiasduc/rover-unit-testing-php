<?php 
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
		}elseif ($direction === "east") {
			if ($command === "r" ){ 
				$this->_coordinates["direction"]= "south";
			}else {
				$this->_coordinates["direction"]= "north";
			}
		}elseif ($direction === "south") {
			if ($command === "r" ){ 
				$this->_coordinates["direction"]= "west";
			}else {
				$this->_coordinates["direction"]= "east";
			}
		}else{
			if ($command === "r" ){ 
				$this->_coordinates["direction"]= "north";
			}else {
				$this->_coordinates["direction"]= "south";
			}
		}
	}