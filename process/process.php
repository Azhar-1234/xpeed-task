<?php
if(empty($_POST) && empty($_GET)){
    header('Location: ../frontend/index.php');
}
	require_once "../config.php";

 	$db = new Database();

	if(isset($_POST['submit'])){
	   $data=[];
	   $data['error'] = Validator::validate($_POST);
	   if (count($data['error']) > 0) {
	   		foreach ($data['error'] as $key => $value) {
	   			session_start();
	   			$_SESSION['error'] = $key." is not valide";
	   		}
	   		header("Location: " . $_SERVER['HTTP_REFERER']);
	   }else{
            $sanizedData = Validator::sanitize($_POST);
            $data = $db->insert($sanizedData);
            header('Location: ../frontend/index.php');
        }
	}

  