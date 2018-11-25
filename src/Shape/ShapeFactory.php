<?php

namespace GraphicEditor\Shape;

class ShapeFactory
{
    /**
     * @param string $type
     * @param array $attributes
     * @return ShapeAbstract
     */
    public function create($type, array $attributes)
    {
        $className = "GraphicEditor\\Shape\\".ucfirst(strtolower($type));

        if (!class_exists($className)) {
            throw new \RuntimeException("Class {$className} is not implemented");
        }

        return new $className($attributes);
    }
}