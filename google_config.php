<?php
// Database configuration
define('DB_HOST', '');
define('DB_USERNAME', '');
define('DB_PASSWORD', '');
define('DB_NAME', '');
define('DB_USER_TBL', 'users');

// Google API configuration
define('GOOGLE_CLIENT_ID', 'example@gmail.com');
define('GOOGLE_CLIENT_SECRET', 'password');
define('GOOGLE_REDIRECT_URL', 'Callback_URL');

// Start session
if (!session_id()) {
    session_start();
}

// Include Google API client library
require_once 'google-api-php-client/Google_Client.php';
require_once 'google-api-php-client/contrib/Google_Oauth2Service.php';

// Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to www.carry0987.com');
$gClient->setClientId(GOOGLE_CLIENT_ID);
$gClient->setClientSecret(GOOGLE_CLIENT_SECRET);
$gClient->setRedirectUri(GOOGLE_REDIRECT_URL);

$google_oauthV2 = new Google_Oauth2Service($gClient);