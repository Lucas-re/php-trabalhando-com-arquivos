<?php
    $arquivoCursos = fopen('lista-cursos.txt', 'r');

    /**
     * Essa função adiciona um filtro ao stream. passamos para ela o arquivo e o filtro
     * que queremos aplicar 
     * 
     * Existem diversos filtros ja preparados para serem aplicados ou podemos criar nossos 
     * proprios filtros
     */
    stream_filter_append($arquivoCursos, 'string.toupper');

    /**
     * Aqui estamos lendo todo o conteudo do arquivo após ele passar pelo filtro com o fread
     * e exibindo o resultado
     */
    echo fread($arquivoCursos, filesize('lista-cursos.txt'));

    /**
     * é uma boa pratica e sempre recomendado fechar o arquivo ao final da
     * manipulação com a função fclose()
     */
    fclose($arquivoCursos);

    /**
     * stream_get_filters(), nos retorna os filtros proprios do php que podemos utilizar no stream
     */
    var_dump(
        stream_get_filters()
    );