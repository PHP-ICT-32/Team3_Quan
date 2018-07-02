<?php
class Libs_Model{
    protected $model = null;
    public function __construct() {
        $this->model = new Libs_Database();
    }
}

