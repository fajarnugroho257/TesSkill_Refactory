<?php
session_start();
// Include Librari Google Client (API)
include_once 'libraries/google-client/Google_Client.php';
include_once 'libraries/google-client/contrib/Google_Oauth2Service.php';
$client_id = '521095015935-amce9cd6m7arihp2c28liih687qjpelc.apps.googleusercontent.com'; // Google client ID
$client_secret = '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'; // Google Client Secret
$redirect_url = 'http://localhost/TesSkill_Refactory/Auth/google.php';
// Call Google API
$gclient = new Google_Client();
$gclient->setApplicationName('Google Login'); // Set dengan Nama Aplikasi Kalian
$gclient->setClientId($client_id); // Set dengan Client ID
$gclient->setClientSecret($client_secret); // Set dengan Client Secret
$gclient->setRedirectUri($redirect_url); // Set URL untuk Redirect setelah berhasil login
$google_oauthv2 = new Google_Oauth2Service($gclient);
?>