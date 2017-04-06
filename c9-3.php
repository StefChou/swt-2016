<?php

class Student {
	public static $ime;
	
	public static function Teach(){
		echo 'Trying to teach PHP to '.self::$ime;
	}
}

Student::$ime = 'Stef';
Student::Teach();

?>