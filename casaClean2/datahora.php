  <?php
    ob_start();
  ?>
    <link rel="stylesheet" type="text/css" href="css/dataHora.css" />
    <h2 class="tituloContratar">Escolha o serviço desejado</h2>

    <form class="container col-md-3" action="contratar.php">
      <fieldset class="container">
        <div class="form-group">
          <select class="form-control seletor" id="servico" name="Serviços">
            <option value="bra"></option>
            <option value="fax">BOM VIZINHO</option>
            <option value="pas">CHURRASQUEIRO</option>
            <option value="coz">COZINHEIRA</option>
            <option value="chu"> FAXINEIRA</option>
            <option value="bom">PASSADEIRA</option>
            <option value="pass">PASSEADOR DE CÃES</option>
          </select>
        </div>
      </fieldset>
    </form>
    <h2 class="tituloHora">Escolha a Data e Horário</h2>

        <?php
        ob_start();
        $tabela = ob_get_contents();
        ob_end_clean();
        include "tabela.php";
        ?>
        
        <form action="contratar.php" method="POST">
          <fieldset class="container">
            <div class="form-group ">Data:<input type="date" class="form-control interior" /></div>
            <div class="form-group ">
              Hora Início:<input type="time" class="form-control interior" />
            </div>

            <div class="form-group ">
              Horas Fim:<input type="time" class="form-control interior" />
            </div>
            <button type="submit" class="btn btn-primary" value="Entrar">Próximo</button>
            <a href="index.php" class="btn btn1 btn-primary horaServico">Voltar</a>
          </fieldset>
        </form>
      </div>
    </div>

    <?php
      $conteudo = ob_get_contents();
      ob_end_clean();
      include "layout.php";
    ?>

