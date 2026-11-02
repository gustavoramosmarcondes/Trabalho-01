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
 Descritivo: Faca uma funcao gerarArrayPares que receba um numero n e retorne um array com todos os numeros pares de 0 ate n.
*******************************************************************************/

// Declara uma função que recebe um inteiro e retorna um array de inteiros.
//int $num é a variável de parâmetro da função que recebe apenas números inteiros.
//: array --> Função retorna apenas arrays.
function gerarArrayPares(int $num): array{
    
    // Cria um array vazio para armazenar os números pares encontrados.
    $listaNumPar = [];

    // Percorre todos os números inteiros começando em zero e indo até n.
    for ($i = 0; $i <= $num; $i++) {
        // Verifica se a divisão do número atual por 2 tem resto igual a zero.
        if ($i % 2 === 0) {
            // Adiciona o número par atual ao final do array.
            $listaNumPar[] = $i;
        }
    }

    // Entrega o array preenchido.
    return $listaNumPar;
    
}

// Lê o valor digitado pelo usuário e converte o texto para inteiro.
$numUsuario = (int) readline('Informe um número: ');

// Chama a função e guarda o array de números pares retornado.
$listaNumPar = gerarArrayPares($numUsuario);

// Exibe os números pares encontrados em formato de array.
print_r($listaNumPar);
?>

