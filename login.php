<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
	  <style>
        body {
            background: rgb(109, 109, 110);
            background: linear-gradient(90deg, rgba(109, 109, 110, 1) 6%, rgba(0, 0, 0, 0.9587185215883228) 100%);
        }

        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;900&display=swap');

        body {
			background: rgb(109,109,110);
            background: linear-gradient(90deg, rgba(109,109,110,1) 6%, rgba(0,0,0,0.9587185215883228) 100%);

            margin: 0;
            width: 100vw;
            height: 100vh;

            display: flex;
            align-items: center;
            text-align: center;
            justify-content: center;
            place-items: center;
            overflow: hidden;
            font-family: poppins;
        }

        .container {
            position: relative;
            width: 350px;
            height: 500px;
            border-radius: 20px;
            padding: 40px;
            box-sizing: border-box;
            background: #ecf0f3;

        }



        .brand-title {
            margin-top: 5px;
            font-weight: 900;
            font-size: 1.7rem;
            color: #000000;
            letter-spacing: 0.5px;
        }

        .inputs {
            text-align: left;
            margin-top: 30px;
        }

        label,
        input,
        button {
            display: block;
            width: 100%;
            padding: 0;
            border: none;
            outline: none;
            box-sizing: border-box;
        }

        label {
            margin-bottom: 4px;
        }

        label:nth-of-type(2) {
            margin-top: 12px;
        }

        input::placeholder {
            color: gray;
        }

        input {
            background: #ecf0f3;
            padding: 10px;
            padding-left: 20px;
            height: 50px;
            font-size: 24px;
            border-radius: 50px;
            box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
        }

        button {
            color: white;
            margin-top: 20px;
            background: #000000;
            height: 40px;
            border-radius: 20px;
            cursor: pointer;
            font-weight: 900;
            box-shadow: 6px 6px 6px #cbced1, -6px -6px 6px white;
            transition: 0.5s;
        }

        button:hover {
            box-shadow: none;
        }

        a {
            position: absolute;
            font-size: 8px;
            bottom: 4px;
            right: 4px;
            text-decoration: none;
            color: black;
            background: yellow;
            border-radius: 10px;
            padding: 2px;
        }

        h1 {
            position: absolute;
            top: 0;
            left: 0;
        }
    </style>
</head>
<body>
	<center><br><br>
	<div class="container">
        <div class="brand-logo"></div>
        <div class="brand-title">Student Management System</div><br><br>
	<form action="" method="POST">
		<input type="submit" name="admin_login" value="Admin Login" required>
		<input type="submit" name="student_login" value="Student Login" required>
	</form>
	<?php
		if(isset($_POST['admin_login'])){
			header("Location: admin_login.php");
		}
		if(isset($_POST['student_login'])){
			header("Location: student_login.php");
		}
	?>
	</center>
</body>
</html>