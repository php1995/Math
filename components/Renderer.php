<?php


/**
 * Class Renderer
 */
class Renderer
{
    /**
     * @var string
     */
    private $templates_dir = 'views';
    /**
     * @var string
     */
    private $root_template = '';

    /**
     * Renderer constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param $dir
     */
    public function setTemplatesDir($dir)
    {
        $dir = ROOT . '/' . $dir;
        if (is_dir($dir)) {
            $this->templates_dir = $dir;
        } else {
            echo 'Templates dir does not exists! Exiting.';
            exit;
        }
    }

    /**
     * @param $template
     * @param array $data
     */
    public function loadTemplate($template, $data = array())
    {
        $result = $data;
        include $this->templates_dir . '/' . $template . '.php';
    }

    /**
     * @param array $data
     * @param string $name
     */
    public function renderTemplate($data = array(), $name = '')
    {
        $rtp = !empty($name) ? $name : $this->root_template;
        $this->loadTemplate($rtp, $data);
    }
}