<?php

use PHPAcademyHomework\App\App;

require_once 'App/App.php';

// Dynamically get max amount of classes in the folder
$path = 'App/Views/';
$fileIterator = new FilesystemIterator($path, FilesystemIterator::SKIP_DOTS);

// Iterator count returns int starting with 1, -1 to turn it into an index
$min = 0;
$max = iterator_count($fileIterator) - 1;
$random = rand($min, $max);

// Slice off '.' and '..' from the file array
$files = array_slice(scandir($path), 2);
$filesClean = [];
for ($i=0; $i<count($files); $i++)
{
    $filesClean[] = basename($files[$i], ".php");
}

//  0 => string 'About'
//  1 => string 'Contact'
//  2 => string 'Landing'

$randomClass = $filesClean[$random];

$app = new App($randomClass);
