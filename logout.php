<?php
@session_start();
include("config.inc.php");

if (!isset($_SESSION['login_true'])) 
{
echo '<meta http-equiv="refresh" content="0; url=./index.php" />';
exit();
}
?>

<?php
session_start();
session_destroy();
echo '<meta http-equiv="refresh" content="0; url=./index.php" />';
exit;
?>

