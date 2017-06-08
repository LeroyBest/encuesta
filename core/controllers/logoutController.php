<?php
unset($_SESSION['user']);
//unset($_SESSION['app_keyid']);
header('location: ?view=login');
?>
