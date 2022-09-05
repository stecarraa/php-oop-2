<?php
require_once __DIR__ . "/product.php";

class Games extends product
{
    private $material;
    private $color;

    public function __construct($_name, $_price, $_material, $_color)
    {
        parent::__construct($_name, $_price);

        $this->setMaterial($_material);
        $this->setColor($_color);
    }

   
    public function getMaterial()
    {
        return $this->material;
    }

    
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

   
    public function getColor()
    {
        return $this->color;
    }

   
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }
}