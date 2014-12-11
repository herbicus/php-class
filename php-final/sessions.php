<?php 

session_start();

$_SESSION['logged_in'] = isset($_SESSION['logged_in']) ? $_SESSION['logged_in'] : FALSE;

if (isset($_SESSION['views'])) {
    $_SESSION['views'] = $_SESSION['views'] + 1;
} else {
    $_SESSION['views'] = 0;
}

if (!isset($_SESSION['auth'])) {
    $_SESSION['auth'] = FALSE;
}

if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = "N/A";
}

$_SESSION['logged_in'] = isset($_SESSION['logged_in']) ? $_SESSION['logged_in'] : FALSE;

include('includes/content/connect.php');


