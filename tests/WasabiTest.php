<?php

use Pratikkuikel\Wasabi\Wasabi;
use Pratikkuikel\Wasabi\Facades\Wasabi as Facade;
use Pratikkuikel\Wasabi\Models\State;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Pratikkuikel\Wasabi\Models\MockState;

uses(RefreshDatabase::class);

it('confirms environment is set to testing', function () {
    expect(config('app.env'))->toBe('testing');
});

it('can test', function () {
    expect(true)->toBeTrue();
});

it('returns hello senorita', function () {
    expect((new Wasabi())->hello())->toBe('hello senorita');
});

it('returns hello senorita from facade', function () {
    expect(Facade::hello())->toBe('hello senorita');
});

it('has 10 rows in the state model', function () {

    $faker = Faker::create();

    for ($i = 1; $i <= 10; $i++) {
        State::create([
            'name' => $faker->state(),
            'data' => [
                'hello' => Str::random(4),
                'haha' => [
                    'hehe' => Str::random(4),
                    'huhu' => Str::random(4),
                ],
                'lmao' => Str::random(4),
            ],
            'abbr' => $faker->stateAbbr()
        ]);
    }
    expect(State::count())->toBe(10);
});

it('confirms that the one level deep json attributes are being merged', function () {
    State::create([
        'name' => 'New York',
        'data' => [
            'hello' => 'hello',
            'haha' => [
                'hehe' => 'hello',
                'huhu' => 'hello',
            ],
            'lmao' => 'hello',
        ],
        'abbr' => 'NY'
    ]);
    $state = State::first();
    expect(array_key_exists('hello', $state->getAttributes()))->toBeTrue();
});

it('confirms that the json field name is changed and custom json field can be used', function () {
    MockState::create([
        'name' => 'New York',
        'random_field_name' => [
            'hello' => 'hello',
            'haha' => [
                'hehe' => 'hello',
                'huhu' => 'hello',
            ],
            'lmao' => 'hello',
        ],
        'abbr' => 'NY'
    ]);
    $state = MockState::first();
    expect(array_key_exists('hello', $state->getAttributes()))->toBeTrue();
});
