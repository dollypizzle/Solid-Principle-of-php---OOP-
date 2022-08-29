<?php 

class Person {
    private $name;

    private $age;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age * 365;
    }

    public function setAge($age)
    {
        if ($age < 18)
        {
            throw new Exception("Person is not old enough");
        }

        $this->age = $age;
    }
}

$john = new Person('DollyPizzle');

$john->setAge(30);

var_dump($john->getAge());




#----------------------------------------------------------------

class GFG { 
  
    private $userId; 
    private $pwd; 
      
    // Update GFG password 
    public function updatePwd($userId, $pwd) { 
          
        // Write function body 
        echo("Function to update password '"
                . $pwd . "' for user " . $userId); 
          
        echo "<br>"; 
    } 
  
    // Check account balance 
    public function courseName($userId) { 
          
        // Write function body 
        echo("Function to check course name of user "
                . $userId); 
          
        echo "<br>"; 
    } 
} 
  
$obj = new GFG(); 
$obj -> updatePwd('GFG12', 'geeks54321'); 
$obj -> courseName('GFG06');