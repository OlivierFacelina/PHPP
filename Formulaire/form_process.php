<?php 

$lastname = ''; $firstname = ''; $address = ''; $city = ''; $zipCode = ''; $phone = ''; $email = ''; $birthdate = ''; $birthPlace = '';
$birthDepartment = ''; $birthCountry = ''; $nationality = ''; $message = ''; $formation = ''; $diploma = '';

$options = [
    'lastname' => [
        'filter' => FILTER_VALIDATE_REGEXP,
        'options'=> [
            'regexp' => '/^[a-z-èéùç ]{2,60}$/gi'
        ]
    ],
    'firstname' => [
        'filter' => FILTER_VALIDATE_REGEXP,
        'options'=> [
            'regexp' => '/^[a-z-èéùç ]{2,60}$/gi'
        ]
    ],
    'address' => [
        'filter' => FILTER_VALIDATE_REGEXP,
        'options'=> [
            'regexp' => '/^[a-z-èéùç0-9 ]{2,250}$/gi'
        ]
    ],
    'city' => [
        'filter' => FILTER_VALIDATE_REGEXP,
        'options'=> [
            'regexp' => '/^[a-z-èéùç ]{2,60}$/gi'
        ]
    ],
    'zipCode' => [
        'filter' => FILTER_VALIDATE_REGEXP,
        'options'=> [
            'regexp' => '/^[0-9]{5}$/gi'
        ]
    ],
    'phone' => [
        'filter' => FILTER_VALIDATE_REGEXP,
        'options'=> [
            'regexp' => '/[^0-9\-]/i'
        ]
    ],
    'email' => FILTER_VALIDATE_EMAIL,
    'birthdate' => [
        'filter' => FILTER_VALIDATE_REGEXP,
        'options'=> [
            'regexp' => '/^[0-9]{4}(-[0-9]{2}){2}$/gmi'

        ]
    ],
    'birthPlace' => FILTER_SANITIZE_SPECIAL_CHARS,
    'birthDepartment' => FILTER_SANITIZE_SPECIAL_CHARS,
    'birthCountry' => FILTER_SANITIZE_SPECIAL_CHARS,
    'nationality' => FILTER_SANITIZE_SPECIAL_CHARS,
    'message' => FILTER_SANITIZE_SPECIAL_CHARS,
    'formation' => FILTER_SANITIZE_SPECIAL_CHARS,
    'diploma' => FILTER_SANITIZE_SPECIAL_CHARS,
];

if(!empty($_POST)) {
    $processedData = filter_input_array(INPUT_POST, $options);
    var_dump($processedData);
}