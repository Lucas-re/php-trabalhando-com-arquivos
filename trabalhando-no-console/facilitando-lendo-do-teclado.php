<?php
    /**
     * A constante STDIN é uma abertura do fopen com o wrapper stdin
     * e esses resources que começam com php:// o PHP ja fecham eles automaticamente
     */
    $novoCurso = fgets(STDIN);

    file_put_contents('lista-cursos.txt', "\n$novoCurso", FILE_APPEND);
