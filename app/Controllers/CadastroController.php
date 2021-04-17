<?php
class CadastroController extends Controller {
    public function index() {
        $this->loadLayout('cadastro');
    }

    public function cadastrar() {
        $cad = new Usuarios();
        $cad->cadastrar($_POST);
    }
}