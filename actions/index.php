<?php
$query = $query = "SELECT * FROM `articles` WHERE status=1 LIMIT 10;";

require_once(DIR . 'helpers/DbExplorer.php');

if ($result) {
    $template = DIR . 'templates/main.php';
} else {
    require_once DIR . 'actions/error.php';
}

require_once (DIR . 'templates/template.php');
