<?php

namespace tests\testClasses;

class BaseTestClass
{

    public $field;

    private $privateField;

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
    public function setPrivateField($privateField = 'baseValue')
    {
        $this->privateField = $privateField;
    }

    public function setField()
    {
        $this->field = 'baseValue';
    }

    public function getField()
    {
        return $this->field;
    }


}
