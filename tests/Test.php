<?php

namespace tests;

abstract class Test {

    public $testClass;

    public abstract function runAll();

    public static function showInfo($method, $message = '') {
        echo '</br>';
        echo '<b>';
        echo $method . ':';
        echo '</b>';
        echo '</br>';
        echo $message;
        echo '</br>';
    }

}
