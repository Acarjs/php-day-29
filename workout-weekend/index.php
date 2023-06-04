<?php 

$old_array = [
    [
        'name' => 'Bruce',
        'surname' => 'Wayne',
        'occupation' => 'billionaire'
    ],
    [
        'name' => 'Clark',
        'surname' => 'Kent',
        'occupation' => 'reporter'
    ],
    [
        'name' => 'Peter',
        'surname' => 'Parker',
        'occupation' => 'photographer'
    ]
];


$new_array = array_map(
  function($item){
    

    $new_value = [
      "full_name" => "{$item['name']} {$item['surname']}" ,
      "job" => "{$item['occupation']}"

    ];
    return $new_value;
  }, $old_array
);

// print_r($new_array);


require_once "./Person.php";

$class_array = array_map(
  function($item){
    $new_value = new Person;
    $new_value->first_name = $item['name'];
    $new_value->last_name = $item['surname'];
    $new_value->job = $item['occupation'];

    return $new_value;
  }, $old_array);

print_r($class_array);