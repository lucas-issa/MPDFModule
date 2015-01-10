<?php

/**
 * @author Thallison Morais <thallisonmorais@gmail.com>
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
            'MPDF' => false
        ),
        'factories' => array(
            'MPDF'          => __NAMESPACE__ . '\Service\MpdfService',
            'ViewMpdfRender' => __NAMESPACE__ . '\Model\ViewMpdfRender',
            'ViewMpdfStrategy' => __NAMESPACE__ . '\Model\ViewMpdfStrategy',
        )
    ),
);