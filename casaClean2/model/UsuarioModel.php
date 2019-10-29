<?php

require 'config/BancoDados.php';

  class Usuario{
    public function funcaoConect(){
      $conect = new BancoDados();
      $pdo = $conect->obterConexao();
      $conectLog = new BancoDados();
      $pdo2 = $conectLog->obterConexaoLogin();
    }
      public $msgErro="";
      
      
      public function cadastrar($nome, $telefone, $email, $senha){
        global $pdo2;
        global $msgErro;

        $conectLog = new BancoDados();
        $pdo2 = $conectLog->obterConexaoLogin();

        $sql=$pdo2->prepare("SELECT id_usuario FROM usuario WHERE email = :e");
        $sql->bindValue(":e",$email);
        $sql->execute();
        if($sql->rowCount()>0){
            return false;
        }
        else {
            $sql=$pdo2->prepare("INSERT INTO usuario(nome,telefone,email,senha) VALUES(:n,:t,:e,:s)");
            $sql->bindValue(":n",$nome);
            $sql->bindValue(":t",$telefone);
            $sql->bindValue(":e",$email);
            $sql->bindValue(":s",md5($senha));
            $sql->execute();
            return true;
        }
      }
      public function logar($email, $senha){
        global $pdo2;
        global $msgErro;

        $conectLog = new BancoDados();
        $pdo2 = $conectLog->obterConexaoLogin();

        $sql=$pdo2->prepare("SELECT id_usuario FROM usuario WHERE email=:e AND senha=:s");
        $sql->bindValue(":e",$email);
        $sql->bindValue(":s",md5($senha));
        $sql->execute();
        if($sql->rowCount()>0){
           $dado=$sql->fetch();
           session_start();
           $_SESSION['id_usuario']=$dado['id_usuario'];
           return true;
        }
        else {
             return false;
        }
      }
  }

?>