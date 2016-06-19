<?php

/**
 * @author Lucas Rafael Araujo Andrade<lucraraujo@gmail.com>
 * @version 1.0
 */

namespace MPDFModule;

return array(
    'view_manager' => array(
        'strategies' => array(
            'ViewMpdfStrategy'
        )
    ),
    'service_manager' => array(
        'shared' => array(
            'MpdfService' => false
        ),
        'factories' => array(
            'LazyServiceFactory' => 'Zend\ServiceManager\Proxy\LazyServiceFactoryFactory',
            'MpdfService'          => __NAMESPACE__ . '\Service\MpdfService',
            'ViewMpdfRender' => __NAMESPACE__ . '\Model\ViewMpdfRender',
            'ViewMpdfStrategy' => __NAMESPACE__ . '\Model\ViewMpdfStrategy',
        ),
        'delegators' => [
            'ViewMpdfRender' => ['LazyServiceFactory'],
        ],
    ),
    'lazy_services'   => [
        'class_map' => [
            'ViewMpdfRender' => __NAMESPACE__ . '\View\Render\MpdfRender',
        ],
//        'proxies_target_dir' => 'data/cache/servicesProxies',
//        'write_proxy_files' => true,
    ],

);
