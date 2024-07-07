<?php  
    /**
     * o wrapper stdout, que significa standard output, é utilizado para imprimir 
     * saídas do teclado 
     * e esses resources que começam com php:// o PHP ja fecham eles automaticamente
     */
    $saidaPadrao = fopen('php://stdout', 'w');
    fwrite($saidaPadrao, "ola mundo \n");
    /**
     * existe também a saida de erro que pode nos ajudar com tratamentos de logs
     * 
     */
    $saidaDeErro = fopen('php://stderr', 'w');
    fwrite($saidaDeErro, "Saida de erro \n");