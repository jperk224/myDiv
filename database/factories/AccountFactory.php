<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Account;
use Faker\Generator as Faker;

$factory->define(Account::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, App\User::count()),
        'account_balance' => ((rand(1, 2147483647)) / 10 * 100) + (rand(0,100) / 100)    //TODO: change this to sum holdings eventually?
    ];
});
