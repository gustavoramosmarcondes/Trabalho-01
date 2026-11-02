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
 Descritivo: Elabore uma funcao converterParaMaiusculas que receba uma string e a retorne em letras maiusculas.
*******************************************************************************/

//Abertura da função para converter uma string para letras maiúsculas.
function converterParaMaiusculas ($frase){
   return strtoupper($frase);
}

//Solicitação de frase para o usuário.
$frase = readline('Escreva uma frase: ');
//Convertemos a frase do usuário para maiuscula e guardamos em uma variável.
$fraseMaiuscula = converterParaMaiusculas($frase);
echo "Frase convertida para letras maiusculas -->   ", $fraseMaiuscula;
?>

