<?php

Namespace Domaci_3;

use Domaci_3\Renderable;

require_once 'interfejsi/renderable.php';

class MenuItem implements Renderable
{
    private $label;
    private $pageName;
    private $params;

    public function __construct($label,$pageName,$params)
    {
        $this->label = $label;
        $this->pageName = $pageName;
        $this->params = $params;
    }

    public function generateUrlQuery($params)
    {
        return http_build_query($params);
    }
    
    
    public function generateHref()
    {
        return 'href ="'. $this->$pageName . '/?' . generateUrlQuery($this->$params) . '"';
    }

    public function render()
    {
        return "<a " . $this->generateHref() . " \> " . $this->label . " </a>";
    }

}