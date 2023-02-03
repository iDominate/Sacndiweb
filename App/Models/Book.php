<?php

namespace App\Models;

use App\Models\Product;
use Core\DB;

class Book extends Product
{
    private $_weight;

    function __construct($data, $db)
    {
        $this->initializeProduct($data, $db);
        $this->setSpecificProductData($data);
    }
    private function setWeight($value)
    {
        $this->_weight = $value;
    }

    function getWeight()
    {
        return $this->_weight;
    }

    function setSpecificProductData($data): void
    {
        $this->setWeight($data['weight']);
    }

    function getProductData()
    {
        return [
            'sku' => $this->getSKU(),
            'name' => $this->getName(),
            'price' => $this->getPrice(),
            'product_type' => $this->getProductType(),
            'property' => 'Weight',
            'specifics' => $this->getSpecificProductData(),
            'measuring_unit' => 'KG'
        ];
    }

    function getSpecificProductData()
    {
        return $this->getWeight();
    }


    function commitToDatabase($db)
    {
        $this->SaveToDatabase($db);
    }
}
