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
 Descritivo: Elabore uma funcao ehPrimo que receba um numero e retorne true se ele for primo e false caso contrario.
*******************************************************************************/

$numero = readline("Digite um numero: ");
function ehPrimo($num){
        if ($num <= 1) {
            return false;
        }

        $divisores = 0;
        for ($i = 1 ; $i <= $num; $i++){
            if ($num % $i == 0){
                $divisores ++;
            }
        }
        if ($divisores == 2){
            return true;
        } else {
            return false;
        }

}

$resultado = ehPrimo($numero);

if ($resultado){
    echo $numero . " é primo (true)\n";
} else {
    echo $numero . " não é primo (false)\n";
}