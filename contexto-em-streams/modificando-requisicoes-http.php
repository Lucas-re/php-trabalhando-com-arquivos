<?php
    /**
     * no PHP podemos definir contextos ao trabalharmos com streams. Com contextos conseguimos 
     * passar informações a mais para para os dados que serão lidos ou enviados 
     */


    /**
     * stream_context_create() é o metodo do php utilizado para criar o contexto a ser
     * utilizado no stream
     * 
     * o formato para criar o contexto é: em um array definimos - para qual wrapper esse contexto vai
     * valer e dentro dele as opções.
     */
    $deleteContexto = stream_context_create([
        'http' => [
            'method' => 'DELETE',
            'header' => 'X-from: PHP'
        ]
    ]);

    $postContexto = stream_context_create([
        'http' => [
            'method' => 'POST',
            'header' => 'X-from: PHP\r\nContent-Type: text/plain',
            'content' => 'Teste do corpo' 
        ]
    ]);

    echo file_get_contents('https://httpbin.org/post', false, $postContexto);
