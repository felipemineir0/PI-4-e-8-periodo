  <?php

  include_once 'includes/message.php';
  require_once 'model/ContratarModel.php';
  include_once 'config/BancoDados.php';
  $c=new ContratarModel;
    ob_start()
    
  ?>
    <link rel="stylesheet" type="text/css" href="css/contratar.css" />
    <h3 class=" container subtitulo">
      Estamos quase lá, complete os dados para finalizar o pedido...
    </h3>

    <h2 class="tituloFormulario">Complete o Formulário</h2>
    <form class="container" id="test" action="contratar.php" method="POST">
      
      <fieldset class="formCadastro">
        <div>
          <div class="row">
            <div class="form-group col-md-6">
              <label>Nome Completo</label>
              <input
                type="text"
                class="form-control interior"
                placeholder="Insira seu nome completo"
                name="nome"
              />
            </div>
          </div>
          <div class=" row">
            <div class="form-group col-md-4">
              <label>Email</label>
              <input type="email" class="form-control interior" placeholder="Email" />
            </div>
            <div class="form-group col-md-4">
              <label>Senha</label>
              <input type="password" class="form-control interior" placeholder="Senha" />
            </div>
            <div class="form-group col-md-4">
              <label>Confirmar Senha</label>
              <input type="password" class="form-control interior" placeholder="Confirmar Senha" />
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-2">
              <label>CEP</label>
              <input type="text" class="form-control interior" name="cep"/>
            </div>
            <div class=" col-md-6">
              <label>Endereço</label>
              <input type="text" class="form-control interior" placeholder="Rua dos Bobos" name="rua"/>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-2">
              <label>Numero</label>
              <input type="text" class="form-control interior" placeholder="Numero" name="numero"/>
            </div>
            <div class="form-group col-md-4">
              <label>Bairro</label>
              <input type="text" class="form-control interior" placeholder="Bairro" name="bairro"/>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label>Complemento</label>
              <input
                type="text"
                class="form-control interior"
                placeholder="Apartamento, hotel, casa, etc."
                name="complemento"
              />
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Cidade</label>
              <input type="text" class="form-control interior" placeholder="Cidade" name="cidade"/>
            </div>

            <div class="form-group col-md-4">
              <label>Estado</label>
              <select class="form-control interior" name="estado">
                <option selected>Escolher...</option>
                <option>MG</option>
                <option>SP</option>
                <option>RJ</option>
                <option>MT</option>
                <option>RS</option>
                <option>BA</option>
                <option>AM</option>
                <option>ES</option>
                <option>SC</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" />
              <label class="form-check-label">
                Clique em mim
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary" name="btn-contratar">Concluir</button>
          <button type="reset" class="btn btn-primary" value="Entrar">Limpar</button>
          <a href="datahora.php" class="btn btn-primary">Voltar</a>
        </div>
      </fieldset>
    </form>
<?php
if(isset($_POST['nome'])){
  $nome = addslashes($_POST['nome']);
  $cep = addslashes($_POST['cep']);
  $rua = addslashes($_POST['rua']);
  $numero = addslashes($_POST['numero']);
  $bairro = addslashes($_POST['bairro']);
  $complemento = addslashes($_POST['complemento']);
  $cidade = addslashes($_POST['cidade']);
  $estado = addslashes($_POST['estado']);

 if(!empty($nome)&& !empty($cep)&& !empty($rua)&& !empty($numero)&&
   !empty($bairro)&& !empty($complemento)&& !empty($cidade)&& !empty($estado) 
   && !empty($email) && !empty($cpf) && !empty($RG)){
    $c->contratar($nome, $cep, $rua, $numero, $bairro,
    $complemento, $cidade, $estado, $email, $cpf, $RG);
    if($c->msgErro==""){
              if($c->contratar($nome, $cep, $rua, $numero, $bairro,
              $complemento, $cidade, $estado, $email, $cpf, $RG)){
              ?>
              <div id="msg-sucesso">Cadastrado com sucesso!"</div>
              <?php
          }
        }
    }
   else{
      ?>
      <div class="msg-erro">Preencha todos os campos!"</div>
      <?php
  }
}

      $conteudo = ob_get_contents();
      ob_end_clean();
      include "layout.php";
    ?>
