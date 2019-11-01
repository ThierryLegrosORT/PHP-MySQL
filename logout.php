<?php
require_once('header.php');
require_once('menu.php');

session_abort();
// session_start();
// $_SESSION = array();
// session_destroy();

echo "Vous êtes à présent déconnecté";

require_once('footer.php');