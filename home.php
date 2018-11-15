<?php
/**
 * Created by PhpStorm.
 * User: tuanle
 * Date: 11/10/18
 * Time: 20:58
 */
session_start();

use google\appengine\api\users\User;
use google\appengine\api\users\UserService;
$user = UserService::getCurrentUser();

if (isset($user)) {
    header("Location: index.php");
} else {
    echo sprintf('<a href="%s">Sign in with your Google account or register</a>', UserService::createLoginUrl('/'));
}