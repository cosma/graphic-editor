<?php

namespace GraphicEditor\Draw;

use GraphicEditor\Format\FormatAbstract;
use GraphicEditor\Shape\ShapeAbstract;

abstract class DrawAbstract
{
    /**
     * @var ShapeAbstract
     */
    protected $shape;

    /**
     * @var FormatAbstract
     */
    protected $format;

    /**
     * @param ShapeAbstract $shape
     * @param FormatAbstract $format
     */
    public function __construct(ShapeAbstract $shape, FormatAbstract $format)
    {
        $this->shape  = $shape;
        $this->format = $format;
    }

    abstract public function render();
}