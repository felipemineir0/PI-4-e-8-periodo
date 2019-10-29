
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Área ADM Casa Clean</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/layout.css" />

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/freelancer.js"></script>
  </head>
  <body>
  <nav class="navbar fixed-top navbar-dark navbar-expand-lg">
      <div class="container">
        <a href="index.php">
          <img class="logo" src="imagens/logo3.png" alt="Logomarca" />
        </a>

        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navcinema"
          aria-controls="navcinema"
          aria-label="Toggle navigation"
          aria-expanded="false"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navcinema">
          <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="datahora.php">Serviços</a></li>
            <li class="nav-item"><a class="nav-link" href="emprego.php">Vagas de Emprego</a></li>
            <li class="nav-item"><a class="nav-link" href="sobre.php">Sobre</a></li>
            <li class="nav-item transicao"><a class="nav-link" href="#contato">Contato</a></li>
           
          </ul>
        </div>
      </div>
    </nav>
    <table>
        <tr>
            <td>Email</td>
            <td>Senha</td>
            <td>Status</td>
            <td>Ips</td>
        </tr>
        <?php
        if($_SESSION['email'==true]){
            echo "<script>alert('Bem Vindo a área administrativa!'</script>";
        }else{
            echo "<script>alert('Você não tem acesso a esta pagina!'</script>";
            echo "<script>location.href='index.php'</script>";
        }
           $host="mysql:dbname=adm;host=localhost";
           $user="root";
           $pass="";
           
           try{
               $pdo=new PDO($host,$user,$pass);
           }catch(PDOException $e){
               echo "Falha:". $e->getMessage();
           }
           $sql=$pdo->query("SELECT * FROM adm");
           foreach ($sql as $variavel){
            echo "<tr>";
            echo "<td>".$variavel['email']."</td>";
            echo "<td>".$variavel['senha']."</td>";
            echo "<td>".$variavel['status']."</td>";
            echo "<td>".$variavel['ip']."</td>";
            echo '<td><a href="excluir.php?id='.$variavel['id'].' ">Excluir</a></td>';
            echo "</tr>";
           }
           
              
         ?>
    </table>

    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 contato" id="contato">
            <h3>Contato</h3>

            <ul>
              <li>Rua Major Gote, 100</li>
              <li>Caiçaras, Patos de Minas-MG</li>
              <li>(34) 9999-9999</li>
              <li>casaclean@casaclean.com.br</li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
      </body>
</html>