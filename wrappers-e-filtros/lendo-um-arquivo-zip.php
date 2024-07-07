<?php
    /**
     * Passamos o wrapper/protocolo zip:// para ler um dos arquivos que estão
     * dentro de arquivos.zip e atraves da # acessamos o arquivo que esta dentro
     * do pacote zipado.
     * 
     * para extrair o conteudo do arquivo utilizamos o metodo file_get_contents()
     */
    echo file_get_contents('zip://wrappers-e-filtros/arquivos.zip#lista-cursos.txt');
    