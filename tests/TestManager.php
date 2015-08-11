<?php

namespace tests;

class TestManager {

    private $testClass;

    public function __construct(Test $testClass) {
        $this->testClass = $testClass;
    }

    public function runTests() {
        $this->testClass->runAll();
    }

}
