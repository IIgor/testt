<?php
$status = $_GET['status'];
$access_token = $_GET['access_token'];

if(isset($status) && isset($access_token)){
    session_start();
    $_SESSION['user'] = $_GET;
    header('Location: /');
}