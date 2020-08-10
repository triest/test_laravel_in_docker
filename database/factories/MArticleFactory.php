<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


    use App\MArticle;
    use Faker\Generator as Faker;
    use Illuminate\Database\Eloquent\Model;


    $factory->define(MArticle::class, function (Faker $faker) {
    return [
        //
        'title'=>$faker->title,
        'description'=>$faker->realText()
    ];
});
