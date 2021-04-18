<?php
class HomeController extends Controller {
    public function index(){
        $this->loadLayout('home');
    }

    public function logout(){
        $u = new Usuarios();
        $u->logout();
    }
}