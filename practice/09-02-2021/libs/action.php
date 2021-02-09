<?php 

	/*
        author  : vaibhav maheshwari
        date    : 09-02-2021
    */
    session_start();
    require_once 'db.inc.php';

    $db = new Database;

    if (isset($_POST['login'])) {
    	$username = $_POST['username'];
    	$password = md5($_POST['password']);

    	if ($db->login('login', $username, $password)) {
    		$_SESSION['username'] = $username;
    		$_SESSION['logintime'] = date('Y-m-d H:i:s');
    		header('location: ../dashboard.php');
    	} else {
    		header('location: ../login.php');

    	} 
    }

    if (isset($_GET['action']) && !empty($_GET['action'])) {
    	$action = $_GET['action'];
    	if ($action == 'logout') {
    		$username = $_SESSION['username'];
    		$logintime = $_SESSION['logintime'];
    		$logouttime = date('Y-m-d H:i:s');
    		$db->addSession($username,$logintime,$logouttime);
    		session_unset();
    		header('location:../login.php');
    	}
    }

?>