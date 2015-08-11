<?php

use helpers\DebugHelper;
use tests\StaticTest;
use tests\TestManager;
use tests\testClasses\TestClass1;

spl_autoload_register(function ($class) {
    $className = end(explode("\\", $class));
    
    switch ($class) {
        case strstr($class, 'helpers') != FALSE:
            include "helpers/$className.php";
            break;
        case strstr($class, 'testClasses') != FALSE:
//            var_dump($class);
            include "tests/test_classes/$className.php";
            break;
        case strstr($class, 'tests') != FALSE:
//            var_dump($class);
            include "tests/$className.php";
            break;
    }
    
});

//DebugHelper::dd(111);
//$test = new StaticTest();
//$test->callStaticAsAtribute();


(new TestManager(new StaticTest(new TestClass1())))->runTests();
