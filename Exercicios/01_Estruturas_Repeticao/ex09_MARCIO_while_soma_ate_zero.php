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
 Descritivo: Escreva um programa que leia numeros do usuario ate que ele digite 0 e, no final, mostre a soma de todos os numeros digitados.
*******************************************************************************/

//Loop que soma todos os números digitados pelo usuário e mostra o valor no final.
//Loop para quando o usuário digitar 0.
$soma = 0;
$numUsu = '';

while($numUsu !=0 ){
    $numUsu = readline('Digite um número (digite 0 para encerrar):');
    $soma += $numUsu;
}

echo 'A soma de todos os números digitados é de: ', $soma;
?>
