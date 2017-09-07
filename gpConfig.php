<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '119866001787-n0l45hvcvsjkh5r6o3okfmg4daeslddr.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'DKVQyCcLinDowSxHZj0uYIjb'; //Google client secret
$redirectURL = 'http://localhost/WebDiaryIbadah/google_login.php'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Diary Ibadah');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>