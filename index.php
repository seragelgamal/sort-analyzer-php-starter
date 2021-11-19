<?php

// Return data from file as an array of integers
function loadDataArray($fileName) {
  $temp = [];

  $lines = file($fileName, FILE_IGNORE_NEW_LINES);
  foreach ($lines as $line) {
    array_push($temp, (int)$line);
  }

  return $temp;
}

// Load Data Files into Global Variables
$randomData = loadDataArray("data-files/random-values.txt");
$reversedData = loadDataArray("data-files/reversed-values.txt");
$nearlySortedData = loadDataArray("data-files/nearly-sorted-values.txt");
$fewUniqueData = loadDataArray("data-files/few-unique-values.txt");

// Verify Loaded Data by Printing First 50 Elements
// echo "<p>***Random Data***</p>";
// print_r(array_slice($randomData, 0, 50));
// echo "<p>***Reversed Data***</p>";
// print_r(array_slice($reversedData, 0, 50));
// echo "<p>***Nearly Sorted Data***</p>";
// print_r(array_slice($nearlySortedData, 0, 50));
// echo "<p>***Few Unique Data***</p>";
// print_r(array_slice($fewUniqueData, 0, 50));

# Example of How to Time Duration of a Sort Algorithm
// $startTime = microtime(true);
// bubbleSort($randomData);
// $endTime = microtime(true);
// echo "Bubble Sort Random Data: " . ($endTime - $startTime);

require('sortAlgorithms.php');

$t1 = gettimeofday(true);
insertionSort($reversedData);
$dt = gettimeofday(true) - $t1;

echo($dt);