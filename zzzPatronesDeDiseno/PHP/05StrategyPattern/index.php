<?php
// index.php
include_once 'Output.php';
include_once 'Square.php';
include_once 'Circle.php';
include_once 'Cube.php';

$input = 10;

$output = new Output(new Square());
echo 'Square of 10: ' . $output->display($input) . '<br/>';

$output->setStrategy(new Circle());
echo 'Circle of 10: ' . $output->display($input) . '<br/>';

$output->setStrategy(new Cube());
echo 'Cube of 10: ' . $output->display($input);


