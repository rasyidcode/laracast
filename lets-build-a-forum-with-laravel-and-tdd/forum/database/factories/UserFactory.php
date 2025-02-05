<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Thread;
use App\Reply;

use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Thread::class, function(Faker $faker) {
    return [
        'user_id' => function() {
            return factory(User::class)->create()->id;
        },
        'title' => $faker->sentence,
        'body' => $faker->paragraph
    ];
});

$factory->define(Reply::class, function(Faker $faker) {
    return [
        'user_id' => function() {
            return factory(User::class)->create()->id;
        },
        'thread_id' => function() {
            return factory(Thread::class)->create()->id;
        },
        'body' => $faker->paragraph
    ];
});

/* generate on threads */
// factory('App\Thread', 50)->create()

/* generate on replay */
// $threads = factory('App\Thread', 50)->create();
// $threads->each(function($thread) {
//     factory('App\Reply', 10)->create(['thread_id' => $thread->id]);
// });
