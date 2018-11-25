<?php

namespace GraphicEditor\Shape;

class Square extends ShapeAbstract
{
    /**
     * @param array $attributes
     * @return bool
     */
    public function validate(array $attributes)
    {
        if (!isset($attributes['x']) || !isset($attributes['y'])) {
            throw new \LogicException("Please define 'x' and 'y' coordinates for the left top margin of the square");
        }

        if (!isset($attributes['length'])) {
            throw new \LogicException("Please define length of the square");
        }

        return true;
    }

}