<?php
function generatePassword($length) {
  $symbols = '!?&%$<>^+-*/()[]{}@#_=';
  $numbers = '0123456789';
  $lowercaseLetters = 'abcdefghijklmnopqrstuvwxyz';
  $uppercaseLetters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $allCharacters = $uppercaseLetters . $lowercaseLetters . $numbers . $symbols;
  $random_string = '';

  for ($i = 0; $i < $length; $i++) {
    $random_string .= $allCharacters[random_int(0, strlen($allCharacters) - 1)];
  }
  return $random_string;
  }

  $random_string = ''; 

  if (isset($_GET['generatePassword'])) {
    $length = isset($_GET['length']) ? $_GET['length'] : 0;
    $random_string = generatePassword($length);
  }
