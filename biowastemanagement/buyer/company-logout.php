<?php 
include '../connect.php';
session_start();

session_destroy();

header('Location: company-login.php');
?>