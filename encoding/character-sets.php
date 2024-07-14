<?php
    /**
     * O computador só salva dados em formatos binários, 0 e 1 então precisamos, de alguma forma, mapear/representar 
     * as letras como dados binários 
     * 
     * a tabela ASCII define os caracteres mapeados para determinados numeros. porém nesta tabela não existe letras acentuadas.
     * E foi criado varias tabelas ASCII para cada idioma com seus respectivos caracteres, porém isso não facilita a comunicação
     * entre outras pessoas com idiomas diferentes.
     * 
     * Pensando nisso foi criado uma tabela com todos esses caracteres e chamada de UNICODE, porém essa tabela mapeia os caracteres 
     * para codepoint, ou seja, um código que identifica dentro da tabela UNICODE esse caracter. E fica a critério a cada um dos encodings
     * ou charsets (conjunto de caracteres), para implementar essa tabela unicode. E dentro desses conjuntos de caracteres existe a própria tabela
     * ASCII que é limitada.
     * 
     * Mas junto com essa tabela UNICODE surgiu o utf-8, que é um encoding que possui esses caracteres; e depois com a expansão dessa tabela veio o utf-16 
     * e no windows existe uma implementação dessa mesma tabela que é windows 1252.
     */