<?php


/**
 * Class Controller
 */
class Controller
{
    /**
     * @var string
     */
    protected $current_name = 'index';
    /**
     * @var Renderer|null
     */
    protected $renderer = null;

    /**
     * Controller constructor.
     * @param $cname
     */
    public function __construct($cname)
    {
        $this->current_name = $cname;
        $this->renderer = new Renderer();
    }

    /**
     * @param array $data
     * @param string $name
     */
    public function renderView($data = array(), $name = '')
    {
        $this->renderer->setTemplatesDir('views');
        $this->renderer->renderTemplate($data, $name);
    }
}