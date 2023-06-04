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

$new_array = array_map(function ($old_value) {
    $new_value = [
        'full_name' => $old_value['name'] .' '. $old_value['surname'],
        'job' => $old_value['occupation'],
    ];
    return $new_value;
},$old_array);

// print_r($new_array);


require_once "Person.php";

$new_array = array_map(function ($old_value) {
    $new_value = new Person;
    $new_value->first_name = $old_value['name'];
    $new_value->last_name = $old_value['surname'];
    $new_value->job = $old_value['occupation'];
    return $new_value;
},$old_array);

print_r($new_array);