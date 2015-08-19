<?php

error_reporting(E_ERROR ^ E_PARSE);
ini_set('display_errors', 'On');

use helpers\DebugHelper;
use tests\StaticTest;
use tests\InheritanceTest;
use tests\TestManager;
use tests\testClasses\TestClass1;
use tests\testClasses\TestClass2;

spl_autoload_register(function ($class) {
    $className = end(explode("\\", $class));
    
    switch ($class) {
        case strstr($class, 'helpers') != FALSE:
            include "helpers/$className.php";
            break;
        case strstr($class, 'testClasses') != FALSE:
            include "tests/test_classes/$className.php";
            break;
        case strstr($class, 'tests') != FALSE:
            include "tests/$className.php";
            break;
    }
    
});


(new TestManager(new StaticTest(new TestClass1())))->runTests();
(new TestManager(new InheritanceTest(new TestClass2())))->runTests();
