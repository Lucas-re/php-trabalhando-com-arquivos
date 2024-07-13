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
        $linha = [trim($curso), 'sim'];

        fwrite($arquivoCsv, implode(',', $linha));
    }

    /**
     * Aqui é feito a iteração onde cada curso do arquivo é salvo no arquivo csv
     * e é identificado como 'não, que não foi um curso criado pelo desenvolvedor
     */
    foreach($outrosCursos as $curso){
        $linha = [trim($curso), 'não'];

        fwrite($arquivoCsv, implode(',', $linha));
    }

    fclose($arquivoCsv);