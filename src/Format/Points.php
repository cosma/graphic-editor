<?php

namespace GraphicEditor\Format;

class Points extends FormatAbstract
{
    /**
     * @return array|mixed|resource
     */
    public function activateResource()
    {
        return [];
    }

    /**
     * @param array $point
     */
    public function add(array $point)
    {
        $this->resource[] = $point;
    }

}