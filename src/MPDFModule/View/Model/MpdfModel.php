<?php

/**
 * @author Lucas Araujo <lucraraujo@gmail.com>
 * @version 1.0
 */

namespace MPDFModule\View\Model;

use Zend\View\Model\ViewModel;

class MpdfModel extends ViewModel
{

    /**
     * O PDF é enviado como um anexo para ser visualizado
     */
    const DESTINO_INLINE_NAVEGADOR  = 'I';
    /**
     * O PDF é enviado como um anexo para ser baixado pelo navegador
     */
    const DESTINO_DOWNLOAD_NAVEGADOR  = 'D';
    /**
     * O arquivo é salvo no sistema de arquivo do servidor
     */
    const DESTINO_SALVAR_EM_ARQUIVO  = 'F';
    /**
     * Retorna o documento como string.
     */
    const DESTINO_RETORNAR_COMO_STRING  = 'S';

    /**
     * @var array
     */
    protected $options = array(
        'paperSize' => 'a4',
        'paperOrientation' => 'portrait',
        'basePath' => '/',
        'fileName' => 'pdf',
        'destination' => self::DESTINO_DOWNLOAD_NAVEGADOR,
        'debug' => false,
    );
    
    /**
     * 
     * @var string
     */
    protected $captureTo = null;

    /**
     * @var bool
     */
    protected $terminate = true;
}