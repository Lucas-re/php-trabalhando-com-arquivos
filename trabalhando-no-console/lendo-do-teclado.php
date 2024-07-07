<?php
    /**
     * o wrapper stdin, que significa standard input, é utilizado para pegar 
     * entradas do teclado 
     * e esses resources que começam com php:// o PHP ja fecham eles automaticamente
     */
    $teclado = fopen('php://stdin', 'r');

    $novoCurso = fgets($teclado);

    file_put_contents('lista-cursos.txt', "\n$novoCurso", FILE_APPEND);
