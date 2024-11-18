<?php
require_once('../lib/session.php');
Session::sessionDestroyAll();
header('Location: ../admin/login.php');
exit();
?>
