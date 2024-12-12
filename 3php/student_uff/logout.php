<?php
setcookie("student_email", "", time() - 3600, "/");
header("Location: login.php");
?>
