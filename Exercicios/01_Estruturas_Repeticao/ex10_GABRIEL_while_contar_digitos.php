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
 Descritivo: Crie um programa que conte quantos digitos tem um numero inteiro fornecido pelo usuario.
*******************************************************************************/

$numero = 12345;
$quantidade_digitos = strlen((string)$numero);

echo "O número $numero tem $quantidade_digitos dígitos.";
//Este código converte o número inteiro em texto e conta quantos caracteres ele possui para descobrir a quantidade de dígitos.
?>
