<?php

/**
 * @author Lucas Araujo <lucraraujo@gmail.com>
 * @version 1.0
 */

namespace MPDFModule\Model;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use MPDFModule\View\Render\MpdfRender;

class ViewMpdfRender implements FactoryInterface
{
    /**
     *
     * @param  ServiceLocatorInterface $serviceLocator 
     * @return mpdfRenderer
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $viewManager = $serviceLocator->get('ViewManager');
        
        $mpdfRenderer = new MpdfRender();
        $mpdfRenderer->setResolver($viewManager->getResolver());
        $mpdfRenderer->setHtmlRenderer($viewManager->getRenderer());
        $mpdfRenderer->setEngine($serviceLocator->get('MpdfService'));

        return $mpdfRenderer;
    }
}