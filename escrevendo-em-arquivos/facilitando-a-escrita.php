<?php
    $curso = 'Design patterns - PHP I'.PHP_EOL;

    /**
     * Esse metodo abre o arquivo para escrita ou o-cria, caso ele 
     * não exista.
     * 
     * nela passamos como parametro o arquivo para escrita e o conteudo
     * que será escrito no arquivo
     * 
     * como terceiro parametro passamos flags que podemos informar que, ao
     * escrever no arquivo, não sobreescreva o conteudo que ja foi escrito 
     * anteriormente.
     */
    file_put_contents('escritor-de-cursos.txt', $curso, FILE_APPEND);
