<?php
require_once __DIR__ . '../../config.php';
include BASE_PATH . '/includes/authAdmin.php';
require_once BASE_PATH . '/db/db.class.php';
$db = new db();

$name = htmlspecialchars($_POST["name"]);
$sport = $db->getSport($name);

if (!empty($sport)) {
    header("Location: index.php?adds=3");
    exit();
}

if ($db->addSport($name)) {
    header("Location: index.php?adds=1");
    exit();
} else {
    header("Location: index.php?adds=2");
    exit();
}
