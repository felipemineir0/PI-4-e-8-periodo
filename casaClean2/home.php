<?php
require_once 'model/UsuarioModel.php';
$u=new Usuario;

ob_start();
?>

<link rel="stylesheet" href="css/home.css">
<h2 class="container tituloEntrar"><b>Entrar</b></h2>

<form class="container col-lg-4" id="test" action="" method="post">
    <fieldset class="container">
        <div  class="form-group">
            <label>Email</label>
            <input class="form-control interior" type="email" placeholder="Usuario" name="email"/>
        </div>

        <div  class="form-group">
            <label>Senha</label>
            <input class="form-control interior" type="password" placeholder="Senha" name="senha"/>
        </div>
        <div class="entrar">
            <button type="submit" value="Acessar" class="btn btn-primary entrar" >Entrar</button>
            <a class="btn btn-primary entrar" href="cadastrar.php">Cadastrar </a>
        </div>

        <div class="cadastro"><a href="cadastrar.php"><b>Esqueci minha senha</b></a></div>
        
    </fieldset>
    </form>

<?php
if(isset($_POST['email'])){
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if(!empty($email)&& !empty($senha))
    {
        $u->funcaoConect();
        if($u->msgErro=="")
        {

       
      if($u->logar($email,$senha))
      {
           header("location:homelogar.php");
      }
      else{
          ?>
          <div class="msg-erro">Email e/ou senha estão incorretos!</div>
          <?php
      }
    }
    else{
        ?>
       <div class="msg-erro"><?php "Erro:".$u->msgErro;?>
    </div>
    <?php
    }
    }else
    {
        ?>
    <div class="msg-erro">Preencha todos os campos!"</div>
    <?php
    }
}
  
$conteudo = ob_get_contents();
ob_end_clean();
include "layout.php";
?>