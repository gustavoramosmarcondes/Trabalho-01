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
 Descritivo: Crie um array de frutas. Escreva um codigo que verifique se a fruta Maca existe no array.
*******************************************************************************/

$frutas = ["Banana", "Maca", "Uva", "Laranja", "Pera"];

if (in_array("Maca", $frutas)) {
    echo "A fruta 'Maca' existe no array!";
} else {
    echo "A fruta 'Maca' não foi encontrada no array.";
}
//Este código verifica se a palavra "Maca" está presente dentro do array de frutas utilizando a função in_array().
?>
