<?php
session_destroy();
unset($_SESSION);

header("Location:index.html");
die();
?>