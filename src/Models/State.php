<?php

namespace Pratikkuikel\Wasabi\Models;

use Illuminate\Database\Eloquent\Model;
use Pratikkuikel\Wasabi\Traits\Wasabi;

class State extends Model
{
    use Wasabi;
    protected $guarded = [];

    // override the default json data field, default field name is `data`
    // public function __construct(array $attributes = [])
    // {
    //     parent::__construct($attributes);
    //     self::setDataField('mero'); // Override the default dataField
    // }

    protected $casts = [
        'data' => 'array'
    ];
}
