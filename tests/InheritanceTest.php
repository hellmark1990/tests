<?php

namespace tests;

use helpers\DebugHelper;
use tests\testClasses\TestClass1;

/**
 * Class InheritanceTest
 * @package tests
 * @property   $testClass
 */
class InheritanceTest extends Test {

    public function __construct($testClass) {
        $this->testClass = $testClass;
    }

    public function runAll() {
        $this->callOverriddenMethodThatChangeChildField();
        $this->chancheChildPubFieldWithBarentPrivet();
    }

    public function callOverriddenMethodThatChangeChildField(){
        $this->testClass->setField();
        $value = $this->testClass->getField();
//        DebugHelper::dd($value);
        self::showInfo(__METHOD__, 'Base class can change the same child field');
    }

    public function chancheChildPubFieldWithBarentPrivet(){
        $this->testClass->setPrivateField();
        $value = $this->testClass->getPrivateField();
//        DebugHelper::dd($value);
        self::showInfo(__METHOD__, 'Base class can not change child field with own same private field');
    }





}
