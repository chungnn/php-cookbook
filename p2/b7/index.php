<?php
define('DS', DIRECTORY_SEPARATOR);
define('DOC_ROOT', dirname(__FILE__));

require_once DOC_ROOT . DS . 'square.php';

$s = new Square(8);

var_dump($s->area());
var_dump($s->perimeter());
