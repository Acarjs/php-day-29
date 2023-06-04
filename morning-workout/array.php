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

$new_array = [];


foreach ($old_array as $item) {
    $full_name = $item['name'] . ' ' . $item['surname'];
    $job = $item['occupation'];

    $new_array[] = [
        'full_name' => $full_name,
        'job' => $job
    ];
}

// print_r($new_array);

class Person
{
    public $first_name = null;
    public $last_name = null;
    public $job = null;
}

$people = [];

foreach ($old_array as $item) {
    $person = new Person();

   
    $person->first_name = $item['name'];
    $person->last_name = $item['surname'];
    $person->job = $item['occupation'];
   

    $people[] = $person;
}

var_dump($people);

