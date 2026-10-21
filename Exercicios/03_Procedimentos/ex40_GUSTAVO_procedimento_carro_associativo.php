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
 Descritivo: Faca um procedimento que receba um array associativo de um carro (marca, modelo, ano) e imprima seus dados.
*******************************************************************************/

$carro = [
    "marca" => "BMW",
    "modelo" => "X1",
    "ano" => 2023
];

function exibirCarro($carro){
    foreach($carro as $chave => $valor){
        echo $chave. ": " . $valor . "\n";
    }
}

exibirCarro($carro);