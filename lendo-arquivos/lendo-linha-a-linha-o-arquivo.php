<?php

    /**
     * fopen() é a função para abrir aquivo e ler, escrever...
     * 
     * ela recebe dois parametros: o primeiro é o arquivo que será aberto e 
     * o segundo indica o que será feito com o arquivo
     * 
     * essa função retorna um ponteiro para o arquivo aberto.
     */
    $arquivo = fopen('lista-cursos.txt', 'r');


    /**
     * aqui é criado uma interação para ler cada linha do arquivo
     * 
     * feof() é uma função que nos indica se estamos no final do arquivo
     * aberto.
     */
    while(!feof($arquivo)){

        /**
         * função fgets() serve para pegar uma string até o final da linha de 
         * determinado arquivo
         */
        $curso = fgets($arquivo);

        echo $curso;

    }

    /**
     * é uma boa pratica e sempre recomendado fechar o arquivo ao final da
     * manipulação com a função fclose()
     */
    fclose($arquivo);