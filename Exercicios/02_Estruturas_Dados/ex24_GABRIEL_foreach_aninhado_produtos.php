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
 Descritivo: Usando o array de produtos do exercicio 23, imprima o nome e o preco de cada produto.
*******************************************************************************/
$produtos = [
    [
        "nome"=> "Moletom",
        "preco"=>"129.90",
    ],
    [
        "nome"=> "Tênis",
        "preco"=>"390.00",
    ],
    [
        "nome"=> "Camiseta",
        "preco"=>"89.90",
    ],
    [
        "nome"=> "Boné",
        "preco"=>"59.90",
    ],
];

foreach ($produtos as $produto) {
    echo "Nome: " . $produto["nome"] . " | Preço: R$ " . $produto["preco"] . "<br>";
}
//Este código percorre o array de produtos com o foreach para exibir o nome e o preço de cada item formatado na tela.
?>
