<?php 

session_start();

// $_SESSION['count'] = isset($_SESSION['count']) ? $_SESSION['count'] : 0;

// echo $_SESSION['count'];

// $_SESSION['count']++;

$_SESSION['logged_in'] = isset($_SESSION['logged_in']) ? $_SESSION['logged_in'] : FALSE;

// Create new session array
if (isset($_SESSION['views'])) {
    $_SESSION['views'] = $_SESSION['views'] + 1;
} else {
    $_SESSION['views'] = 0;
}

// Print it out
//echo 'Hits: ' .  $_SESSION['views'];


// Set flags or Useful information

if (!isset($_SESSION['auth'])) {
    $_SESSION['auth'] = FALSE;
}

if (!isset($_SESSION['username'])) {
    $_SESSION['username'] = "N/A";
}

$_SESSION['logged_in'] = isset($_SESSION['logged_in']) ? $_SESSION['logged_in'] : FALSE;

// echo "<br />Is user auth?: " . ($_SESSION['auth'] ? "Yes" : "No");
// echo "<br />Username: " . $_SESSION['username'];

include('includes/content/connect.php');


