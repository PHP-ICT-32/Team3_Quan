<?php
/**
 *Controller parent class 
 */
class Libs_Controller {
    protected $view = null;
    public function __construct() {
        $this->view = new Libs_View();
    }
}

?>
