<?php

require_once 'vendor/autoload.php';

use App\Email;
use App\User;

function loginUser(User $user) {
    echo 'Logging in user with ' . $user->getEmail();
}

# Can only be created with a valid email address
$email = new Email('info@garyclarke.tech');

# Can only be created with an Email type
$user = new User($email, '@garyclarketech');
