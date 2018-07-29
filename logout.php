<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location:users.php"); // Redirecting To Home Page
}
?>