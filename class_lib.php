<?php
	/**
	* 
	*/
	class Person
	{
		
		var $name;
		function set_name($new_name)
		{
			$this->name = $new_name;
		}
		function get_name()
		{
			return "Your name is"." ". $this->name."<br>";
		}
	}


	/**
	* 
	*/
	class Base
	{
		
		function __construct()
		{
			echo "Constructor is working of base class. Its no need to call any function after creating object."."<br>";
		}
	}
	/**
	* 
	*/
	class SubClass extends Base
	{
		
		function __construct()
		{
			parent::__construct();
			echo "This is from subclass";
		}
	}
		
?>