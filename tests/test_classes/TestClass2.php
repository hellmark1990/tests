<?php

namespace tests\testClasses;

use helpers\DebugHelper;

class TestClass2 extends BaseTestClass
{


    public $field;

    public $privateField;

    /**
     * @return mixed
     */
    public function getPrivateField()
    {
        return $this->privateField;
    }

    /**
     * @param mixed $privateField
     */
    public function setPrivateField($privateField = 'childValue')
    {
        $this->privateField = $privateField;
        parent::setPrivateField();
    }


    public function setField($value = 'childValue')
    {
        $this->field = $value;
        parent::setField();
    }

    public function getField()
    {
        return $this->field;
    }

}