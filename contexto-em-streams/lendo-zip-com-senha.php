<?php

    /**
     * stream_context_create() é o metodo do php utilizado para criar o contexto a ser
     * utilizado no stream
     * 
     * o formato para criar o contexto é: em um array definimos - para qual wrapper esse contexto vai
     * valer e dentro dele as opções.
     */
    $contexto = stream_context_create([
        'zip' => [
            'password' => '1234'
        ]
    ]);

    echo file_get_contents('zip://contexto-em-streams/arquivos.zip#lista-cursos.txt', false, $contexto);