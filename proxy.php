<?php
// URL Google Apps Script anda
 $appsScriptUrl = 'https://script.google.com/macros/s/AKfycbzxzxnyAMsDBytHylc6TUljdGBaLEUgDbgaeioBVkzUQgEa0PZBQCxzl2Z2UYOWpy1H/exec';

// Dapatkan parameter dari panggilan JavaScript
 $queryString = $_SERVER['QUERY_STRING'];

// Buat URL lengkap
 $fullUrl = $appsScriptUrl . '?' . $queryString;

// Dapatkan kandungan dari Apps Script
 $response = file_get_contents($fullUrl);

// Hantar kembali ke JavaScript dengan header yang betul
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

echo $response;
?>
