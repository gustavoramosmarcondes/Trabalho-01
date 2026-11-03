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
 Descritivo: Crie um menu de opcoes (1. Iniciar, 2. Parar, 3. Sair) e use do-while para mostrar o menu ate que o usuario escolha Sair.
*******************************************************************************/
<?php
do {
    echo "1. Iniciar<br>";
    echo "2. Parar<br>";
    echo "3. Sair<br>";

    $opcao = (int) readline("Escolha uma opção: ");

    switch ($opcao) {
        case 1:
            echo "Iniciando...<br>";
            break;

        case 2:
            echo "Parando...<br>";
            break;

        case 3:
            echo "Saindo...<br>";
            break;

        default:
            echo "Opção inválida!<br>";
    }

} while ($opcao != 3);
?>
