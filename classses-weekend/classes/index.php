<?php

require_once './DB.php';
require_once './DB_functions.php';

require_once './City.php';
require_once './Region.php';

$success = DB::connect('localhost', 'world', 'root', '');


// $search_string = $_GET["search_string"];
// //http://www.cbp-exercises.test/php-day-29/classes/index.php?search_string=Praha

// $cities = DB::select(
//   "
//   SELECT * 
//   FROM `cities`
//   WHERE `name` LIKE ?
//   ", [
//     // "Praha"
//     // "%ville%"
//     "%{$search}%"
//   ], "City"

// );

// var_dump($cities);

//-----------------------------------------------------

$values_from_form = [
    56,
    199,
    172,
];


// get a string of as many question marks as needed for the array
// of IN values;
// $question_marks = implode(', ', array_fill(0, count($values_from_form), "?"));

// $cities = DB::select(
//     "
//         SELECT *
//         FROM `cities`
//         WHERE `country_id` IN ($question_marks)
//         ORDER BY `population` DESC
//         LIMIT 10
//     ",
//     $values_from_form,
//     "City"

// );


// var_dump($cities);


// $cities = DB::select("
//     SELECT * FROM `cities`
//     WHERE `country_id` IN (?, ?, ?, ?)
//     ORDER BY `population` DESC
//     LIMIT 10
// ",
// [56, 199, 172, 98],
// "City");

// var_dump($cities);


//-----------------------------------------------------


// DB::insert(
//     "
//     INSERT 
//     INTO `regions`
//     (`name`,`slug`)
//     VALUES
//     (?, ?)
//     ", [
//         "Eastern Europ 2", "eastern-europe 2"
//     ]

//     );


//-----------------------------------------------------

// DB::insert(
//     "
//         INSERT
//         INTO `regions`
//         (`name`, `slug`)
//         VALUES
//         (?,?),
//         (?, ?),
//         (?, ?);
//     ", [
//         'North America','north-america',
//         'Central America', 'central-america',
//         'South America', 'south-america'
//     ]

// );

$region = new Region();
$region->name = 'Central Africa';
$region->slug = 'central-africa';
$region->insert();