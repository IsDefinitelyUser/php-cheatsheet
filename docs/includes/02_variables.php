<?php 



    $persons = [
  "Peter" => "35", 
  "Ben" => "37", 
  "Joe "=> "43"
];

foreach ($persons as $name => $age) {
  echo "My name is $name and my age is $age";
  echo "<br>";
}