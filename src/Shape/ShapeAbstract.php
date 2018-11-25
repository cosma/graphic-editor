<?php

namespace GraphicEditor\Shape;

abstract class ShapeAbstract
{
    /**
     * @var array
     */
    protected $attributes = [];

    /**
     * @param array $attributes
     */
    final public function __construct(array $attributes)
    {
        if ($this->validate($attributes)) {
            $this->attributes = $attributes;
        }
    }

    /**
     * @param array $attributes
     * @return bool
     */
    abstract public function validate(array $attributes);

    /**
     * @param string $key
     * @return bool
     */
    public function has($key)
    {
        return array_key_exists($key, $this->attributes);
    }

    /**
     * @param $key
     * @return mixed
     */
    public function get($key)
    {
        if(!$this->has($key)){
            throw new \LogicException("Attribute {$key} is not defined");
        }

        return $this->attributes[$key];
    }
}