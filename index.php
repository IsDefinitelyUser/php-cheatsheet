<?php

	// We created a class that is accesible only for the subclasses.
	abstract class Teacher {

		public function greetingsStudent() {
			return "Hello, students!";
		}
	   
	   abstract public function greetings();
	}


   
    class Student extends Teacher {

    	public function greetings() {
    		return $this->greetingsStudent();
    	}
    }

   
   $students1 = new student();
   echo $students1->greetings();