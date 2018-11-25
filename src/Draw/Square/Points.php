<?php

namespace GraphicEditor\Draw\Square;

use GraphicEditor\Draw\DrawAbstract;

class Points extends DrawAbstract
{
    public function render()
    {
        $this->format->add([$this->shape->get('x') , $this->shape->get('y')]);
        $this->format->add([$this->shape->get('x') - $this->shape->get('length'), $this->shape->get('y')]);
        $this->format->add([$this->shape->get('x'), $this->shape->get('y') + $this->shape->get('length')]);
        $this->format->add([$this->shape->get('x') - $this->shape->get('length'), $this->shape->get('y') + $this->shape->get('length')]);
    }
}