<?php


class Person {

	// Using protected visibility to give access to every subclasses
	protected $name = "Scooby";

    public function personGreeting() {
   		return "My name is $this->name and I am a person.";
   }
 }

    


 class Pet extends Person{
   
   // This method have access to the property of Person
   public function petGreeting() {
   	return "My name is $this->name and I am a dog.";
   }
 
 }   


 $pet1 = new Pet();
 $person1 = new Person();

 echo $pet1->petGreeting(); // My name is Scooby and I am a dog.
 echo $person1->personGreeting(); // My name is Scooby and I am a person.