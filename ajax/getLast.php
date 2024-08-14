<?php
require_once __DIR__ . '../../config.php';
include BASE_PATH . '/includes/authAdmin.php';
require_once BASE_PATH . '/db/db.class.php';
require_once BASE_PATH . '/includes/reservation/reservation.class.php';
$db = new db();
$reservation = new reservation();

$id = htmlspecialchars($_GET["id"]);


$reservations = $db->getNextTen($id);
$reservation->getLastTen($reservations);
