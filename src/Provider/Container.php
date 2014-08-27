<?php

namespace Vibius\Container\Provider;

use Vibius\Container\Interfaces;

class Container implements ContainerInterface{

	/**
	 * @var array[], Key value storage for container
	 */
	private $storage = array();

	/**
	 * @param string $key, Key as indentifier for new storage value.
	 * @return mixed, Value of the inserted key.
	 */
	public function add(string $key,$value){
		if( !$this->exists($key) ){
			$this->storage[$key] = $value;
			return $this->storage[$key];
		}
		throw new ContainerKeyNotFoundException;
	}

	/**
	 * @param string $key, Key as indentifier for new storage value.
	 * @return mixed, Value of the inserted key.
	 */
	public function override(string $key,$value){
		if( $this->exists($key) ){
			$this->storage[$key] = $value;
			return $this->storage[$key];
		}
		throw new ContainerKeyNotFoundException;
	}

	/**
	 * @param string $key, Key as indentifier for storage value existence.
	 * @return boolean, True if key exists in container storage.
	 */
	public function exists(string $key){
		if( empty($this->storage[$key]) ){
			return true;		
		}
	}

	/**
	 * @throws ContainerKeyNotFoundException, If key to be removed is not found.
	 * @param string $key, Key for storage value return.
	 * @return mixed, Value by key of container storage.
	 */
	public function get(string $key){
		if( !$this->exists($key) ){
			throw new ContainerKeyNotFoundException;
		}
		return $this->storage[$key];
	}

	/**
	 * @throws ContainerKeyNotFoundException, If key to be removed is not found.
	 * @param string $key, Key for storage removal.
	 * @return boolean, Value of key unset function.
	 */
	public function remove(string $key){
		if( !$this->exists($key) ){
			throw new ContainerKeyNotFoundException;
		}
		return unset($this->storage[$key]);
	}

}