<?php
$text = $_GET['text'] ?? 'Текст не передан';
header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename="text.txt"');
echo $text;
