<?php

require_once 'vendor/autoload.php';

use App\User;
use App\AltUser;
use App\Email;

function sendWelcomeEmail(User $user): void
{
    $email = $user->getEmail();
    // Logic to send email to the $email address
    echo "Sending email to " . $email . "\n";
}

# Can only be created with a valid email address
$email = new Email('info@garyclarke.tech');

# Can only be created with an Email type
$user = new AltUser($email, '@garyclarketech');

sendWelcomeEmail($user);


