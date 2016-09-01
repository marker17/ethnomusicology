<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|


$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
*/

$factory->define(App\Accession::class, function (Faker\Generator $faker) {
    return [
        'accession_no'=>$faker->numerify('UPCE-P-###'),
		'title'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
		'category_id'=>'1',
		'author'=>$faker->name,
		'groupcountry'=>$faker->country,
		'year'=>$faker->year,
		'description'=>$faker->text($maxNbChars = 200),
		'notes'=>$faker->word,
		'picture'=>$faker->imageUrl($width = 640, $height = 480),
		'photodate'=>str_random(10),
		'photographer'=>str_random(10),
		'relatedimages'=>str_random(10),
		'originalformat_type'=>str_random(10),
		'originalformat_description'=>str_random(10),
		'eformat_type'=>str_random(10),
		'eformat_description'=>str_random(10),
		'original_location'=>str_random(10),
		'elocation'=>str_random(10),
		'provenance_notes'=>str_random(10),
		'instrumentcatalog_no'=>str_random(10),
		'instrumentcategory_no'=>str_random(10),
		'instrument_localname'=>str_random(10),
		'instrument_englishname'=>str_random(10),
		'musicscore_catalogername'=>str_random(10),
		'musicscore_instrumentation'=>str_random(10),
		'musicscore_performances'=>str_random(10),
		'musicscore_category'=>str_random(10),
		'length'=>$faker->randomDigit,
		'width'=>$faker->randomDigit,
		'height'=>$faker->randomDigit,
		'diameter'=>$faker->randomDigit,
		'no_of_pages'=>$faker->randomDigit,
		'original_work'=>str_random(10),
		'repo'=>str_random(10),
		'full_score'=>str_random(10)
    ];
});
