<?php

namespace App\Models;

use App\Models\Product;
use Core\DB;

class DVD extends Product
{

    function __construct($data, $db)
    {
        $this->initializeProduct($data, $db);
        $this->setSpecificProductData($data);
    }
    private $_size;

    private $_fields = ['sku', 'name', 'price', 'size'];

    private function setSize($value)
    {
        $this->_size = $value;
    }

    function getSize()
    {
        return $this->_size;
    }
    function setSpecificProductData($data): void
    {
        $this->setSize($data['size']);
    }

    function getProductData(): array
    {
        return [
            'sku' => $this->getSKU(),
            'name' => $this->getName(),
            'price' => $this->getPrice(),
            'product_type' => $this->getProductType(),
            'property' => 'Size',
            'specifics' => $this->getSpecificProductData(),
            'measuring_unit' => 'MB'
        ];
    }

    function getSpecificProductData()
    {
        return $this->getSize();
    }
    function commitToDatabase($db)
    {
        $this->SaveToDatabase($db);
    }
}
