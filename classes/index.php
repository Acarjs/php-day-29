<?php 

require_once "DB.php";
require_once "DB_functions.php";
require_once "City.php";
require_once "Region.php";

$success = DB::connect('localhost','world','root','');

//-----------------------------------------------------

// $search = $_GET["search_string"];
// //http://www.cbp-exercises.test/php-day-29/classes/index.php?search_string=Praha

// $cities = DB::select(
//   "
//   SELECT * FROM `cities`
//   WHERE `name` LIKE ?
//   ",[
//       "Praha"
//     "%{$search}%"
//     // "%ville%" //second option to search something
//   ], 
  
//   "City"); 

// var_dump($cities); 

//-----------------------------------------------------

//Write an SQL query to select the 10 largest cities (order by population) from the cities table that are in one of the V4 countries: Czechia, Slovakia, Poland, Hungary (their country is specified with their country_id column)
//Use IN
//The country_id values are: 56, 199, 172, 98

// $cities = DB::select(
//   "
//   SELECT *
// FROM `cities`
// WHERE `country_id` IN (?, ?, ?, ?)
// ORDER BY `population` DESC
// LIMIT 10;
//   ",[ 56, 199, 172, 98 ], "City");

// var_dump($cities); 

//-----------------------------------------------------

// $values_from_form = [

//   56,199,172
// ];

// // $question_marks= "?,?,?,?"; //there must be 4 times ? since values_from_form are 4 values.

// // get a string of as many question marks as needed for the array
// // of IN values;
// $question_marks = implode(', ',array_fill(0, count($values_from_form), "?"));

// $cities = DB::select(
//   "
//   SELECT *
// FROM `cities`
// WHERE `country_id` IN ($question_marks)
// ORDER BY `population` DESC
// LIMIT 10;
//   ",$values_from_form , "City");


// var_dump($cities); 

//-----------------------------------------------------

//INSERTING
// $region = new Region;
// $region->name = 'Central Africa';
// $region->slug = 'central-africa';
// $region->insert();


// var_dump($region);



//UPDATING
$region = select_one("SELECT * FROM `regions` WHERE `name` = ?", ['Region Name'], 'Region');

var_dump($region);
if (!$region) {
  $region = new Region;
}

// $region = DB::selectOne("SELECT * FROM `regions` WHERE `name` = ?", ['Central Africa'], 'Region');
// $region->slug = 'middle-africas';
// $region->save();


// var_dump($region);


//DELETE
// $region->delete();
    