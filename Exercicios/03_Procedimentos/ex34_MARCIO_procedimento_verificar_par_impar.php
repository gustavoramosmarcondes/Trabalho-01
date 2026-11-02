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
 Descritivo: Elabore um procedimento verificarParImpar que receba um numero e imprima se ele e Par ou Impar.
*******************************************************************************/

//: void indica que a função não retorna nenhum valor. Ela apenas executa uma ação, nesse caso, imprime se é ímpar ou par.
//Se caso a função fosse retornar algum valor, usaria-se return no final dela.
function verificarParImpar(int $num): void{
    
    if ($num % 2 === 0) {
        echo "O número {$num} é par.";
    } else {
        echo "O número {$num} é ímpar.";
    }
}

$numero = (int) readline('Digite um número para verificar se é par ou ímpar: ');
verificarParImpar($numero);
?>
