<?php

namespace Pratikkuikel\Wasabi\Models;

use Illuminate\Database\Eloquent\Model;
use Pratikkuikel\Wasabi\Traits\Wasabi;

class MockState extends Model
{
    use Wasabi;

    protected $table = 'mock_states';

    protected $guarded = [];

    // override the default json data field, default field name is `data`
    public function __construct(array $attributes = [])
    {
        static::setWasabiStatus(true);
        static::setDataField('random_field_name'); // Override the default dataField
        parent::__construct($attributes);
    }

    protected $casts = [
        'random_field_name' => 'array',
    ];
}
