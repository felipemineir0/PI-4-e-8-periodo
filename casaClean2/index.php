 <?php
  ob_start();
  ?>
    <link rel="stylesheet" type="text/css" href="css/index.css" />
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="imagens/casa4.png" alt="First slide" />
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="imagens/casa5.png" alt="Second slide" />
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="imagens/casaclean.png" alt="Third slide" />
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#carouselExampleIndicators"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <section id="serv">
      <div class="container">
        <h1 class="tituloServico">Serviços que oferecemos</h1>
        <div class="row">
          <div class="col-md-4 servicos">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="imagens/faxineira.jpg" alt="Imagem de capa do card" />
              <div class="card-body">
                <h5 class="card-title">Faxineira</h5>
                <p class="card-text">
                  Um exemplo de texto rápido para construir o título do card e fazer preencher o
                  conteúdo do card.
                </p>
                <a href="datahora.php" class="btn btn-primary">4h ou 8h de Serviço</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 servicos">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="imagens/passadeira.jpg" alt="Imagem de capa do card" />
              <div class="card-body">
                <h5 class="card-title">Passadeira</h5>
                <p class="card-text">
                  Um exemplo de texto rápido para construir o título do card e fazer preencher o
                  conteúdo do card.
                </p>
                <a href="datahora.php" class="btn  btn-primary">4h ou 8h de Serviço</a>
              </div>
            </div>
          </div>

          <div class="col-md-4 servicos">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="imagens/cozinheira.jpg" alt="Imagem de capa do card" />
              <div class="card-body">
                <h5 class="card-title">Cozinheira</h5>
                <p class="card-text">
                  Um exemplo de texto rápido para construir o título do card e fazer preencher o
                  conteúdo do card.
                </p>
                <a href="datahora.php" class="btn btn1 btn-primary"
                  >Contratado por hora de serviço</a
                >
              </div>
            </div>
          </div>
        </div>

        <br />

        <div class="row">
          <div class="col-md-4 servicos">
            <div class="card" style="width: 18rem;">
              <img
                class="card-img-top"
                src="imagens/churrasqueiro.jpg"
                alt="Imagem de capa do card"
              />
              <div class="card-body">
                <h5 class="card-title">Churrasqueiro</h5>
                <p class="card-text">
                  Um exemplo de texto rápido para construir o título do card e fazer preencher o
                  conteúdo do card.
                </p>
                <a href="datahora.php" class="btn btn1 btn-primary horaServico"
                  >Contratado por hora de serviço</a
                >
              </div>
            </div>
          </div>
          <div class="col-md-4 servicos">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="imagens/bomvizinho.jpg" alt="Imagem de capa do card" />
              <div class="card-body">
                <h5 class="card-title">Bom Vizinho</h5>
                <p class="card-text">
                  Um exemplo de texto rápido para construir o título do card e fazer preencher o
                  conteúdo do card.
                </p>
                <a href="datahora.php" class="btn btn1 btn-primary horaServico"
                  >Contratado por hora de serviço</a
                >
              </div>
            </div>
          </div>
          <div class="col-md-4 servicos">
            <div class="card" style="width: 18rem;">
              <img
                class="card-img-top"
                src="imagens/passeadordecaes.jpg"
                alt="Imagem de capa do card"
              />
              <div class="card-body">
                <h5 class="card-title">Passeador de Cães</h5>
                <p class="card-text">
                  Um exemplo de texto rápido para construir o título do card e fazer preencher o
                  conteúdo do card.
                </p>
                <a href="datahora.php" class="btn btn1 btn-primary horaServico"
                  >Contratado por hora de serviço</a
                >
              </div>
            </div>
          </div>
        </div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="margin-top: 20px">
  Confira a Tabela de Preços
</button>
      </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tabela de Preços</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <?php
        ob_start();
        $tabela = ob_get_contents();
        ob_end_clean();
        include "tabela.php";
        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

    </section>

    <?php
        $conteudo = ob_get_contents();
        ob_end_clean();
        include "layout.php";
    ?>
