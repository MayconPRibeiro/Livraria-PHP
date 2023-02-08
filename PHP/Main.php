<?php

    require_once("Pessoa.php");
    require_once("Livros.php");
    require_once("Cliente.php");
    require_once("Compra.php");
    require_once("Endereco.php");


    $enderecAllan = new Endereco(
        "Avenida Senador Vergueiro",
        "400",
        "Senacão",
        "Centro",
        "São Bernardo do Campo",
        "São Paulo",
        "SP",
        "Brasil",
        "02345000"
    );

    $clientAllan = new Cliente("12345678910","Allanzinho", "1234", "11988128798",$enderecAllan,"25/12/1995");

    $livro = new Livros("Teste de Livro", 15, 29.90);

    $compra = new Compra($clientAllan, $livro, 2);


    //echo $livro;
    echo $compra;



?>