<?php
    /**
     * SplFileObject() é um objeto de arquivo. passamos para ele como parametro o nome do arquivo que queremos utilizar.
     * Por padrão o modo de leitura 'r' ja é utilizado na instancia, caso não seja especificado um modo como parametro. 
     * 
     * Com ele temos acesso a informações interessantes do arquivo, como a data de criação dele, o tamnho do arquivo dentre
     * outras coisas.
     */
    $arquivoCursosCsv = new SplFileObject('cursos.csv');

    /**
     * Aqui temos a interação com o objeto arquivo. O metodo eof() tras a ultima linha do arquivo, ou seja, enquanto não for 
     * o final do arquivo, o metodo fgetcsv() com o delimitador ';' tras a linha do arquivo e será exebido somente um indice 
     * dessa linha 
     */
    while(!$arquivoCursosCsv->eof()){
        $linha = $arquivoCursosCsv->fgetcsv(';');
        echo $linha[0] . PHP_EOL;
    }