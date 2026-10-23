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
 Descritivo: Usando o array de cidades do exercicio 16, imprima cada cidade em uma nova linha usando foreach.
*******************************************************************************/
    $cidades = ["Curitiba","São Paulo","Rio de Janeiro","Londrina","Joinvile"];
    
    //Loop para imprimir as 5 cidades da lista.
    foreach ($cidades as $cidade){
        echo $cidade. "\n";
    }
?>
