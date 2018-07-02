<?php
class Libs_Bootstrap
{
    public function __construct()
    {
        $this->delegate();
    }
    private  function _parseUrl(&$module,&$controller, &$action, &$param=null){
        //echo $_GET['url'];exit;
        if(isset($_GET['url'])){
            $listRequest = explode(DS, strtolower(rtrim($_GET["url"], DS)));
            //print_r($listRequest);exit;
            //Kiểm tra đang truy cập vào module nào: admin, manager, default
            if(is_dir('..'.DS.'application' . DS . str_replace('-', '', $listRequest[0]))) {
                $module = $listRequest[0];//$module = admin 
                array_shift($listRequest);
            }else{
                //Truy cập mặc định tới default module
                $module = DEFAULT_MODULE;
                $controller = DEFAULT_CONTROLLER;
                $action = DEFAULT_ACTION;
            }
            //Kiểm tra controller nào được gọi
            if (isset($listRequest[0])) {
                $filePath = '..'.DS.'application' . DS . strtolower($module) . DS . 'controllers' . DS . str_replace('-', '', $listRequest[0]) . EXT;
                if (file_exists($filePath)) {
                    $controller = $listRequest[0];
                    array_shift($listRequest);
                }else{
                    $controller = DEFAULT_CONTROLLER;
                    $action = DEFAULT_ACTION;
                }
            }else{
                $controller = DEFAULT_CONTROLLER;
                $action = DEFAULT_ACTION;
            }

            //Kiểm tra tên của Controller có đúng hay không
            if (isset($listRequest[0])) {
                    $class = $module . '_Controllers_' . $controller;
                if (is_callable(array($class, $listRequest[0]))) {
                    $action = $listRequest[0];
                    array_shift($listRequest);
                }else{
                    $action = DEFAULT_ACTION;
                }
            }else{
                $action = DEFAULT_ACTION;
            }
            if (count($listRequest) > 0) {
                $param=$listRequest;
            }
        }else{
            $module= DEFAULT_MODULE;
            $controller=DEFAULT_CONTROLLER;
            $action=DEFAULT_ACTION;
        }
    }
    private  function getUrlCurrent(){
        $pageURL = 'http';
        if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
        $pageURL .= "://";
        if ($_SERVER["SERVER_PORT"] != "80") {
            $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
        } else {
            $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
        }
        $start=strpos($pageURL,'public')+6;
        $lengthURL= strlen($pageURL);
        $pageURL= substr($pageURL,0,$start-$lengthURL);
        return $pageURL;
    }
    private function get_Get_Post(){
        if(isset($_GET)){
           if(array_key_exists('url',$_GET)){
               unset($_GET['url']);
           }
        }
        if(isset($_POST)){
            if(array_key_exists('url',$_POST)){
                unset($_POST['url']);
            }
        }
    }
    private  function delegate(){
        $this->_parseUrl($module,$controller,$action,$param);
        //define('URL_BASE',$this->getUrlCurrent());
        define('MODULE',$module);
        define('CONTROLLER',$controller);
        define('ACTION',$action);
        $this->get_Get_Post();
        $class= MODULE."_controllers_".CONTROLLER;
        $controller= new $class;
        $controller->$action();
    }
}