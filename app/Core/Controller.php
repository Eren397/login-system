<?php
class Controller {
    public $dados;

    public function __construct() {
        $this->dados = array();
    }

    public function loadLayout($name, $model = array()) {
        $this->dados = $model;
        require_once('app/layout/main.php');
    }

    public function renderView($name, $model = array()) {
        require_once('app/views/'.$name.'.php');
    }

}