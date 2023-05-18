<?php 
require('functions.php');

$title ='Home';
$students = [
[
    'nama' => 'Nita',
    'npm' => '223040096'
],
[
    'nama'=>'Melinda',
    'npm' =>'223040091'
]
];  
// dd($_SERVER["REQUEST_URI"]);
// /pw2023_223040096/kuliah/pertemuan9/index.php

require('views/index.view.php');
?>