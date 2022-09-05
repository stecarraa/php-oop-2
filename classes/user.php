<?php 

class user{

    public $name;
    public $surname;
    protected $email;

    public $discount = 0 ;

    protected $registeredUser = false;

    public function __construct($_name, $_surname, $_email)
    {
        
        $this->name = $_name;
        $this->surname = $_surname;

        $this->setEmail($_email);

    }

    public function getEmail() {
        return $this->email;
    }

    public function getRegisteredUser(){
        return $this->registeredUser;
    }

    public function setEmail($_email) {

        if (strpos($_email, '@') !== false && strpos($_email, '.') !== false) {
            $this->email = $_email;
        } else {
            echo "Check email, not valid";
        }

    }

    public function setRegisteredUser($_registeredUser){
        $this->registeredUser = $_registeredUser;

}

public function applyLoggedDiscount(){
    if($this->registeredUser === true){
         $discount = 20;
        }

}
}

?>