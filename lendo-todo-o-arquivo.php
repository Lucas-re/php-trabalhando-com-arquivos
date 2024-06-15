<?php

    /**
     * fopen() é a função para abrir aquivo e ler, escrever...
     * 
     * ela recebe dois parametros: o primeiro é o arquivo que será aberto e 
     * o segundo indica o que será feito com o arquivo
     * 
     * essa função retorna um ponteiro para o arquivo aberto.
     */
    $arquivo = fopen('lista-cursos.txt', 'r');

    /**
     * filesize(); é uma função que nos retorna o tamanho de um arquivo
     * é passado, como parametro, pra ele o nome do arquivo
     * e ele nos retorna a quantidade de bytes/caracteres que o arquivo tem
     */

    /**
     * com isso conseguimos ler o arquivo todo sem precisar de looping para ler 
     * linha a linha 
     * >>>> PORÉM, ESSE METODO OCUPA A MEMORIA DO SISTEMA DE UMA SÓ VEZ E NEM SEMPRE PODE 
     * FUNCIONAR. POR PADRÃO O LIMITE DE MEMORIA DO PHP É DE 128MB, COM ISSO SE O ARQUIVO FOR MAIOR 
     * QUE ISSO, ESSE METODO NÃO IRÁ CONSEGUI O-LER. 
     */
    $tamanhoArquivo = filesize('lista-cursos.txt');

    /**
     * fread() é uma função que serve para ler um arquivo todo
     * ela recebe dois parametros: o primeiro é o arquivo que queremos ler
     * e o segundo é a quantidade de caracteres que queremos ler.
     */
    $cursos = fread($arquivo, $tamanhoArquivo);
    echo $cursos;

    /**
     * é uma boa pratica e sempre recomendado fechar o arquivo ao final da
     * manipulação com a função fclose()
     */
    fclose($arquivo);