<?php
session_start();
echo "Страница 3 была открыта {$_SESSION['visits']} раза";
