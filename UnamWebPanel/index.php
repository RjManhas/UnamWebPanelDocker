<?php

require_once 'assets/php/session-header.php';

if($loggedin) {
    header('Location: pages/miners.php');
} else {
    header('Location: pages/login.php');
}
die();
