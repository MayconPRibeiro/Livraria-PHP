<?php

    class Livros{

    public string $nomeLivro;
    public int $estoque;
    public float $preco;
    

    public function __construct(string $nomeLivro, int $estoque, float $preco){
        $this->nomeLivro = $nomeLivro;
        $this->estoque = $estoque;
        $this->preco = $preco;
    }//Fim construtor

    public function __get(string $nomeVariavel){
        return $this->$nomeVariavel;
    }

    public function __set(string $nomeVariavel, string $valor) : void {
        $this->nomeVariavel = $valor; 
    }

    
    public function __toString() : string 
    {

        return "<br> Temos atualmente o livro ".$this->nomeLivro.", com ".$this->estoque." unidades disponíveis, preço unitário R$".$this->preco;

    }



    




    }//Fim da classe






?>