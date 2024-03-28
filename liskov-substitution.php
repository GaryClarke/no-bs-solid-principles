<?php

require_once 'vendor/autoload.php';

use App\User;
use App\AltUser;

function sendWelcomeEmail(User $user): void
{
    $email = $user->getEmail();
    // Logic to send email to the $email address
    echo "Sending email to " . $email . "\n";
}

$user = new AltUser('info@garyclarke.tech', '@garyclarketech');

sendWelcomeEmail($user);


