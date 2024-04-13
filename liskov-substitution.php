<?php

require_once 'vendor/autoload.php';

use App\User;

$user = new User('info@garyclarke.tech', '@garyclarketech');

function loginUser(User $user) {
    echo 'Logging in user with ' . $user->getEmail();
}
