# Só podemos trabalhar com manipulações de arquivos que estão dentro da maquina local?
## O PHP trata tudo como se fosse um arquivo da mesma forma como o linux faria.
## No linux, um diretório é tratado como um arquivo, assim como um novo dispositivo, como um pendrive, é tratado como um arquivo
## No PHP um conceito semelhante é utilizado, se fizermos uma requisição HTTP para um site; essa requisição pode ser feita da mesma forma como é feita para um arquivo.
## Conseguimos trazer dados de várias outras fontes diferentes de arquivos, tratanto, exatemante, como é tratados os arquivos.
## E alguns dos protocolos suportados pelo PHP estão em: [PHP Wrappers](https://www.php.net/manual/en/wrappers.php)
## Com isso conseguimos acessar arquivos, caminho na rede através de http, ssh, enviar arquivos com o ftp
## Isso é possivel por conta dos Wrappers do PHP. O PHP possui varias classes que consegue tratar cada um dos protocolos.