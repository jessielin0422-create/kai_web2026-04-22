<?php
function dd($data){
     echo "<pre>";
     print_r($data);
     echo "</pre>";
}

$data = [
     [
          'id' => 1,
          'name' => 'amy',
          'mobile' => '0911'
     ],
     [
          'id' => 2,
          'name' => 'amy',
          'mobile' => '0911'
     ],
     [
          'id' => 3,
          'name' => 'amy',
          'mobile' => '0911'
     ]
];

// dd($data);
// to json

echo json_encode($data);

