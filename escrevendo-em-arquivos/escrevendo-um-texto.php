<?php
    /**
     * o modo de abertura para escrita 'W', caso o arquivo não exista, ele cria 
     * o arquivo, caso ele ja exista ele abre o arquivo para escrita.
     * ao abrir o arquivo ele coloca o cursor no inicio do arquivo. com isso ele
     * sempre vai sobreescrever o arquivo.
     * 
     * o modo de abertura 'A', faz exatamente a mesma coisa que o 'W', porém ele
     * adiciona o cursor no final do arquivo
     */
    $arquivo = fopen('escritor-de-cursos.txt', 'a');

    $curso = 'Design patterns - PHP II'.PHP_EOL;

    /**
     * fwite(); é a função utilizada para escrever algo em um arquivo
     * ela recebe como parametro o arquivo aberto para escrita e o conteudo
     * que será escrito no arquivo.
     */
    fwrite($arquivo, $curso);

    /**
     * é uma boa pratica e sempre recomendado fechar o arquivo ao final da
     * manipulação com a função fclose()
     */
    fclose($arquivo);