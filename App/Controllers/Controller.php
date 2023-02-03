<?php

namespace App\Controllers;

use Core\DB;

class Controller
{
    private $_data;
    private $_controller;
    private function setData()
    {
        $this->_data =  array_filter($_POST, fn ($val) => !is_null($val));
    }

    public function getController()
    {
        $this->setData();
        $product_class = 'App\Models\\' . $this->_data['productType'];
        $this->_controller = new $product_class($this->_data, DB::connect());
        return $this->_controller;
    }
}
