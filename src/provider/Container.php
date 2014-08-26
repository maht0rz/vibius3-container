<?php

namespace vibius\Container\provider;

use vibius\Container\interfaces;

class Container implements ContainerInterface{

	public function add($key,$value){
		echo "adding something to container!";
	}

}