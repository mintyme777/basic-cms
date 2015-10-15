<?php

try
{
    $pdo = new PDO('mysql:host=localhost;dbname=cms','root','helpme');
} 
catch (PDOException $e) 
{
    exit('Database error.');
} 

