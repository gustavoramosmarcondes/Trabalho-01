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
 Descritivo: Crie um procedimento mostrarTabuada que receba um numero e imprima sua tabuada de 1 a 10.
*******************************************************************************/

$numero = readline("Digite um número: ");

function mostrarTabuada($numero){
    for($i = 1; $i <= 10; $i++){
        $resultado = $numero * $i;
        echo $numero . " X " . $i . " = " . $resultado ."\n";
    }
}

mostrarTabuada($numero);