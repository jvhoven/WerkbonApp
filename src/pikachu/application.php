<?php
	
	namespace Pikachu;

	class Application implements \ArrayAccess{

		protected $values = array();

		/**
		* Sets a parameter or an object.
		*
		* Objects must be defined as Closures.
		*
		* Allowing any PHP callable leads to difficult to debug problems
		* as function names (strings) are callable (creating a function with
		* the same a name as an existing parameter would break your container).
		*
		* @param string $id    The unique identifier for the parameter or object
		* @param mixed  $value The value of the parameter or a closure to defined an object
		*/
	    public function offsetSet($id, $value)
	    {
	        $this->values[$id] = $value;
	    }

		/**
		* Gets a parameter or an object.
		*
		* @param string $id The unique identifier for the parameter or object
		*
		* @return mixed The value of the parameter or an object
		*
		* @throws InvalidArgumentException if the identifier is not defined
		*/
	    public function offsetGet($id) {
	        if (!array_key_exists($id, $this->values)) {
	            throw new \InvalidArgumentException(sprintf('Identifier "%s" is not defined.', $id));
	        }

	        $isFactory = is_object($this->values[$id]) && method_exists($this->values[$id], '__invoke');

	        return $isFactory ? $this->values[$id]($this) : $this->values[$id];
	    }

		/**
		* Checks if a parameter or an object is set.
		*
		* @param string $id The unique identifier for the parameter or object
		*
		* @return Boolean
		*/
	    public function offsetExists($id){
	        return array_key_exists($id, $this->values);
	    }

		/**
		* Unsets a parameter or an object.
		*
		* @param string $id The unique identifier for the parameter or object
		*/
	    public function offsetUnset($id){
	        unset($this->values[$id]);
	    }


	}