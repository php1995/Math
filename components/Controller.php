<?php


class Controller
{
    protected $current_name = 'index';
    protected $renderer = null;

    public function __construct($cname)
    {
        $this->current_name = $cname;
        $this->renderer = new Renderer();
    }

    public function renderView($data = array(), $name = '')
    {
        $this->renderer->setTemplatesDir('views');
        $this->renderer->renderTemplate($data, $name);
    }
}