<?php
$a = [
    'a' => [
        'b' => 0,
        'c' => 1
    ],
    'b' => [
        'e' => 2,
        'o' =>
            ['b' => 3
        ]
    ]
];
$value = $a['b']['o']['b'];
echo $value;
$info = $a['a'];
print_r($info);
?>
