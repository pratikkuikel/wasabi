<?php

namespace Pratikkuikel\Wasabi\Traits;

trait Wasabi
{
    protected static $dataField;

    protected static $defaultDataField = 'data';

    protected static function getDataField()
    {
        return self::$dataField ?? self::$defaultDataField;
    }

    public static function setDataField($field)
    {
        self::$dataField = $field;
    }

    protected static function bootWasabi()
    {
        // Listen to the retrieved event
        static::retrieved(function ($model) {
            // Transform data keys into regular fields
            $model->transformDataKeys();
        });
    }

    protected function transformDataKeys()
    {
        $transformedData = $this->{self::getDataField()};
        // dd($transformedData);
        // Set the transformed data fields to the model
        $this->attributes = array_merge($this->attributes, $transformedData);
        unset($this->attributes[self::getDataField()]);
    }
}
