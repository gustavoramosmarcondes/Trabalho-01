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
 Descritivo: Escreva uma funcao fatorial que receba um numero e retorne seu fatorial.
*******************************************************************************/

$numero = readline("Digite um número: ");

function fatorial($num){
    $fatorial_resultado = 1;
    for ($i = $num; $i >= 1; $i--) {
        $fatorial_resultado *= $i;
    }
    return $fatorial_resultado;
}

$resultado = fatorial($numero);

echo $resultado;