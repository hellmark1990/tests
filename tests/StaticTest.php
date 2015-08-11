<?php

namespace tests;

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
        self::showInfo(__METHOD__, 'Can call public method in static manner.');
    }

    public function callPublicMethodAsStaticWithChanges() {
        $class = $this->testClass;
        $class::setPublicAttribute('value');
//        \helpers\DebugHelper::dd($class::getPublicAttribute());
        self::showInfo(__METHOD__, 'Can change non static data but only in static context.');
    }

    public function getStaticAttributeWithNonStaticMethod() {
        $class = $this->testClass;
        $class::$STATIC_ATTRIBUTE = 'value';
//        \helpers\DebugHelper::dd($this->testClass->getStaticAttribute());
        self::showInfo(__METHOD__, 'Can get.');
    }

}
