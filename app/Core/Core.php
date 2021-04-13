<?php
class Core {
    public function __construct() {
        $this->getURL();
    }

    public function getURL() {
        if(isset($_GET['page'])) {
            $url = $_GET['page'];
            $url = explode('/', $url);
            $controller = ucfirst($url[0].'Controller');  
            array_shift($url);
            
            if(isset($url[0])) {
                $function = $url[0];
            }else {
                $function = 'index';
            }
        }else {
            $controller = 'LoginController';
            $function = 'index';
        }

        call_user_func_array(array(new $controller, $function), array());
        

    }
}