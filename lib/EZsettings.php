<?php

// change these values to your own in order to use EZAppDotNet
$app_clientId     = 'B5U3yKLWsaynkxHDnRvUc5wPS4Q9Kqbw';
$app_clientSecret = 'tbGDZrLYcrqPp3Pj3wvGJtPZR3qq977A';

// this must be one of the URLs defined in your App.net application settings
$app_redirectUri  = 'http://localhost:4000/ADN_php/callback.php';

// declare the alpha domain to use
$alpha = '[ALPHA_CLIENT_DOMAIN]';

// support email
$support = '[SUPPORT_EMAIL]';

// git(hub) url
$github = '[GITHUB_URL]';

// An array of permissions you're requesting from the user.
// As a general rule you should only request permissions you need for your app.
// By default all permissions are commented out, meaning you'll have access
// to their basic profile only. Uncomment the ones you need.
$app_scope        =  array(
    'basic', // See basic user info (default, required: may be given if not specified)
    // 'stream', // Read the user's personalized stream
    // 'email', // Access the user's email address
    // 'write_post', // Post on behalf of the user
    'follow', // Follow and unfollow other users
    'public_messages', // Send and receive public messages as this user
    'messages', // Send and receive public and private messages as this user
    // 'update_profile', // Update a user’s name, images, and other profile information
    // 'files', //  Manage a user’s files. This is not needed for uploading files.
    // 'export', // Export all user data (shows a warning)
);
