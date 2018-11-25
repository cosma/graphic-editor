<?php

namespace GraphicEditor\Shape;

class Circle extends ShapeAbstract
{
    /**
     * @param array $attributes
     * @return bool
     */
    public function validate(array $attributes)
    {
        if (!isset($attributes['x']) || !isset($attributes['y'])) {
            throw new \LogicException("Please define 'x' and 'y' coordinates  for the center of the circle");
        }

        if (!isset($attributes['radius'])) {
            throw new \LogicException("Please define radius of the circle");
        }

        return true;
    }
}