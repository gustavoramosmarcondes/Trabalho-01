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
 Descritivo: Faca um programa que solicite uma senha ao usuario. O programa so deve continuar quando a senha correta (1234) for digitada.
*******************************************************************************/

//LOOP para verificação de senha do usuário (senha correta 1234)

$senha = 0;

do{
    $senha = readline('Digite a senha para acessar o sistema: ');
    //utilizado o IF pois se o usuario digitar a senha correta, não aparece a mensagemn de senha incorreta.
    if($senha!=1234){ 
    echo 'SENHA INCORRETA, TENTE NOVAMENTE', PHP_EOL;
    }
}while($senha!= 1234);

echo 'Acesso liberado';
?>
