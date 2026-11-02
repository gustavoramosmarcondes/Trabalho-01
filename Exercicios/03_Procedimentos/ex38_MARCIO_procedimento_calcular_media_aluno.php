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
 Descritivo: Elabore um procedimento chamado calcularMediaAluno que receba duas notas e imprima a media e se o aluno foi Aprovado ou Reprovado.
*******************************************************************************/

// Declara o procedimento, que recebe duas notas decimais e não retorna um valor.
function calcularMediaAluno(float $nota1, float $nota2): void{
    // Soma as duas notas e divide o resultado por 2 para calcular a média.
    $media = ($nota1 + $nota2) / 2;

    // Exibe a média com duas casas decimais e vírgula como separador decimal.
    echo "Média: " , number_format($media, 2, ',') , PHP_EOL;

    // Verifica se a média atingiu o mínimo de 6,0 para aprovação.
    if ($media >= 6.0) {
        // Exibe esta mensagem quando a condição de aprovação é verdadeira.
        echo "Aluno aprovado.";
    } else {
        // Exibe esta mensagem quando a média é menor que 6,0.
        echo "Aluno reprovado.";
    }
}

// Solicita a primeira nota e converte o texto digitado para número decimal.
$nota1 = (float) readline('Digite a primeira nota: ');
// Solicita a segunda nota e converte o texto digitado para número decimal.
$nota2 = (float) readline('Digite a segunda nota: ');
// Chama o procedimento, enviando as duas notas digitadas como argumentos.
calcularMediaAluno($nota1, $nota2);
?>
