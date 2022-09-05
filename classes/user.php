<?php 

class user{

    public $name;
    public $surname;
    protected $email;

    public function __construct($_name, $_surname, $_email)
    {
        
        $this->name = $_name;
        $this->surname = $_surname;

        $this->setEmail($_email);

    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($_email) {
        
            $this->email = $_email;
     

    }

}

?>