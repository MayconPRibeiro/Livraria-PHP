<?php

    require_once("Endereco.php");

    class Pessoa{
        private string $cpf;
        private string $nome;
        private string $senha;
        private string $telefone;
        private Endereco $endereco;
        private string $nascimento;

    

        public function __construct(string $cpf, string $nome, string $senha, string $telefone, Endereco $endereco, string $nascimento){

            $this->cpf       = $cpf;
            $this->nome      = $nome;
            $this->senha     = $senha;
            $this->telefone  = $telefone;
            $this->endereco  = $endereco;
            $this->nascimento = $nascimento;

        }//Fim Construtor


        public function __get(string $nomeVariavel){
            return $this->$nomeVariavel;
        }

        public function __set(string $nomeVariavel, string $valor) : void 
        {
            $this->nomeVariavel = $valor;
        }


        public function __toString() : string{
            return "CPF: ".$this->cpf.
            ", Nome: ".$this->nome.
            ", telefone: ".$this->telefone.
            ", Nascimento: ".$this->nascimento;
        }



    }//Fim da Classe Pessoa



?>