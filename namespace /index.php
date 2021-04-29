<?php 

spl_autoload_register(function($classname) {

    $filename = str_replace('\\', '/', $classname) . '.php';
    
    require $filename;
});

use Security\User;
use Person\User as P_User;
// Person/User.php

$userPerson = new P_User();

$userSecurity = new User();
$userSecurity = new User();
$userSecurity = new User();
$userSecurity = new User();
$userSecurity = new User();

echo 'ok';