<?php

namespace GraphicEditor\Format;

abstract class FormatAbstract
{
    /**
     * @var array|mixed|resource
     */
    protected $resource = null;

    /**
     * @return array|mixed|resource
     */
    abstract protected function activateResource();

    /**
     * @return array|mixed|resource
     */
    public function getResource()
    {
        if (is_null($this->resource)) {
            $this->resource = $this->activateResource();
        }

        return $this->resource;
    }
}