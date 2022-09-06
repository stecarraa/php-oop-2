<?php 

class creditCard{

    private $expirationDate;
    private $cardNumber;
    private $cvv;

    public $currentDate = date("MM/YY");



    public function __construct($_cvv,$_cardNumber,$_ExpirationDate){
        $this->setcvv($_cvv);
        $this->setCardNumber($_cardNumber);
        $this->setExpirationDate($_ExpirationDate);
    }

public function getCardNumber(){
    return $this->cardNumber;
}
public function getExpirationDate(){
    return $this->expirationDate;
}
protected function setCvv($_cvv){
    $this->cvv = $_cvv;
}
protected function setCardNumber($_cardNumber){
    $this->cardNumber = $_cardNumber;
}
protected function setExpirationDate($_expirationDate){
    $this->expirationDate = $_expirationDate;
}

public function checkExpirationDate(){
    if (this->$expirationDate > this->$currentDate)
{
   echo "error Date has elapsed";
}

}


}
?>