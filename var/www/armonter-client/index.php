<?php
session_start();
require_once 'includes/config.php';
require_once 'includes/db.php';
require_once 'includes/functions.php';

// Check if the database is already set up
if (isDbSetup()) {
    // Check if user is logged in
    if (isLoggedIn()) {
        // Redirect to home page
        header("Location: pages/home.php");
        exit();
    } else {
        // Redirect to login page
        header("Location: pages/login.php");
        exit();
    }
} else {
    // Redirect to database setup page
    header("Location: setup.php");
    exit();
}
?>
