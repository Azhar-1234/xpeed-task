<?php
	require_once "../config.php";
    $db = new Database();

 	$id = $_GET['id'];
    $db->delete($id);
 	