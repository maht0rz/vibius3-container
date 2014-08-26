<?php

namespace Vibius\Container\Provider;

use Vibius\Container\Interfaces;

class Container implements ContainerInterface{

	public function add($key,$value){
		echo "adding something to container!";
	}

}