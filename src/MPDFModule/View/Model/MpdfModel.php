<?php

/**
 * @author Thallison Morais <thallisonmorais@gmail.com>
 * @version 1.0
 */

namespace MPDFModule\View\Model;

use Zend\View\Model\ViewModel;

class MpdfModel extends ViewModel
{
    /**
     * @var array
     */
    protected $options = array(
        'paperSize' => 'A4',
        'paperOrientation' => 'portrait',
        'basePath' => '/',
        'fileName' => null
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