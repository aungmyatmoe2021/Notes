<?php

it("Validation for max and min",function(){
    expect(\Core\Validator::checkValiation('foobar'))->toBeTrue();
    expect(\Core\Validator::checkValiation(false))->toBeFalse();
    expect(\Core\Validator::checkValiation(''))->toBeFalse();
    expect(\Core\Validator::checkValiation('foobar',20))->toBeFalse();
});

it("Validation for email",function(){
    expect(\Core\Validator::checkEmail("aungmyatmoe2021@gmail.com") ? true : false)->toBeTrue();
    expect(\Core\Validator::checkEmail("aungmyatmoe2021@.com") ? true : false)->toBeFalse();
    expect(\Core\Validator::checkEmail("aungmyatmoe2021@.") ? true : false)->toBeFalse();
    expect(\Core\Validator::checkEmail("aungmyatmoe2021@") ? true : false)->toBeFalse();
});