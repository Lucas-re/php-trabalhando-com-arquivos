<?php  
    /**
     * A constante STDOUT é uma abertura do fopen com o wrapper stdout
     * e esses resources que começam com php:// o PHP ja fecham eles automaticamente
     */
    fwrite(STDOUT, "ola mundo \n");
    /**
     * existe também a saida de erro que pode nos ajudar com tratamentos de logs
     * A constante STDERR é uma abertura do fopen com o wrapper stderr
     */
    fwrite(STDERR, "Saida de erro \n");