<?php
// if user is NOT logged in, redirect them to login page
if (!isset($_SESSION['user'])) {
  header("location: " . BASE_URL . "login.php");
}
// if user is logged in and this user is NOT an admin user, redirect them to landing page
if (isset($_SESSION['user']) && is_null($_SESSION['user']['role'])) {
  header("location: " . BASE_URL);
}