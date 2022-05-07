<?php
session_start();

$inactive = 3600; // Set timeout period in seconds

if (isset($_SESSION['timeout'])) {
    $session_life = time() - $_SESSION['timeout'];
    if ($session_life > $inactive) {
        session_destroy();
        header("Location: expired.php");
    }
}
$_SESSION['timeout'] = time();

if (!isset($_SESSION['myid']))
{
echo "<script language=\"javascript\" type=\"text/javascript\">
window.location=\"../index.php\";
</script>";
}

?>