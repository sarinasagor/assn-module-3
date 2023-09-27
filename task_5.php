<?php 

// Task 5: Password Generator
// Create a PHP function called generatePassword($length) that generates a random password of the specified length. The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+). Write a PHP program to generate a password with a length of 12 characters using this function and print the password.


function generatePassword($length){
    $alphabet = 'abcdefghijklmno(!@#$%^&*()_+)pqrstuvwxyzABCDEFGHIJKLMNO(!@#$%^&*()_+)PQRSTUVWXYZ1234567890';
    $pass = array(); 
    $alphaLength = strlen($alphabet) - 1; 
    for ($i = 0; $i <$length; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass);
}


echo generatePassword(12); 
