<?php
class Usuarios {
    private $nome;
    private $usuario;
    private $email;
    private $senha;
    private $confirmarSenha;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function getSenha2() {
        return $this->confirmarSenha;
    }

    public function setSenha2($senha2) {
        $this->confirmarSenha = $senha2;
    }

    public function cadastrar($dados) {
        $this->setNome($dados['nome_cadastro']);
        $this->setUsuario($dados['usuario_cadastro']);
        $this->setEmail($dados['email_cadastro']);
        $this->setSenha($dados['senha_cadastro']);
        $this->setSenha2($dados['senha_confirmacao_cadastro']);
        
        $nome = trim(strip_tags(ucfirst($this->getNome())));
        $usuario = trim(strip_tags($this->getUsuario()));
        $email = trim(strip_tags($this->getEmail()));
        $senha = strip_tags($this->getSenha());
        $senha2 = strip_tags($this->getSenha2());

        if(empty($nome) || empty($usuario) || empty($email) || empty($senha) || empty($senha2)) {
            die('Preencha todos os campos');
        }else if(!preg_match('/^[a-zA-Zá-úÁ-Ú]*$/', $nome)) {
            die('Nome inválido');
        }else if(!preg_match('/^[\w]*$/', $usuario)) {
            die('Usuário inválido');
        }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die('E-mail inválido');
        }else if($senha != $senha2) {
            die('As senhas devem ser iguais');
        }else {
            $conn = Connection::getConn();
            $sql = 'SELECT id FROM usuarios WHERE usuario = :u OR email = :e;';
            $sql = $conn->prepare($sql);
            $sql->bindValue(':u', $usuario);
            $sql->bindValue(':e', $email);
            $sql->execute();            

            if($sql->rowCount() > 0) {
                echo 'Usuário já existe';                
            }else {
                $conn = Connection::getConn();
                $sql = 'INSERT INTO usuarios(nome, usuario, email, senha) VALUES (:n, :u, :e, :s);';
                $sql = $conn->prepare($sql);
                $sql->bindValue(':n', $nome);
                $sql->bindValue(':u', $usuario);
                $sql->bindValue(':e', $email);
                $sql->bindValue(':s', $senha);
                $res = $sql->execute();
    
                if($res) {
                    echo 'Cadastrado';
                }else {
                    echo 'Erro ao cadastrar. Tente novamente';
                }
            }         
        }

    }

}