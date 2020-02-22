<?php
session_start();
include_once 'config/connection.php';

if(isset($_POST["btissam"])) {
    if(empty($_POST["login"]) || empty($_POST["password"])) {
        $message = 'All fields are required.';
    }
    else {        
        $query = 'SELECT * FROM user WHERE login="'.$_POST['login'].'" AND password="'.$_POST['password'].'"';
        $query = $db->prepare($query);
        $query->execute();
        $count = $query->rowCount();
        $la_case = $query->fetchAll(\PDO::FETCH_ASSOC);
        if ($count > 0) {
            $_SESSION['id']=$la_case[0]['id'];
            $_SESSION['login']=$la_case[0]['login'];
            $_SESSION['fname']=$la_case[0]['fname'];
            $_SESSION['lname']=$la_case[0]['lname'];
            $_SESSION['role']=$la_case[0]['role'];
            if ($_SESSION['role'] == "admin") {
	            header("location:admin/index.php");
	        } else if ($_SESSION['role'] == "user") {
	            header("location:admin/index.php");
	        }
        } else {
            $message = 'Incorrect Login or Password.';
        }
    }
} 
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Human Resource Management</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<h1>HRM</h1>
		<p>HRM is open-source Application for Human Resources Management written in XAMP Stack<br />
		distributed under the GNU General Public License. As an open source technology, anyone can run, modify or develop <a href="https://github.com/issamelferkh/HRM">the code.</a>.</p>
			</header>

		<!-- Signup Form -->
			<form id="signup-form" method="POST" action="index.php">
				<input type="text" name="login" id="login" value="<?php if (isset($_POST['login'])) echo $_POST['login']; ?>" placeholder="Login" />
				<input type="password" name="password" id="password" value="<?php if (isset($_POST['password'])) echo $_POST['password']; ?>" placeholder="Password" />
				<input type="submit" name="btissam" value="Sign In" />
			</form>

		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
					<li><a href="#" class="icon brands fa-github"><span class="label">GitHub</span></a></li>
					<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
				</ul>
				<ul class="copyright">
					<li>All Right Reserved.</li><li>© 2020 <a href=#>Btissam Yaqine</a>.</a></li>
				</ul>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/main.js"></script>


	</body>
</html>