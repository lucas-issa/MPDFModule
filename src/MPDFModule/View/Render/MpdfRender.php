<?php

/**
 * @author Thallison Morais <thallisonmorais@gmail.com>
 * @version 1.0
 */

namespace MPDFModule\View\Render;

use Zend\View\Renderer\RendererInterface as Renderer;
use Zend\View\Resolver\ResolverInterface as Resolver;
use mPDF;

class MpdfRender implements Renderer
{
    private $mpdf = null;
    private $resolver = null;
    private $htmlRenderer = null;
    
    public function setHtmlRender(Renderer $renderer)
    {
        $this->htmlRenderer = $renderer;
        return $this;
    }
    
    public function getHtmlRenderer()
    {
        return $this->htmlRenderer;
    }
    
    public function setEngine(mPDF $mpdf)
    {
        $this->mpdf = $mpdf;
        return $this;
    }
    
    public function getEngine()
    {
        return $this->mpdf;
    }
    
    /**
     * Renders values as a PDF
     *
     * @param  string|Model $name The script/resource process, or a view model
     * @param  null|array|\ArrayAccess Values to use during rendering
     * @return string The script output.
     */
    public function render($model, $values = null)
    {
        $html = $this->getHtmlRenderer()->render($model, $values);
        
        $paperSize = $model->getOption('paperSize');
        $paperOrientation = $model->getOption('paperOrientation');
        $basePath = $model->getOption('basePath');
        
        $mpdf = $this->getEngine();
        //$mpdf->set_paper($paperSize, $paperOrientation);
        //$mpdf->set_base_path($basePath);
        
        // escreve o conteudo no PDF
        $mpdf->WriteHTML($html);
        
        //Imprime o pdf
        return $mpdf->Output();
    }

    public function setResolver(Resolver $resolver)
    {
        $this->resolver = $resolver;
        return $this;
    }
}
