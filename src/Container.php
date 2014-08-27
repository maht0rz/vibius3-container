<?php

namespace Vibius\Container;

use \Vibius\Facade, \Vibius\Facade\Intefaces;

class Container extends Facade implements FacadeInterface{

	public static function getFacadeIdentifier(){
		return 'vibius\Container\Provider\Container';
	}

}
