<?php
ini_set('display_errors', true); ini_set('display_startup_errors', true); error_reporting(E_ALL);
echo shell_exec("git pull && python jemdoc.py *.jemdoc");
?>
