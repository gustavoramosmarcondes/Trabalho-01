<?php
/*******************************************************************************
 Curso: Engenharia de Software
 Disciplina: Linguagem e Tecnicas de Programacao
 Professor: Flores
 Turma: ESOFT-2
 Componentes:
          260081732 - Alan Cristian dos Santos Costa
          260071312 - Gabriel Felipe Albano Grendel
          260140792 - Gustavo Ramos Marcondes
          260052892 - Marcio Jose Aguiar Filho
          260103602 - Victor Asaf Antunes dos Santos
 Data: 03 de Novembro de 2026
 Descritivo: Crie um array de produtos, onde cada produto e um array associativo com nome e preco.
*******************************************************************************/
    $produtos = [
        //Primeiro produto
        [
            "nome"=> "Moletom",
            "preco"=>"129.90",
        ],

        //Segundo produto
        [
            "nome"=> "Tênis",
            "preco"=>"390.00",
        ],

        //Terceiro produto
        [
            "nome"=> "Camiseta",
            "preco"=>"89.90",
        ],

        //Quarto produto
        [
            "nome"=> "Boné",
            "preco"=>"59.90",
        ],
    ];

    //Exibindo os produtos 
    //print_r é usado para exibir arrays, diferente do echo que exibe somente textos simples.
    print_r($produtos);

?>
