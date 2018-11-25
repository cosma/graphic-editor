<?php

namespace GraphicEditor\Draw\Circle;

use GraphicEditor\Draw\DrawAbstract;

class Binary extends DrawAbstract
{
    public function render()
    {
        if ($this->shape->has('border_size')) {
            $borderSize = $this->shape->get('border_size');

            $borderColor = [0, 0, 0];
            if ($this->shape->has('border_color')) {
                $borderColor = $this->shape->get('border_color');

            }

            $borderColor = \imagecolorallocate(
                $this->format->getResource(),
                $borderColor[0],
                $borderColor[1],
                $borderColor[2]
            );

            \imagefilledellipse(
                $this->format->getResource(),
                $this->shape->get('x'),
                $this->shape->get('y'),
                $this->shape->get('radius') + $borderSize,
                $this->shape->get('radius') + $borderSize,
                $borderColor
            );
        }

        $color = [0, 0, 0];
        if ($this->shape->has('color')) {
            $color = $this->shape->get('color');
        }

        $color = \imagecolorallocate($this->format->getResource(), $color[0], $color[1], $color[2]);

        \imagefilledellipse(
            $this->format->getResource(),
            $this->shape->get('x'),
            $this->shape->get('y'),
            $this->shape->get('radius'),
            $this->shape->get('radius'),
            $color
        );
    }
}