<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Sistema de login</title>
</head>
<body>
<?php
    if(isset($_SESSION['id'])) {
?>
    <form action="home/logout" method="POST">
        <button class="btn btn-dark mt-2">Sair</button>
    </form>

<?php
    }else {
?>
     <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="login">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="cadastro">Cadastro</a>
        </li>
    
    </ul>
<?php
    }
?>
   
    <div class="container mt-5">
    <?php
    $this->renderView($name, $model);
    ?>
    </div>
    <script src="app/assets/js/main.js" type="module"></script>
</body>
</html>