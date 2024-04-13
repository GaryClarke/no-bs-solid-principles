<?php

require_once 'vendor/autoload.php';

use App\Email;
use App\User;

// We should be able to replace a class with a subclass without any unexpected behavior.

// What problem does this solve
// - Ensures that subclasses can be used interchangeably with their base classes without altering the functionality or correctness of the program
// - Prevents the use of inheritance for quick n dirty hacks.

function loginUser(User $user) {
    echo 'Logging in user with ' . $user->getEmail();
}

# Can only be created with a valid email address
$email = new Email('info@garyclarke.tech');

# Can only be created with an Email type
$user = new User($email, '@garyclarketech');
