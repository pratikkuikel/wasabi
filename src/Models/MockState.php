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
        parent::__construct($attributes);
        self::setDataField('random_field_name'); // Override the default dataField
    }

    protected $casts = [
        'random_field_name' => 'array',
    ];
}
