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
 Descritivo: Crie um array com as notas de um aluno em 4 disciplinas e calcule a media.
*******************************************************************************/
    //O usuário irá informar a nota que tirou em cada disciplina, e será armazenado nesse array $notas.
    $notas = [
        //Nota em matemática
        [
            "disciplina"=> "Matemática",
            "nota"=>(float)readline("Digite a nota de matemática:"),
        ],
        //Nota em língua portuguesa
        [
            "disciplina"=> "Língua-portuguesa",
            "nota"=>(float)readline("Digite a nota de língua-portuguesa:"),
        ],
        //Nota em Biologia
        [
            "disciplina"=> "Biologia",
            "nota"=>(float)readline("Digite a nota de biologia:"),
        ],
        //Nota em Geografia
        [
            "disciplina"=> "Geografia",
            "nota"=>(float)readline("Digite a nota de geografia:"),
        ],
    ];
    print_r($notas);

    
    //variável que recebe o valor das notas em nossa estrutura de repetição
    $soma = 0;
    //Estrutura de repetição que vai guardar a somatória de notas das 4 disciplinas dentro de $soma.
    foreach($notas as $nota){
        $soma += $nota["nota"];
    }
    
    //Cálculo da média de notas das 4 disciplinas.
    $media = $soma/4;
    echo "A média de notas das quatro disciplinas é de: ",$media;
?>
