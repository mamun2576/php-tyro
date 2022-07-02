<?php
$students = [
    [
        'name' => 'John Doe',
        'age' => 20,
        'email' => 'john.doe@email.com',
        'address' => [
            'country' => 'BD',
            'district' => 'Dhaka'
        ]
    ],
    [
        'name' => 'Lilly',
        'age' => 19,
        'email' => 'lilly@email.com',
        'address' => [
            'country' => 'BD',
            'district' => 'Chittagong'
        ]
    ],
    [
        'name' => 'Hasan Ahmed',
        'age' => 19,
        'email' => 'hasan@email.com',
        'address' => [
            'country' => 'BD',
            'district' => 'Barishal'
        ]
    ],
    [
        'name' => 'Palak Mahmud',
        'age' => 18,
        'email' => 'palak@email.com',
        'address' => [
            'country' => 'BD',
            'district' => 'Dhaka'
        ]
    ]
];



foreach ($students as $student) {
    foreach ($student as $key => $value) {
        if (is_array($value) && $key == 'address') {
            foreach ($value as $key => $value) {
                if ($key  == 'district' && $value ==  'Dhaka') {
                    echo $student['name'] . ' is from Dhaka <br>';
                }
            }
        }
    }
}
