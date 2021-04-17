<?php
class LoginController extends Controller {
    public function index() {
        $this->loadLayout('login');
    }   

    public function login() {
        $usuarios = new Usuarios();
        $usuarios->login($_POST);       
    }
}