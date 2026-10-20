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
 Descritivo: Crie um programa que peca ao usuario para adivinhar um numero (ex: 7) e continue pedindo ate que ele acerte.
*******************************************************************************/
$numero_aleatorio = rand(1, 10);
$loop = true;

while($loop){

    $numero = readline("Digite um numero:");
    if ($numero == $numero_aleatorio){
        $loop = false;
        break;   
    } else {
        echo "Errou tente novamente!\n";
    }

}

echo "Acertou!!\n";
