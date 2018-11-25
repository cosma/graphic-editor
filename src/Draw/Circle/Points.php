<?php

namespace GraphicEditor\Draw\Circle;

use GraphicEditor\Draw\DrawAbstract;

class Points extends DrawAbstract
{
    public function render()
    {
        $this->format->add([$this->shape->get('x') - $this->shape->get('radius'), $this->shape->get('y')]);
        $this->format->add([$this->shape->get('x') + $this->shape->get('radius'), $this->shape->get('y')]);
        $this->format->add([$this->shape->get('x'), $this->shape->get('y') - $this->shape->get('radius')]);
        $this->format->add([$this->shape->get('x'), $this->shape->get('y') + $this->shape->get('radius')]);
    }
}