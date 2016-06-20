MPDFModule
============

Módulo para geração de PDF no zend framework2 utilizando o mpdf.

A instalação do MPDFModule utiliza o PHP Composer. Para mais informações sobre PHP Composer, por favor visite o site oficial [PHP Composer](http://getcomposer.org/).

## Requerimentos
  - [Zend Framework 2](http://www.github.com/zendframework/zf2)

#### Instalação

  1. Adicione no seu arquivo `composer.json`:

     ```json
     {
         "require": {
             "lucas.issa/mpdf-module": "dev-master"
         }
     }
     ```
  2. Atualize o composer com o comando php composer.phar update ou composer.phar install
  3. Adicione no arquivo `config/application.config.php` onde registra os `módulos`:

     ```php
     'MPDFModule',
     ```

## Exemplo de utilização

```php
<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use MPDFModule\View\Model\MpdfModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $mpdf = new MpdfModel();
        $mpdf->setOption('paperSize', 'A3'); // padrão "A4"
        $mpdf->setOption('paperOrientation', 'landscape'); // Padrão "portrait"
        return $mpdf;
    }
}
```
