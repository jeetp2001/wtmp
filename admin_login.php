<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
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
            margin-top: 10px;
            font-weight: 900;
            font-size: 1.8rem;
            color: #000000;
            letter-spacing: 1px;
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
            font-size: 14px;
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
	
	<form action="" method="post">
		<div class="container">
        <div class="brand-logo"></div>
        <div class="brand-title">ADMIN LOGIN</div>
        <div class="inputs">
            <label>EMAIL</label>
            <input type="email" placeholder="example@test.com" />
            <label>PASSWORD</label>
            <input type="password" placeholder="Min 6 charaters long" />
            <button type="submit">LOGIN</button>
        </div>

        </div>
	</form>
		
		<?php
			session_start();
			if(isset($_POST['submit'])){
				$connection = mysqli_connect("localhost","root","G0d!sgreat");
				$db = mysqli_select_db($connection,"wtmp2");
				$query = "select * from login where email = '$_POST[email]'";
				$query_run = mysqli_query($connection,$query);
				while ($row = mysqli_fetch_assoc($query_run)) {
					if($row['email'] == $_POST['email']){
						if($row['password'] == $_POST['password']){
							$_SESSION['name'] =  $row['name'];
							$_SESSION['email'] =  $row['email'];
							header("Location: admin_dashboard.php");
						}
						else{
							?>
							<span>Wrong Password !!</span>
							<?php
						}
					}
				}
				
			}
		?>

</body>
</html>