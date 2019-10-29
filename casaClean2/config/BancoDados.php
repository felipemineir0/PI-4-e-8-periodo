<?php

	class BancoDados{

        private static $conexao;
        private static $conexaoLogin;

        public static function obterConexaoLogin(){
            

			//if( !isset($conexao)){
			if( isset($conexaoLogin) == false){
                
                $conexaoLogin = new PDO("mysql:dbname=projetologin;host=localhost","root","");
                $conexaoLogin->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
			}

            return $conexaoLogin;
		}

		public static function obterConexao(){
            

			//if( !isset($conexao)){
			if( isset($conexao) == false){

				$conexao = new PDO("mysql:dbname=casaclean;host=localhost","root","");
                $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
			}

            return $conexao;
		}


	}

?>