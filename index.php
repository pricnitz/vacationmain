<?php
include "includes/functions.php";
include "includes/header.php";

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$file = "pages/{$page}.php";

if (file_exists($file)) {
    include $file;
} else {
    include "pages/404.php";
}

include "includes/footer.php";
