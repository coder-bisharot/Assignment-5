<?php
// task_2
class Person {
    private $name;
    private $email;

    public function setName($name) {
        $this->name = $name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }
}

$person = new Person(); // create an instance of Person class
$person->setName("John Doe"); // set the name property
$person->setEmail("john.doe@example.com"); // set the email property

echo "Name: " . $person->getName() . "<br>"; // display the name property
echo "Email: " . $person->getEmail() . "<br>"; // display the email property
