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
 Descritivo: Usando o array de numeros do exercicio 17, calcule e imprima a soma de todos os numeros com foreach.
*******************************************************************************/

$numeros = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$soma = 0;

foreach ($numeros as $numero) {
    $soma += $numero;
}

echo "A soma de todos os números é: $soma";
//Este código percorre o array de números utilizando o foreach para calcular e exibir a soma total de todos os elementos.
?>
