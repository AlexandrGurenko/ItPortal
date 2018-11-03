<?php
session_start();

$id = 'main';
if(isset($_GET['id'])) {
	$id = $_GET['id'];
}

include 'pages/'.$id.'.php';
include 'tpl/base.php';