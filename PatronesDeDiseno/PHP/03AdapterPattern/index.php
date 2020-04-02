<?php
// index.php
include_once('Support.php');

$support = new Support('username');
$support->sendMessage('Problema', 'No funciona algo', '6755642231');
