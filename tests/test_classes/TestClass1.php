<?php

namespace tests\testClasses;

class TestClass1 extends BaseTestClass {

    public $publicAttribute;
    public $privateAttribute;

    public static function publicStaticMethod() {
    }

    public function publicMethod() {
    }

    public function privateMethod() {
    }

    public function setPublicAttribute($value = 'publicAttributeValue') {
        $this->publicAttribute = $value;
    }

    public function getPublicAttribute() {
        return $this->publicAttribute;
    }

    public function setPrivateAttribute($value = 'privateAttributeValue') {
        $this->privateAttribute = $value;
    }

    public function getPrivateAttribute() {
        return $this->privateAttribute;
    }

}
