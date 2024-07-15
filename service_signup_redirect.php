<?php
session_start();

if (isset($_SESSION['loggedin'])) {
    header('Location: profile.php');
} else {
    header('Location: signin.php');
}
exit;
?>
