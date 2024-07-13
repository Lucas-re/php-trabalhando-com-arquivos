<?php
    /**
     * o metodo dir() é o metodo que instancia a classe Directory. Essa classe não é instanciada com o operador new
     * 
     * para este metodo podemos passar o '.' como parametro, que representa o diretório atual, e com isso teremos uma instancia
     * de diretórios
     */
    $diretorioAtual = dir('.');

    /**
     * exibi o diretório atual
     */
    echo $diretorioAtual->path . PHP_EOL; 

    /**
     * Aqui a interação é executada enquanto houver diretórios a ser exibido. O metodo read() ler o diretório e armazena em $arquivo
     * para ser exibido
     */
    while($arquivo = $diretorioAtual->read()){

        echo $arquivo . PHP_EOL;

    }