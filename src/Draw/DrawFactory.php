<?php

namespace GraphicEditor\Draw;

use GraphicEditor\Format\FormatAbstract;
use GraphicEditor\Shape\ShapeAbstract;

class DrawFactory
{
    /**
     * @param ShapeAbstract $shape
     * @param FormatAbstract $format
     * @return DrawAbstract
     */
    public function create(ShapeAbstract $shape, FormatAbstract $format)
    {
        try {
            $className = "GraphicEditor\\Draw\\" .
                (new \ReflectionClass($shape))->getShortName() . "\\" .
                (new \ReflectionClass($format))->getShortName();

        } catch (\ReflectionException $e) {
        }

        if (!class_exists($className)) {
            throw new \RuntimeException("Class {$className} is not implemented");
        }

        return new $className($shape, $format);
    }
}