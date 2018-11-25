<?php

namespace GraphicEditor;

use GraphicEditor\Draw\DrawFactory;
use GraphicEditor\Shape\ShapeAbstract;
use GraphicEditor\Format\FormatAbstract;
use GraphicEditor\Shape\ShapeFactory;

class GraphicEditor
{
    /**
     * @var ShapeFactory
     */
    private $shapeFactory;

    /**
     * @var DrawFactory
     */
    private $drawFactory;

    /**
     * @var ShapeAbstract[]
     */
    private $shapes = [];

    /**
     * @param ShapeFactory $shapeFactory
     * @param DrawFactory $drawFactory
     */
    public function __construct(ShapeFactory $shapeFactory, DrawFactory $drawFactory)
    {
        $this->shapeFactory = $shapeFactory;
        $this->drawFactory = $drawFactory;
    }

    /**
     * @param array $shapes
     * @throws \Exception
     */
    public function load(array $shapes)
    {
        foreach ($shapes as $shape) {
            if(!isset($shape['type']) || !isset($shape['params'])){
                throw new \Exception("Please define type and params of a shape");
            }
            $this->shapes[] = $this->shapeFactory->create($shape['type'], $shape['params']);
        }
    }

    /**
     * @param FormatAbstract $format
     * @return array|mixed|resource
     */
    public function draw(FormatAbstract $format)
    {
        foreach ($this->shapes as $shape) {
            $draw = $this->drawFactory->create($shape, $format);
            $draw->render();
        }

        return $format->getResource();
    }
}