<?php

require_once 'config/BancoDados.php';

class ContratarModel{

      public $msgErro="";
      
      public function contratar($nome, $cep, $rua, $numero, $bairro,
       $complemento, $cidade, $estado, $email, $cpf, $RG){
        global $pdo;
        global $msgErro;

        $conect = new BancoDados();
        $pdo = $conect->obterConexao();

        $sql=$pdo->prepare("INSERT INTO endereco(Logradouro, CEP, Numero, Complemento, estado, Bairro)
         VALUES(:r, :ce, :n, :co, :e, :b)");
        $sql->bindValue(":r",$rua);
        $sql->bindValue(":ce",$cep);
        $sql->bindValue(":n",$numero);
        $sql->bindValue(":co",$complemento);
        $sql->bindValue(":e",$estado);
        $sql->bindValue(":b",$bairro);

        $sql->execute();

        $CodigoEndereco = $pdo->lastInsertId();

        $sql=$pdo->prepare("INSERT INTO pessoa(Nome, email, CPF, RG, CodigoEndereco)
         VALUES(:n, :e, :cp, :r, :co)");
        $sql->bindValue(":n",$nome);
        $sql->bindValue(":e",$email);
        $sql->bindValue(":cp",$cpf);
        $sql->bindValue(":r",$RG);
        $sql->bindValue(":co",$CodigoEndereco);

        $sql->execute();
        
     /*  $sql=$pdo->prepare("SELECT CodigoPessoa FROM pessoa WHERE Nome = :n");
        $sql->bindValue(":n",$nome);
        $sql->execute();
        if($sql->rowCount()>0){
            return false;
        }
        else {
            $sql=$pdo->prepare("INSERT INTO pessoa(nome) VALUES(:n)");
            $sql->bindValue(":n",$nome);
            return true;
        }

        $sql2=$pdo->prepare("SELECT CodigoEndereco FROM endereco WHERE Logradouro = :r");
        $sql->bindValue(":r",$rua);
        $sql->execute();
        if($sql->rowCount()>0){
            return false;
        }
        else {
            $sql=$pdo->prepare("INSERT INTO endereco(Logradouro, CEP, Numero, Complemento, estado) VALUES(:r, :c, :n, :c, :e)");
            $sql->bindValue(":r",$rua);
            $sql->bindValue(":c",$cep);
            $sql->bindValue(":n",$numero);
            $sql->bindValue(":c",$complemento);
            $sql->bindValue(":e",$estado);
            return true;
        }

        $sql3=$pdo->prepare("SELECT CodigoBairro FROM bairro WHERE NomeBairro = :n");
        $sql->bindValue(":n",$bairro);
        $sql->execute();
        if($sql->rowCount()>0){
            return false;
        }
        else {
            $sql=$pdo->prepare("INSERT INTO bairro(NomeBairro) VALUES(:n)");
            $sql->bindValue(":n",$bairro);
            return true;
        }


        } */



    }
}



?>
