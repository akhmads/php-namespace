<?php

/*function class_autoloader($class){include $class . '.php';}spl_autoload_register('class_autoloader');*/

include_once 'Indonesia.php';
include_once 'Amerika.php';

use Negara\Amerika\Person;

$Person = new \Negara\Indonesia\Person();
$Person->talk();
\Negara\Indonesia\talk();

$Person = new Person();
$Person->talk();
\Negara\Amerika\talk();
