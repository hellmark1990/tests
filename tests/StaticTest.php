<?php

namespace tests;

use helpers\DebugHelper;
use tests\testClasses\TestClass1;

/**
 * Class StaticTest
 * @package tests
 * @property  TestClass1 $testClass
 */
class StaticTest extends Test {

    public function __construct($testClass) {
        $this->testClass = $testClass;
    }

    public function runAll() {
        $this->callStaticAsNonStaticMethod();
        $this->callPublicMethodAsStaticWithChanges();
        $this->callNonStaticAsStaticMethod();
        $this->getStaticAttributeWithNonStaticMethod();
    }

    public function callStaticAsNonStaticMethod() {
        $this->testClass->publicStaticMethod();
        self::showInfo(__METHOD__, 'Can call satic method as non static in static context.');   
    }

    public function callNonStaticAsStaticMethod() {
        $class = $this->testClass;
        $class::publicMethod();
        self::showInfo(__METHOD__, 'Can call public method in static context.');
    }

    public function callPublicMethodAsStaticWithChanges() {
        $class = $this->testClass;
        $class::setPublicAttribute('value');
        $class::setPrivateAttribute('value');
        DebugHelper::dd($class::getPrivateAttribute());
        self::showInfo(__METHOD__, 'Can change non static data but only in static context.');
    }

    public function getStaticAttributeWithNonStaticMethod() {
        $class = $this->testClass;
        $class::$STATIC_ATTRIBUTE = 'value';
        self::showInfo(__METHOD__, 'Can get.');
    }



}
