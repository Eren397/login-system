<?php
class HomeController extends Controller {
    public function index(){
        $this->loadLayout('home');
    }
}