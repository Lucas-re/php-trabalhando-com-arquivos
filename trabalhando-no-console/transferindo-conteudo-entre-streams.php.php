<?php
    $cursos = fopen('zip://wrapper-e-filtros/arquivos.zip#lista-cursos.txt', 'r');

    /**
     * o metodo stream_copy_to_stream() tem a capacidade de copiar os dados de um stream para o outro
     */
    stream_copy_to_stream($cursos, STDOUT);