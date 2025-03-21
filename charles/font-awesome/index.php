<?php
include '../includes/db.php';
session_start();
// redirect to index page
header("Location: ../index.php");
exit();
?>