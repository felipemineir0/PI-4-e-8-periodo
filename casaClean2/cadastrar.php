<?php
 require_once 'model/UsuarioModel.php';
 $u=new Usuario;
  ob_start();
  ?>
  <link rel="stylesheet" href="css/cadastrar.css">
<h2 class="container tituloCadastro"><b>Cadastro de Usuário</b></h2>

  <form class="container col-lg-4" id="test" action="" method="post">
                    <fieldset class="container">
                        <div  class="form-group">
                        <label><b>NOME COMPLETO</b></label>
                        <input class="form-control interior" type="text" placeholder="Nome Completo" maxlength="50" name="nome"/>
                        </div>

                        <div class="form-group">
                        <label>TELEFONE</label>
                        <input class="form-control interior"type="text" placeholder="Telefone" maxlength="30" name="telefone"/>
                        </div>

                        <div class="form-group">
                        <label>EMAIL</label>
                        <input class="form-control interior" type="email" placeholder="Usuario" maxlength="40" name="email"/>
                        </div>

                        <div class="form-group">
                        <label>SENHA</label>
                        <input class="form-control interior" type="password" placeholder="Senha" maxlength="15" name="senha"/>
                        </div>

                        <div class="form-group">
                        <label>CONFIRMAR SENHA</label>
                        <input class="form-control interior"type="password" placeholder="Confirmar Senha" maxlength="15" name="consenha"/>
                        </div>
                        <div class="form-group" style="text-align: center">
                            <button type="submit" class="btn btn-primary" value="Cadastrar">Concluir</button>
                            <button type="reset" class=" btn btn-primary">Limpar</button>
                            <a href="home.php" class=" btn btn-primary">Voltar</a>
                     </div>  
               </fieldset>
    </form>
<?php
if(isset($_POST['nome'])){
    $nome = addslashes($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $confirmarSenha = addslashes($_POST['consenha']);

    if(!empty($nome)&& !empty($telefone)&& !empty($email)&& !empty($senha)&& !empty($confirmarSenha)){
      $u->funcaoConect();
      if($u->msgErro==""){
          if($senha==$confirmarSenha){
            if($u->cadastrar($nome,$telefone,$email,$senha)){
                ?>
                <div id="msg-sucesso">Cadastrado com sucesso! Acesse para entrar!"</div>
                <?php
            } else{
                ?>
                <div class="msg-erro">Email já cadastrado!"</div>
                <?php
            }
          }
          else{
              ?>
              <div class="msg-erro">Senha e Confirmar Senha não correspondem!"</div>
              <?php
          }
         
      }else {
          ?>
          <div class="msg-erro">
          <?php echo "Erro:".$u->msgErro;?>
      </div>
      <?php
      }
    } else{
        ?>
        <div class="msg-erro">Preencha todos os campos!"</div>
        <?php
    }
}

        $conteudo = ob_get_contents();
        ob_end_clean();
        include "layout.php";
    ?>