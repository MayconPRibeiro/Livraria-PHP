<?php


    require_once("Cliente.php");
    require_once("Livros.php");

    class Compra{
        protected Cliente $cliente;
        protected Livros $livros;
        protected int $quantidade;
        
        

        public function __construct(Cliente $cliente, Livros $livros, int $quantidade){
            $this->cliente = $cliente;
            $this->livros = $livros;
            $this->quantidade = $quantidade;
                   
            

        }//Fim construtor

        public function __get(string $valorVariavel){

            return $this->$valorVariavel;
            
        }

        public function __set(string $valorVariavel, $valor) : void
        {
            $this->valorVariavel = $valor;
        }

        
        public function __toString() : string{
            

            return "<br>Compra feita por ".$this->cliente.". <br> Nome do livro: ".$this->livros->nomeLivro.
            "<br>Preço unitário R$".$this->livros->preco.
            "<br> Preço total para ".$this->quantidade." Unidades selecionadas R$".($this->livros->preco) * $this->quantidade;

        }


    }//Fim da classe





?>