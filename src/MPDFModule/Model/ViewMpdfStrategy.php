<?php

/**
 * @author Lucas Araujo <lucraraujo@gmail.com>
 * @version 1.0
 */

namespace MPDFModule\Model;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use MPDFModule\View\Strategy\MpdfStrategy;

class ViewMpdfStrategy implements FactoryInterface
{
    /**
     *
     * @param  ServiceLocatorInterface $serviceLocator
     * @return mpdfStrategy
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
		// Foi necessario incluir o arquivo mpdf.php porque estava dando erro ao usar o lazy proxy.
        require_once __DIR__ . '/../../../../../../vendor/mpdf/mpdf/mpdf.php';
		
        $mpdfRenderer = $serviceLocator->get('ViewMpdfRender');
        $mpdfStrategy = new MpdfStrategy($mpdfRenderer);

        return $mpdfStrategy;
    }
}
