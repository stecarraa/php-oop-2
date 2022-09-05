<?php 

require_once __DIR__ . "/product.php";


class food extends product
{
    private $ingredients;


    public function __construct($_name, $_price, $_ingredients)
    {
        parent::__construct($_name, $_price);

        $this->setIngredients($_ingredients);
        
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;

        return $this;
    }

}

?>