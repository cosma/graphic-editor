<?php

use \GraphicEditor\GraphicEditor;
use \GraphicEditor\Shape\ShapeFactory;
use \GraphicEditor\Draw\DrawFactory;
use \GraphicEditor\Format\Binary;
use \GraphicEditor\Format\Points;

include_once "vendor/autoload.php";


$shapes = [
    [
        'type'   => 'circle',
        'params' => [
            'x' => 100,
            'y' => 75,
            'radius' => 50,
            'color' => [ 200, 100, 200],
            'border_size' => 30,
            'border_color' => [ 0, 100, 200]
        ]
    ],
    [
        'type'   => 'circle',
        'params' => [
            'x' => 300,
            'y' => 300,
            'radius' => 200,
            'color' => [ 50, 150, 220],
        ]
    ],
    [
        'type' => 'square',
        'params' => [
            'x' => 300,
            'y' => 50,
            'length' => 100,
            'color' => [ 250, 30, 10],
            'border_size' => 10,
            'border_color' => [ 100, 100, 10]
        ]
    ]
];

$graphicEditor = new GraphicEditor(new ShapeFactory(), new DrawFactory());

$graphicEditor->load($shapes);

$binaryResult = $graphicEditor->draw(new Binary(500, 500));
\imagepng($binaryResult, 'shapes.png');

$pointsResult = $graphicEditor->draw(new Points());
print_r($pointsResult);


