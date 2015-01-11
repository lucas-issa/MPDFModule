MPDFModule
============

Módulo para geração de PDF no zend framework2 utilizando o mpdf.

## Requerimentos
  - [Zend Framework 2](http://www.github.com/zendframework/zf2)

#### Instalação

  1. Adicione no seu arquivo `composer.json`:

     ```json
     {
         "require": {
             "barao/mpdf-module": "dev-master"
         }
     }
     ```
  2. Atualize o composer com o comando php composer.phar update ou composer.phar install
  3. Adicione no arquivo `config/application.config.php` onde registra os `módulos`: 

     ```php
     'MPDFModule',
     ```
