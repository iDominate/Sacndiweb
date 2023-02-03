<?php

namespace App\Models;

use App\Models\Product;
use Core\DB;

class Furniture extends Product
{
    private $_length;
    private $_width;
    private $_height;

    function __construct($data, $db)
    {
        $this->initializeProduct($data, $db);
        $this->setSpecificProductData($data);
    }

    private function setLength($value)
    {
        $this->_length = $value;
    }

    private function getLength()
    {
        return $this->_length;
    }

    private function setHeight($value)
    {
        $this->_height = $value;
    }

    private function getHeight()
    {
        return $this->_height;
    }

    private function setWidth($value)
    {
        $this->_width = $value;
    }

    private function getWidth()
    {
        return $this->_width;
    }

    function setSpecificProductData($data): void
    {
        $this->setHeight($data['height']);
        $this->setWidth($data['width']);
        $this->setLength($data['length']);
    }

    function getProductData()
    {
        return [
            'sku' => $this->getSKU(),
            'name' => $this->getName(),
            'price' => $this->getPrice(),
            'product_type' => $this->getProductType(),
            'property' => 'Dimension',
            'specifics' => $this->getSpecificProductData(),
            'measuring_unit' => ''
        ];
    }

    function getSpecificProductData()
    {
        return $this->getHeight() . 'x' . $this->getWidth() . 'x' . $this->getLength();
    }

    function commitToDatabase($db)
    {
        $this->SaveToDatabase($db);
    }
}
