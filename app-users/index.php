<?php
session_start();
if (isset($_SESSION['user'])) header('Location: /Monolitico/app-users/views/dashboard.php');
else header('Location: /Monolitico/index.html');
exit;
