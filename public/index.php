<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// public/index.php
require_once '../app/views/templates/header.php';
// require_once '../app/views/templates/nav.php';
require_once '../routes.php';
require_once '../app/views/templates/footer.php';
