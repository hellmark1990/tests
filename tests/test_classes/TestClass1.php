<?php

namespace tests\testClasses;

use helpers\DebugHelper;

class TestClass1 extends BaseTestClass {

    public static $STATIC_ATTRIBUTE;

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
    
    public function getStaticAttribute(){
        return self::$STATIC_ATTRIBUTE;
    }

}