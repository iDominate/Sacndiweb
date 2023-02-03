<?php

namespace App\Models;

use Core\DB;

abstract class Product
{
    private $_sku;
    private $_name;
    private $_price;
    private $_product_type;
    private $_db;
    protected function setSKU($value)
    {
        $this->_sku = $value;
    }

    protected function getSKU()
    {
        return $this->_sku;
    }

    protected function setName($value)
    {
        $this->_name = $value;
    }

    protected function getName()
    {
        return $this->_name;
    }

    protected function setPrice($value)
    {
        $this->_price = $value;
    }

    protected function getPrice()
    {
        return $this->_price;
    }

    protected function setProductType($value)
    {
        $this->_product_type = $value;
    }

    protected function getProductType()
    {
        return $this->_product_type;
    }
    protected function initializeProduct($data, $db)
    {
        $this->setPrimaryData($data);
        $this->setDatabaseConnection($db);
    }
    protected function setPrimaryData($data)
    {
        $this->setSKU($data['sku']);
        $this->setName($data['name']);
        $this->setPrice($data['price']);
        $this->setProductType($data['productType']);
    }

    protected function setDatabaseConnection($db)
    {
        $this->_db = $db;
    }

    function SaveToDatabase()
    {
        $this->_db->insert('products', $this->getProductData());
    }

    public static function getAllProducts()
    {
        $db = DB::connect();
        return $db->get('products');
    }

    public static function deleteProduct($db, $id)
    {
        $db->where('id', $id);
        $db->delete('products');
    }



    protected abstract function setSpecificProductData($data): void;
    protected abstract function getProductData();
    protected abstract function commitToDatabase($db);
    protected abstract function getSpecificProductData();
}
