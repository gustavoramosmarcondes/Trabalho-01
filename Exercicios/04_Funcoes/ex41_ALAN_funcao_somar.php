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
 Descritivo: Crie uma funcao chamada somar que receba dois numeros e retorne a soma deles.
*******************************************************************************/

function somar($numero1, $numero2)
{
    return $numero1 + $numero2;
}

$numero1 = 5;
$numero2 = 3;
echo "Soma: " . somar($numero1, $numero2) . PHP_EOL;
?>
