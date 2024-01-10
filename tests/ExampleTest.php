<?php

use Pratikkuikel\Wasabi\Wasabi;

it('can test', function () {
    expect(true)->toBeTrue();
});

it('returns hello senorita', function () {
    expect((new Wasabi())->hello())->toBe('hello senorita');
});
