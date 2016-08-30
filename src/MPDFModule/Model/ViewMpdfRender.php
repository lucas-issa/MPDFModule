<?php

/**
 * @author Lucas Araujo <lucraraujo@gmail.com>
 * @version 1.0
 */

namespace MPDFModule\Model;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use MPDFModule\View\Render\MpdfRender;
use Zend\View\Renderer\RendererInterface;
use Zend\View\Resolver\ResolverInterface;

class ViewMpdfRender implements FactoryInterface
{
    /**
     *
     * @param  ServiceLocatorInterface $serviceLocator 
     * @return mpdfRenderer
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
//        $viewManager = $serviceLocator->get('ViewManager');
        /** @var ResolverInterface $viewResolver */
        $viewResolver = $serviceLocator->get('ViewResolver');
        /** @var RendererInterface $viewRenderer */
        $viewRenderer = $serviceLocator->get('ViewRenderer');

        $mpdfRenderer = new MpdfRender();
        $mpdfRenderer->setResolver($viewResolver);
        $mpdfRenderer->setHtmlRenderer($viewRenderer);
        $mpdfRenderer->setEngine($serviceLocator->get('MpdfService'));

        return $mpdfRenderer;
    }
}