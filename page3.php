<?php
session_start();
$_SESSION['visits'] = ($_SESSION['visits'] ?? 0) + 1;

if ($_SESSION['visits'] % 3 === 0) {
    header('Location: page4.php');
    exit;
}

echo "Страница 3 открыта {$_SESSION['visits']} раз";
