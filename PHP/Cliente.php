<?php

    require_once("Pessoa.php");

    class Cliente extends Pessoa{

        public function __construct(string $cpf,
         string $nome, 
         string $senha, 
         string $telefone, 
         Endereco $endereco, 
         string $nascimento){

            parent::__construct($cpf,
             $nome, 
             $senha,
              $telefone, 
              $endereco, 
              $nascimento);//Chamando a classe Pessoa
        }//Fim Construtor


    }//Fim da classe



?>