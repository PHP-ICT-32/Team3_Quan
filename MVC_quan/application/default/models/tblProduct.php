<?php
class Default_Models_tblProduct extends Libs_Model{
    private $productId;
    private $productName;
    //....
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getAllProduct(){
        return $this->model->fetchAll("SELECT * FROM products");
    }
    
    public function getProductById($id){
        return $this->model->fetchOne("SELECT * FROM products WHERE id=$id");
    }
    
    public function getProductByName($name){
        
    }
    
    public function getProductByCatId($catId)
    {
        
    }
    
    public function getProductOptions($arrParam){
        
    }
    
    public function addCommentByProductId($id){
        
    }
    
}
