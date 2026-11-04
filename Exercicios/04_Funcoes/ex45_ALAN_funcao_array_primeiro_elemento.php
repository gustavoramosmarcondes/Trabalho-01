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
 Descritivo: Crie uma funcao obterPrimeiroElemento que receba um array e retorne seu primeiro elemento.
*******************************************************************************/

function obterPrimeiroElemento($itens)
{
    $primeiroElemento = null;

    if (isset($itens[0])) {
        $primeiroElemento = $itens[0];
    }

    return $primeiroElemento;
}

$frutas = ["maçã", "banana", "laranja"];
echo "Primeiro elemento: " . obterPrimeiroElemento($frutas) . PHP_EOL;
// Resumo: Foi criada uma função que recebe um array e retorna o primeiro elemento, se existir.
?>
