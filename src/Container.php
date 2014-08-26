<?php

namespace vibius\Container;

class Container extends Facade implements FacadeInterface{

	public static function getFacadeIdentifier(){
		return 'vibius\Container\provider\Container';
	}

}