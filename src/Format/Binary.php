<?php

namespace GraphicEditor\Format;

class Binary extends FormatAbstract
{
    /**
     * @var integer
     */
    private $width;

    /**
     * @var integer
     */
    private $height;

    /**
     * @var array
     */
    private $backgroundColor;

    /**
     * @param int $width
     * @param int $height
     * @param array $backgroundColor white colour
     */
    public function __construct(int $width, int $height, array $backgroundColor = [255, 255, 255])
    {
        $this->width           = $width;
        $this->height          = $height;
        $this->backgroundColor = $backgroundColor;
    }

    /**
     * @return array|mixed|resource
     */
    public function activateResource()
    {
        $image = \imagecreatetruecolor($this->width, $this->height);
        $color = \imagecolorallocate(
            $image,
            $this->backgroundColor[0],
            $this->backgroundColor[1],
            $this->backgroundColor[2]
        );
        \imagefilledrectangle($image, 0, 0, $this->width, $this->height, $color);

        return $image;
    }
}