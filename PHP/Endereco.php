<?php

    class Endereco{
        private string $logradouro;
        private string $numero;
        private string $complemento;
        private string $bairro;
        private string $cidade;
        private string $estado;
        private string $UF;
        private string $pais;
        private string $CEP;



        public function __construct(string $logradouro, string $numero, string $complemento, string $bairro, string $cidade, string $estado, string $UF, string $pais, string $CEP){
            
            $this->logradouro = $logradouro;
            $this->numero = $numero;
            $this->complemento = $complemento;
            $this->bairro = $bairro;
            $this->cidade = $cidade;
            $this->estado = $estado;
            $this->UF = $UF;
            $this->pais = $pais;
        }//Fim do construtor

        public function getLogradouro() : string
        {
            return $this->logradouro;
        }

        public function setLogradouro(string $logradouro) : void
        {
            $this->logradouro = $logradouro;
        }


        public function getNumero() : string
        {
            return $this->numero;
        }

        public function setNumero(string $numero) : void
        {
            $this->numero = $numero;
        }


        public function getComplemento() : string
        {
            return $this->numero;
        }

        public function setComplemento(string $complemento) : void
        {
            $this->complemento = $complemento;
        }


        public function getBairro() : string
        {
            return $this->bairro;
        }

        public function setBairro(string $bairro) : void
        {
            $this->bairro = $bairro;
        }


        public function getCidade() : string
        {
            return $this->cidade;
        }

        public function setCidade(string $cidade) : void
        {
            $this->cidade = $cidade;
        }


        public function getEstado() : string
        {
            return $this->estado;
        }

        public function setEstado(string $estado) : void
        {
            $this->estado = $estado;
        }


        public function getUF() : string
        {
            return $this->UF;
        }

        public function setUF(string $UF) : void
        {
            $this->UF = $UF;
        }


        public function getPais() : string
        {
            return $this->pais;
        }

        public function setPais(string $pais) : void
        {
            $this->pais = $pais;
        }


    }//Fim da classe Endereco



?>