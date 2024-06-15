<?php
    /**
     * file_get_contents(), ela recebe varios parametros mas o unico que é
     * obrigatório é o nome do arquivo.
     * ela abre o arquivo, busca todo o conteudo do arquivo e retornar como
     * uma string e fechar o arquivo
     */
 
    $cursos = file_get_contents('lista-cursos.txt');
    echo $cursos;

    /**
     * file(); ela ler o arquivo todo e cada linha do arquivo é retornado 
     * em um indice de um array
     * ela recebe varios parametros mas o unico que é
     * obrigatório é o nome do arquivo.
     */
    $aCursos = file('lista-cursos.txt');
    var_dump($aCursos);