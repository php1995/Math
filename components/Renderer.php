<?php


class Renderer
{
    private $templates_dir = 'views';
    private $root_template = '';

    public function __construct()
    {
    }

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

    public function loadTemplate($template, $data = array())
    {
        $result = $data;
        include $this->templates_dir . '/' . $template . '.php';
    }

    public function renderTemplate($data = array(), $name = '')
    {
        $rtp = !empty($name) ? $name : $this->root_template;
        $this->loadTemplate($rtp, $data);
    }
}