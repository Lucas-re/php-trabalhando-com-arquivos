<?php
    /**
     * Aqui abrimos os arquivos com o metodo file, onde cada linha é 
     * uma posição de um array
     */
    $meusCursos = file('lista-cursos.txt');
    $outrosCursos = file('escritor-de-cursos.txt');

    /**
     * Aqui criamos o novo arquivo que sera o CSV
     */
    $arquivoCsv = fopen('cursos.csv', 'w');

    /**
     * Aqui é feito a iteração onde cada curso do arquivo é salvo no arquivo csv
     * e é identificado como 'sim', que foi um curso criado pelo desenvolvedor
     */
    foreach($meusCursos as $curso){

        /**
         * utf8_decode(). Esse metodo tira uma string da tabela de caracteres utf-8 e coloca na tabela 
         * iso8859-1.
         */
        $linha = [trim(utf8_decode($curso)), 'sim'];

        /**
         * esse metodo adiciona um dado ao arquivo na formatado como CSV
         * passamos para ele o arquivo que sera escrito e o valor que ele irá
         * adicionar
         * 
         * podemos também definir qual o delimitador/separador e qual caracter que vai 
         * embrulhar as strings 
         */
        fputcsv($arquivoCsv, $linha, ';');
    }

    /**
     * Aqui é feito a iteração onde cada curso do arquivo é salvo no arquivo csv
     * e é identificado como 'não, que não foi um curso criado pelo desenvolvedor
     */
    foreach($outrosCursos as $curso){

        $linha = [trim(utf8_decode($curso)), 'não'];

        /**
         * esse metodo adiciona um dado ao arquivo na formatado como CSV
         * passamos para ele o arquivo que sera escrito e o valor que ele irá
         * adicionar
         * 
         * podemos também definir qual o delimitador/separador e qual caracter que vai 
         * embrulhar as strings 
         */
        fputcsv($arquivoCsv, $linha, ';');
    }

    fclose($arquivoCsv);


    /** 
     * Esse metodo ler uma linha do arquivo csv e faz o parse dela
     * trazendo como um array
    */
    // fgetcsv();