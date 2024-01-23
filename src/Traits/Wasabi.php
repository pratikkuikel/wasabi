<?php

namespace Pratikkuikel\Wasabi\Traits;

trait Wasabi
{
    protected static $useWasabi = true;

    protected static $dataField = 'data';

    protected static function getDataField()
    {
        return static::$dataField;
    }

    public static function setDataField($field)
    {
        static::$dataField = $field;
    }

    protected static function getWasabiStatus()
    {
        return self::$useWasabi;
    }

    public static function setWasabiStatus($state)
    {
        static::$useWasabi = $state;
    }

    protected static function bootWasabi()
    {
        if (static::getWasabiStatus()) {
            static::retrieved(function ($model) {
                $model->transformDataKeys();
            });
        }
    }

    protected function transformDataKeys()
    {
        $transformedData = $this->{static::getDataField()};
        // Set the transformed data fields to the model
        $this->attributes = array_merge($this->attributes, $transformedData ?? []);
        unset($this->attributes[$this->getDataField()]);
    }
}
