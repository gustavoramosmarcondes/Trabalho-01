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
 Descritivo: Escreva uma funcao calcularAreaRetangulo que receba a largura e a altura e retorne a area.
*******************************************************************************/

function calcularAreaRetangulo($largura, $altura) {
    return $largura * $altura;
}

$area = calcularAreaRetangulo(5, 10);
echo "A área do retângulo é: $area";
//Este código define uma função que multiplica a largura pela altura recebidas como parâmetros e retorna o valor da área.
?>
