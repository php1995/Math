<?php

/**
 * Class ModelRectangle
 */
class ModelRectangle
{
    /**
     * @var int
     */
    public $width = 0;
    /**
     * @var int
     */
    public $height = 0;

    /**
     * ModelRectangle constructor.
     * @param $width
     * @param $height
     */
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * @return float|int
     */
    public function getArea()
    {
        return $this->height * $this->width;
    }

    /**
     * @return float|int
     */
    public function getPerimeter()
    {
        return ($this->width * $this->height) * 2;
    }

    /**
     * @return string
     */
    public function isSquare()
    {
        if ($this->width == $this->height) {
            return "Yes";
        } else {
            return "No";
        }
    }
}