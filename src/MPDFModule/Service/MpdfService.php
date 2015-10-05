<?php

/**
 * @author Lucas Araujo <lucraraujo@gmail.com>
 * @version 1.0
 */

namespace MPDFModule\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use mPDF;

class MpdfService implements FactoryInterface
{

    const MPDF_DIR = 'data/mpdf/';
    const TEMP_DIR = self::MPDF_DIR . 'temp/';
    const TTFONTDATA_DIR = self::MPDF_DIR . 'ttfontdata/';
    const JPGRAPH_DIR = self::MPDF_DIR . 'jpgraph/';

    /**
     * Cria a instancia do mpdf
     * 
     * @param  ServiceLocatorInterface $serviceLocator 
     * @return PdfRenderer
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        if (!file_exists(self::MPDF_DIR)) {
            mkdir(self::MPDF_DIR, 0777, true);
        }
        if (!file_exists(self::TEMP_DIR)) {
            mkdir(self::TEMP_DIR, 0777, true);
        }
        if (!file_exists(self::TTFONTDATA_DIR)) {
            mkdir(self::TTFONTDATA_DIR, 0777, true);
        }
        if (!file_exists(self::JPGRAPH_DIR)) {
            mkdir(self::JPGRAPH_DIR, 0777, true);
        }

        define("_MPDF_TEMP_PATH", self::TEMP_DIR);
        define("_MPDF_TTFONTDATAPATH", self::TTFONTDATA_DIR);
        define("_JPGRAPH_PATH", self::JPGRAPH_DIR);
        return new mPDF();

    }
}