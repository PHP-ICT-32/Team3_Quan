<?php
class Default_Controllers_Index extends Libs_Controller{
    
    public function __construct() {
        parent::__construct();
        //Đã có thuộc tính view của cha
    }
    
    public function index(){
        $objProduct = new Default_Models_tblProduct();
        $this->view->arrProduct = $objProduct->getAllProduct();
        $this->view->render('index/index');
    }
    
    public function detail(){
        if($_REQUEST['id']){
            $id = $_REQUEST['id'];
            //Khởi tạo đối tượng Default_Models_tblProduct
            $objProduct = new Default_Models_tblProduct();
            $this->view->itemProduct = $objProduct->getProductById($id);
            $this->view->render('index/detail');
        }
    }
    
    public function add(){
        $this->view->render('index/add');
                
    }
    
    public function addproccess(){
        $productId = $_POST['productId'];
        
    }
}

?>
