<?php	 
 $conn = pg_connect("host=ec2-54-235-108-217.compute-1.amazonaws.com dbname=dav987822a4d5g user=jkbkabjuswknzz password=433742a75814552fccc3d49c54551698f4f73311e15261248003c93a7fda66f0");
 if(!$conn){echo "Lost Connect";}
 if(isset($_POST['login'])){
	$username = $_POST['username'];
 	$password = $_POST['password'];
 	$sql= "SELECT * FROM tbl_user WHERE username ='$username' and password ='$password'";
	$result = pg_query($conn, $sql);
	$check = pg_num_rows($result);
	if($check == 1){
		echo "Login successfull";
		header("Location:chucmung.php");
	}
	else{
		echo "Stupid";
	}
 }
		

 ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
	<div class="login_form">
  <div class="details">
    <div class="welcome">Welcome</div>
    <form action="/" method="post">
      <div class="wrap">
        <label>Email</label>
        <input type="text" class="input">
        </div>
      <div class="wrap">
        <label>Password</label>
        <input type="password" class="input" data-type="password">
        </div>
      <div class="wrap">
        <label>Forgot password?</label>
        </div>
      <button type="submit" class="button"><h1 class="sign">Sign in!</h1></button>
    </form>
  </div>
    <img class="fox" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTExLjk5OSA1MTEuOTk5IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTEuOTk5IDUxMS45OTk7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIHN0eWxlPSJmaWxsOiNEMjY0Mzc7IiBkPSJNNDM0LjUyMSwxMS41NDNjMTAuNzktNC4xMjIsMjIuMzg0LDQuMDE5LDIxLjg4MiwxNS41NTkNCgljLTQuMDQ2LDkyLjk5NC0zNi4wNTcsMTczLjE2MS0zNi4wNTcsMTczLjE2MWwtMTIwLjkxLTg0LjgzN0MzNDcuNjQzLDU3LjM2NCw0MDUuOTc1LDIyLjQ0OSw0MzQuNTIxLDExLjU0M3oiLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiNCNDQ2MzI7IiBkPSJNMzQzLjE2LDE0Ni4xMDRDMzc5LjUzMiw4OC42LDQzMC4zMzUsMzQuNTYyLDQ1My4yNjUsMTcuMDg0YzIuMDQ0LDIuNzYzLDMuMzA1LDYuMTY5LDMuMTM4LDEwLjAxNw0KCWMtNC4wNDYsOTIuOTk0LTM2LjA1NywxNzMuMTYxLTM2LjA1NywxNzMuMTYxTDM0My4xNiwxNDYuMTA0eiIvPg0KPHBhdGggc3R5bGU9ImZpbGw6I0QyNjQzNzsiIGQ9Ik03Ny40OTUsMTEuNTQzYy0xMC43OS00LjEyMi0yMi4zODQsNC4wMTktMjEuODgyLDE1LjU1OWM0LjA0Niw5Mi45OTQsMzYuMDU3LDE3My4xNjEsMzYuMDU3LDE3My4xNjENCglsMTIwLjkxLTg0LjgzN0MxNjQuMzcyLDU3LjM2NCwxMDYuMDQxLDIyLjQ0OSw3Ny40OTUsMTEuNTQzeiIvPg0KPHBhdGggc3R5bGU9ImZpbGw6I0I0NDYzMjsiIGQ9Ik0xNjguODU2LDE0Ni4xMDRDMTMyLjQ4NCw4OC42LDgxLjY4MSwzNC41NjIsNTguNzUxLDE3LjA4NGMtMi4wNDQsMi43NjMtMy4zMDUsNi4xNjktMy4xMzgsMTAuMDE3DQoJYzQuMDQ2LDkyLjk5NCwzNi4wNTcsMTczLjE2MSwzNi4wNTcsMTczLjE2MUwxNjguODU2LDE0Ni4xMDR6Ii8+DQo8Zz4NCgk8ZWxsaXBzZSBzdHlsZT0iZmlsbDojRUJDOUEwOyIgY3g9IjI1NiIgY3k9IjQ2OS40NjkiIHJ4PSI0OC4xIiByeT0iMzIuMDYiLz4NCgk8cGF0aCBzdHlsZT0iZmlsbDojRUJDOUEwOyIgZD0iTTE5OS44ODcsNDYxLjQ1NWMtNTYuMTEzLTMyLjA2NS0xNDkuMDczLTY2Ljk3NC0xNDkuMDczLTY2Ljk3NGw4LjkyLTI2Ljc2Mw0KCQljLTMuNzYtMS43ODctMjkuNTIyLTIuMTIzLTUyLjIzNCw1LjU2bDI0LjA0OC00MC4wODFoMTY4LjMzOVY0NjEuNDU1eiIvPg0KCTxwYXRoIHN0eWxlPSJmaWxsOiNFQkM5QTA7IiBkPSJNMzEyLjExMyw0NjEuNDU1YzU2LjExMy0zMi4wNjUsMTQ5LjA3My02Ni45NzQsMTQ5LjA3My02Ni45NzRsLTguOTItMjYuNzYzDQoJCWMzLjc2LTEuNzg3LDI5LjUyMi0yLjEyMyw1Mi4yMzQsNS41NmwtMjQuMDQ4LTQwLjA4MUgzMTIuMTEzVjQ2MS40NTV6Ii8+DQo8L2c+DQo8cGF0aCBzdHlsZT0iZmlsbDojRUI4NzRCOyIgZD0iTTI1NiwxMDAuNzI5YzExNi44NSwwLDIxNy4xNjIsMTE3LjA3NiwyNDguMTM5LDI3MC43MzljMC4xMjEsMC42MDMsMC4yNDIsMS4yMDYsMC4zNjEsMS44MDkNCgljMCwwLTU5LjExOS02MS4xMjMtMTIzLjI0OC0yOC41NTdjLTIzLjc4MSwxMi4wNzYtMzUuMDcxLDM4LjYxLTM1LjA3MSw2Ny42MDRjMCw0OC4wNzQtMzguNTM2LDc0LjY3My04NC4xODksNTYuMTk1DQoJYy0zLjg3LTEuNTY3LTguMTE1LTEuNTY3LTExLjk4NSwwYy00NS42NTMsMTguNDc4LTg0LjE4OS04LjEyMS04NC4xODktNTYuMTk1YzAtMjguOTk0LTExLjI5LTU1LjUyOC0zNS4wNzEtNjcuNjA0DQoJQzY2LjYxOSwzMTIuMTU1LDcuNSwzNzMuMjc4LDcuNSwzNzMuMjc4YzAuMTE5LTAuNjA0LDAuMjQtMS4yMDcsMC4zNjEtMS44MDlDMzguODM4LDIxNy44MDUsMTM5LjE1LDEwMC43MjksMjU2LDEwMC43Mjl6Ii8+DQo8cGF0aCBzdHlsZT0iZmlsbDojNEIzRjRFOyIgZD0iTTE3MS44MzEsMzI1LjE4MUwxNzEuODMxLDMyNS4xODFjLTE1LjQzMSwwLTI4LjA1Ni0xMi42MjUtMjguMDU2LTI4LjA1NnYtMTYuMDMyDQoJYzAtMTUuNDMxLDEyLjYyNS0yOC4wNTYsMjguMDU2LTI4LjA1NmwwLDBjMTUuNDMxLDAsMjguMDU2LDEyLjYyNSwyOC4wNTYsMjguMDU2djE2LjAzMg0KCUMxOTkuODg3LDMxMi41NTYsMTg3LjI2MiwzMjUuMTgxLDE3MS44MzEsMzI1LjE4MXoiLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiM1RDUzNjA7IiBkPSJNMTcxLjgzMSwyNTMuMDM2Yy0xLjM3MiwwLTIuNjg4LDAuMjE0LTQuMDA4LDAuNDA3djM5LjY3NGMwLDguODU0LDcuMTc4LDE2LjAzMiwxNi4wMzIsMTYuMDMyDQoJYzguODU1LDAsMTYuMDMyLTcuMTc4LDE2LjAzMi0xNi4wMzJ2LTEyLjAyNEMxOTkuODg3LDI2NS42NjEsMTg3LjI2MiwyNTMuMDM2LDE3MS44MzEsMjUzLjAzNnoiLz4NCjxjaXJjbGUgc3R5bGU9ImZpbGw6I0ZGRkZGRjsiIGN4PSIxNzEuODMiIGN5PSIyNzMuMDc5IiByPSIxMi4wMiIvPg0KPHBhdGggc3R5bGU9ImZpbGw6IzRCM0Y0RTsiIGQ9Ik0zNDAuMTY5LDMyNS4xODFMMzQwLjE2OSwzMjUuMTgxYy0xNS40MzEsMC0yOC4wNTYtMTIuNjI1LTI4LjA1Ni0yOC4wNTZ2LTE2LjAzMg0KCWMwLTE1LjQzMSwxMi42MjUtMjguMDU2LDI4LjA1Ni0yOC4wNTZsMCwwYzE1LjQzMSwwLDI4LjA1NiwxMi42MjUsMjguMDU2LDI4LjA1NnYxNi4wMzINCglDMzY4LjIyNiwzMTIuNTU2LDM1NS42LDMyNS4xODEsMzQwLjE2OSwzMjUuMTgxeiIvPg0KPHBhdGggc3R5bGU9ImZpbGw6IzVENTM2MDsiIGQ9Ik0zNDAuMTY5LDI1My4wMzZjLTEuMzcyLDAtMi42ODgsMC4yMTQtNC4wMDgsMC40MDd2MzkuNjc0YzAsOC44NTQsNy4xNzgsMTYuMDMyLDE2LjAzMiwxNi4wMzINCgljOC44NTUsMCwxNi4wMzItNy4xNzgsMTYuMDMyLTE2LjAzMnYtMTIuMDI0QzM2OC4yMjYsMjY1LjY2MSwzNTUuNiwyNTMuMDM2LDM0MC4xNjksMjUzLjAzNnoiLz4NCjxjaXJjbGUgc3R5bGU9ImZpbGw6I0ZGRkZGRjsiIGN4PSIzNDAuMTciIGN5PSIyNzMuMDc5IiByPSIxMi4wMiIvPg0KPHBhdGggc3R5bGU9ImZpbGw6IzVENTM2MDsiIGQ9Ik0yNTUuNTM3LDM4OS4zMWMxNy45NjUsMCwzMi41MjgsMTEuOTAzLDMyLjUyOCwyNi41ODZjMCwxNC4xNi0xMy42NzEsMjEuNjE3LTIzLjUzNywyNy4xMw0KCWMtNS43MTksMy4xOTYtMTIuMjYzLDMuMTk2LTE3Ljk4MiwwYy05Ljg2Ni01LjUxMy0yMy41MzctMTIuOTY5LTIzLjUzNy0yNy4xM0MyMjMuMDA4LDQwMS4yMTMsMjM3LjU3MiwzODkuMzEsMjU1LjUzNywzODkuMzF6Ii8+DQo8cGF0aCBzdHlsZT0iZmlsbDojNEIzRjRFOyIgZD0iTTI2My41MDQsNDQyLjM0MWMtOS44NjYtNy4wODgtMjMuNTM3LTE2LjY3NS0yMy41MzctMzQuODgxYzAtNS45NjcsMS41ODQtMTEuNDkxLDQuMTQxLTE2LjM3NA0KCWMtMTIuMzA1LDMuNzktMjEuMTAxLDEzLjQyNy0yMS4xMDEsMjQuODFjMCwxNC4xNiwxMy42NzEsMjEuNjE3LDIzLjUzNywyNy4xM2M1LjcxOSwzLjE5NiwxMi4yNjMsMy4xOTYsMTcuOTgyLDANCgljMC4wNDQtMC4wMjQsMC4wOTMtMC4wNTMsMC4xMzctMC4wNzhDMjY0LjI4Myw0NDIuNzE0LDI2My44OCw0NDIuNjExLDI2My41MDQsNDQyLjM0MXoiLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiNEMjY0Mzc7IiBkPSJNMjU2LDEwMC43MjlsLTE1LjU4OSwwLjc3OUMxMzAuMzE0LDExMS4zNzYsMzcuNDUsMjI0LjY5LDcuODYxLDM3MS40NjgNCgljLTAuMTIxLDAuNjAzLTAuMjQyLDEuMjA2LTAuMzYxLDEuODFjMCwwLDQ3LjcxMS00OS4yOCwxMDMuOS0zNS43MDZDMTE4LjQyNiwxMzcuOTI2LDI0Mi45NTIsMTAwLjcyOSwyNTYsMTAwLjcyOXoiLz4NCjxwYXRoIGQ9Ik01MTEuODU3LDM3MS44MjNjLTEzLjY0Ny02OS4wMzktNDEuNjY2LTEzMi41MTctNzkuNjYtMTgxLjE5NmMzLjYxMy05LjM2MywyNy44NS03NS4xMTQsMzEuNjgzLTE2My4xOTkNCgljMC4zNDMtNy44ODUtMy4yODMtMTUuMzU0LTkuNjk5LTE5Ljk4Yy02LjUtNC42ODctMTQuODU3LTUuNzc2LTIyLjM1My0yLjkxMWMtMjcuMjEyLDEwLjM5Ni03OS44MzksMzYuNDc3LTEyOS4xMjYsOTQuNzU5DQoJYy0xNS4zNzItNC4wMi0zMC45NzctNi4wNjctNDYuNzAyLTYuMDY3cy0zMS4zMywyLjA0Ni00Ni43MDIsNi4wNjdDMTYwLjAxMiw0MS4wMTcsMTA3LjM4OCwxNC45MzUsODAuMTcxLDQuNTM3DQoJYy03LjQ5OC0yLjg2Ni0xNS44NTQtMS43NzYtMjIuMzUzLDIuOTExYy02LjQxNiw0LjYyNi0xMC4wNDIsMTIuMDk1LTkuNjk5LDE5Ljk4YzMuODMzLDg4LjA4NSwyOC4wNywxNTMuODM2LDMxLjY4MywxNjMuMTk5DQoJQzQxLjgwOSwyMzkuMzA2LDEzLjc5LDMwMi43ODUsMC4xNDMsMzcxLjgyM2MtMC40OCwyLjQyNywwLjI2OCw0LjkzNSwxLjk5OSw2LjcwMmMxLjczLDEuNzY3LDQuMjIyLDIuNTY3LDYuNjU5LDIuMTM5DQoJYzE0LjI2OS0yLjUxMSwzMC43ODYtNC44OSw0MC42MTYtNS43MDlsLTUuNzE4LDE3LjE1NWMtMC42NDQsMS45MzMtMC40NzQsNC4wNDQsMC40Nyw1Ljg0OWMwLjk0NSwxLjgwNSwyLjU4MywzLjE0OCw0LjUzOCwzLjcyMQ0KCWMwLjczLDAuMjE0LDczLjI2NCwyMS42MzYsMTIwLjA2OSw1MS4wMjljNC45MjYsOC4xNiwxMS40ODksMTQuOTYxLDE5LjQ5NSwxOS45NzRjMy45MjQsMi40NTYsOC4wOTgsNC40MTMsMTIuNDY0LDUuODg3DQoJYzIuOTc2LDE3LjM2MiwyNi4xNzYsMzAuNDY2LDU1LjI2NiwzMC40NjZjMjkuMDg5LDAsNTIuMjg5LTEzLjEwNSw1NS4yNjYtMzAuNDY3YzQuMzY2LTEuNDc0LDguNTQxLTMuNDMsMTIuNDY0LTUuODg2DQoJYzguMDA1LTUuMDEyLDE0LjU2OC0xMS44MTMsMTkuNDk0LTE5Ljk3MmM0Ni44MDUtMjkuMzk0LDExOS4zMzYtNTAuODE3LDEyMC4wNy01MS4wMzFjMS45NTUtMC41NzMsMy41OTMtMS45MTYsNC41MzgtMy43MjENCgljMC45NDQtMS44MDUsMS4xMTQtMy45MTcsMC40Ny01Ljg0OWwtNS43MTgtMTcuMTU1YzkuODMxLDAuODIsMjYuMzQ3LDMuMTk4LDQwLjYxNiw1LjcwOWMyLjQzOCwwLjQyOSw0LjkyOC0wLjM3Miw2LjY1OS0yLjEzOQ0KCUM1MTEuNTg5LDM3Ni43NTgsNTEyLjMzNywzNzQuMjUsNTExLjg1NywzNzEuODIzeiBNNDM3LjE4MiwxOC41NDljMC43OTktMC4zMDUsMS42MTUtMC40NzksMi40MjgtMC41NDkNCgljLTQuNjczLDMuNTE3LTEyLjMxNyw5LjU5Ny0yMS45NTksMTguNDQ1Yy0zLjA1MiwyLjgtMy4yNTYsNy41NDQtMC40NTUsMTAuNTk3YzEuNDc5LDEuNjEyLDMuNSwyLjQyOSw1LjUyOCwyLjQyOQ0KCWMxLjgxMiwwLDMuNjI5LTAuNjUzLDUuMDY5LTEuOTc0YzkuMjgyLTguNTE3LDE2LjYzMS0xNC4zNDIsMjAuOTUzLTE3LjU5MmMtMy40NzEsNzAuMDE5LTIwLjQ1MSwxMjYuMTgyLTI3LjY1NCwxNDcuMjQ0DQoJYy0wLjkwMy0xLjAzOC0xLjgwNC0yLjA4LTIuNzE3LTMuMTAyYy0xNy42MzUtMTkuNzI3LTM2LjcyLTM2LjA4NC01Ni45Mi00OC44NDljMTMuMDYyLTE5LjIxMSwyNy4yNjUtMzcuMjM4LDQyLjI5NS01My42MDQNCgljMi44MDItMy4wNTEsMi42LTcuNzk1LTAuNDUxLTEwLjU5N2MtMy4wNTEtMi44MDMtNy43OTYtMi42MDEtMTAuNTk3LDAuNDUxYy0xNS43MzIsMTcuMTMxLTMwLjU4LDM2LjAwOS00NC4yLDU2LjEyNQ0KCWMtMS42ODQtMC45MTUtMy4zNzUtMS44MDctNS4wNzItMi42NzNjLTguMjU5LTQuMjE1LTE2LjYyNy03LjgwMy0yNS4wNzgtMTAuNzk0QzM2NC4yMTksNTEuODAzLDQxMi4wOSwyOC4xMzYsNDM3LjE4MiwxOC41NDl6DQoJIE0xOTMuNjQ4LDEwNC4xMDZjLTguNDUxLDIuOTkyLTE2LjgxOSw2LjU4LTI1LjA3OCwxMC43OTRjLTEuNjkyLDAuODYzLTMuMzc3LDEuNzUxLTUuMDU1LDIuNjYzDQoJYy0zOS4xMjMtNTcuNzk0LTc3LjUwMi04OS4zNjgtOTEuMTAyLTk5LjU2MWMwLjgwNiwwLjA3MiwxLjYxMywwLjI0NSwyLjQwNSwwLjU0N0M5OS45MTQsMjguMTM3LDE0Ny43ODIsNTEuODA2LDE5My42NDgsMTA0LjEwNnoNCgkgTTYzLjI1NCwyOS45MDZjNC45NDcsMy43MjEsMTMuODY2LDEwLjgyLDI1LjEyNSwyMS40OGMxNS41MzIsMTQuNzA2LDM4LjcwNSwzOS4yODEsNjIuMTgyLDczLjgwMg0KCWMtMjAuMjA2LDEyLjc2Ni0zOS4yOTYsMjkuMTI3LTU2LjkzNiw0OC44NTljLTAuOTEzLDEuMDIxLTEuODEzLDIuMDY0LTIuNzE3LDMuMTAyQzgzLjcwNiwxNTYuMDg4LDY2LjcyNiw5OS45MjUsNjMuMjU0LDI5LjkwNnoNCgkgTTI4Ni4zNjMsNDg3LjE0M2MtNy44NzIsNC4zOC0xOC45MzksNi44OTMtMzAuMzYzLDYuODkzYy0xMS40MjQsMC0yMi40OTEtMi41MTItMzAuMzYzLTYuODkzDQoJYy0yLjkyMy0xLjYyNy01LjI4MS0zLjQzNC02Ljk5Ni01LjMxNWMwLjk1MywwLjAzOSwxLjkxLDAuMDY2LDIuODczLDAuMDY2YzExLjA5OCwwLDIyLjgwNy0yLjYsMzQuNDg2LTcuNzgyDQoJYzExLjY4MSw1LjE4MiwyMy4zODcsNy43ODIsMzQuNDg2LDcuNzgyYzAuOTYzLDAsMS45MTktMC4wMjcsMi44NzMtMC4wNjZDMjkxLjY0Myw0ODMuNzA5LDI4OS4yODYsNDg1LjUxNiwyODYuMzYzLDQ4Ny4xNDN6DQoJIE0yNjEuMjQzLDQzNi4yN2wtMC4zNzQsMC4yMDhjLTMuNDM5LDEuOTIyLTcuMjI4LDEuOTIyLTEwLjY2NiwwbC0wLjM3NS0wLjIwOWMtMTAuOTQ3LTYuMTE1LTE5LjMyMS0xMS40OTgtMTkuMzIxLTIwLjM3NA0KCWMwLTEwLjUyNCwxMS4yMjgtMTkuMDg2LDI1LjAyOC0xOS4wODZzMjUuMDI4LDguNTYyLDI1LjAyOCwxOS4wODZDMjgwLjU2NCw0MjQuNzcyLDI3Mi4xOSw0MzAuMTU1LDI2MS4yNDMsNDM2LjI3eg0KCSBNNDQ5LjA0NywzNjAuOTQ0Yy0zLjQyMywxLjYyNi01LjA5NSw1LjU1MS0zLjg5Niw5LjE0Nmw2LjQ5LDE5LjQ3MmMtMTcuNDY4LDUuNTA2LTYyLjA4OSwyMC40ODgtOTkuNzg1LDQwLjgxNA0KCWMxLjItNS43MTYsMS44MjYtMTEuNzU2LDEuODI2LTE4LjA1MWMwLTE4Ljg0Niw0LjU0Ny00My44NDIsMjYuMjA3LTU1Ljg5NWMzLjYxOS0yLjAxNCw0LjkyMS02LjU4MSwyLjkwNy0xMC4yMDENCglzLTYuNTgtNC45Mi0xMC4yMDEtMi45MDdjLTIxLjg2OSwxMi4xNjktMzMuOTEzLDM2LjY3NS0zMy45MTMsNjkuMDAyYzAsMjEuMTYzLTguMzUxLDM4LjUyOS0yMi45MTIsNDcuNjQ1DQoJYy0xNC4xNTYsOC44NjItMzMuMDA0LDkuMTg4LTUyLjI3LDEuMDQ5di05LjM3NWMxLjU5NC0wLjUyOSwzLjE2Mi0xLjIxOCw0LjY4Ny0yLjA2OWwwLjM3Mi0wLjIwOA0KCWMxMC43NTQtNi4wMDcsMjcuMDA2LTE1LjA4NCwyNy4wMDYtMzMuNDY5YzAtMTguNzk1LTE3Ljk1Ny0zNC4wODYtNDAuMDI4LTM0LjA4NmMtMjIuMDcyLDAtNDAuMDI4LDE1LjI5MS00MC4wMjgsMzQuMDg2DQoJYzAsMTguMzg0LDE2LjI1MiwyNy40NjIsMjcuMDA2LDMzLjQ2OWwwLjM3MiwwLjIwOGMxLjgxOSwxLjAxNywzLjcwMSwxLjc5MSw1LjYxMywyLjM0N3Y5LjA5OA0KCWMtMTkuMjY2LDguMTM5LTM4LjExNCw3LjgxMy01Mi4yNy0xLjA0OWMtMTQuNTYxLTkuMTE2LTIyLjkxMi0yNi40ODEtMjIuOTEyLTQ3LjY0NWMwLTMyLjMyNy0xMi4wNDQtNTYuODMzLTMzLjkxMy02OS4wMDINCgljLTMuNjItMi4wMTQtOC4xODctMC43MTItMTAuMjAxLDIuOTA3Yy0yLjAxNCwzLjYyLTAuNzEyLDguMTg3LDIuOTA3LDEwLjIwMWMyMS42NiwxMi4wNTMsMjYuMjA3LDM3LjA0OCwyNi4yMDcsNTUuODk1DQoJYzAsNi4yOTYsMC42MjYsMTIuMzM2LDEuODI2LDE4LjA1MmMtMzcuNjk5LTIwLjMyNi04Mi4zMTktMzUuMzA4LTk5Ljc4NS00MC44MTRsNi40OS0xOS40NzJjMS4xOTgtMy41OTUtMC40NzQtNy41Mi0zLjg5Ni05LjE0Ng0KCWMtMS42NzktMC43OTctNS41ODQtMi42MzgtMzEuNTMyLDAuOTI5YzE2LjIxMS0xMS43NjcsNDIuMjA2LTI0LjY5Nyw3My41OTYtMTguOTZjNC4wNzMsMC43NDcsNy45ODEtMS45NTQsOC43MjctNi4wMjgNCglzLTEuOTU0LTcuOTgyLTYuMDI4LTguNzI3Yy0zOC41MTktNy4wNDctNjkuMzcxLDkuMzc3LTg3LjY1NCwyMy4zNTJjMTYuMzY4LTY1LjM0LDQ2LjAyMi0xMjQuMTQ3LDg0Ljc0Ny0xNjcuNDY0DQoJYzIxLjU2Mi0yNC4xMTksNDUuMzA4LTQyLjg4Nyw3MC41ODEtNTUuNzg0YzI2LjA0NS0xMy4yOTUsNTMuMTY3LTIwLjAzNSw4MC42MS0yMC4wMzVzNTQuNTY1LDYuNzQsODAuNjEyLDIwLjAzMg0KCWMyNS4yNzIsMTIuODk3LDQ5LjAxOSwzMS42NjUsNzAuNTgxLDU1Ljc4NGMzOC43MjUsNDMuMzE4LDY4LjM3OSwxMDIuMTI1LDg0Ljc0NywxNjcuNDY1DQoJYy0xOC4yODItMTMuOTc2LTQ5LjEzMy0zMC40MDItODcuNjU1LTIzLjM1M2MtNC4wNzUsMC43NDUtNi43NzMsNC42NTItNi4wMjgsOC43MjdjMC43NDUsNC4wNzUsNC42NSw2Ljc3NSw4LjcyNyw2LjAyOA0KCWMzMS4yMzItNS43MTEsNTcuMjMyLDcuMTksNzMuNDg5LDE4Ljk0NUM0NTQuNjIsMzU4LjMxMSw0NTAuNzI0LDM2MC4xNDcsNDQ5LjA0NywzNjAuOTQ0eiIvPg0KPHBhdGggZD0iTTE5My45NjUsMjYyLjI5Yy0zLjc0MSwxLjc3OC01LjMzMiw2LjI1Mi0zLjU1NCw5Ljk5M2MxLjMxMSwyLjc1OSwxLjk3Niw1LjcyMywxLjk3Niw4LjgxdjE2LjAzMg0KCWMwLDExLjMzNS05LjIyMiwyMC41NTctMjAuNTU3LDIwLjU1N2MtMTEuMzM0LDAtMjAuNTU2LTkuMjIyLTIwLjU1Ni0yMC41NTd2LTE2LjAzMmMwLTExLjMzNSw5LjIyMi0yMC41NTcsMjAuNTU2LTIwLjU1Nw0KCWM0LjE0MiwwLDcuNS0zLjM1OCw3LjUtNy41cy0zLjM1OC03LjUtNy41LTcuNWMtMTkuNjA2LDAtMzUuNTU2LDE1Ljk1MS0zNS41NTYsMzUuNTU3djE2LjAzMmMwLDE5LjYwNiwxNS45NSwzNS41NTcsMzUuNTU2LDM1LjU1Nw0KCXMzNS41NTctMTUuOTUxLDM1LjU1Ny0zNS41NTd2LTE2LjAzMmMwLTUuMzMyLTEuMTU0LTEwLjQ2Mi0zLjQyOS0xNS4yNDlDMjAyLjE4LDI2Mi4xMDMsMTk3LjcwNSwyNjAuNTA5LDE5My45NjUsMjYyLjI5eiIvPg0KPHBhdGggZD0iTTM2Mi4zMDQsMjYyLjI5Yy0zLjc0MSwxLjc3OC01LjMzMiw2LjI1Mi0zLjU1NCw5Ljk5M2MxLjMxMSwyLjc1OCwxLjk3Niw1LjcyMiwxLjk3Niw4LjgxdjE2LjAzMg0KCWMwLDExLjMzNS05LjIyMiwyMC41NTctMjAuNTU2LDIwLjU1N2MtMTEuMzM1LDAtMjAuNTU3LTkuMjIyLTIwLjU1Ny0yMC41NTd2LTE2LjAzMmMwLTExLjMzNSw5LjIyMi0yMC41NTcsMjAuNTU3LTIwLjU1Nw0KCWM0LjE0MiwwLDcuNS0zLjM1OCw3LjUtNy41cy0zLjM1OC03LjUtNy41LTcuNWMtMTkuNjA2LDAtMzUuNTU3LDE1Ljk1MS0zNS41NTcsMzUuNTU3djE2LjAzMmMwLDE5LjYwNiwxNS45NTEsMzUuNTU3LDM1LjU1NywzNS41NTcNCglzMzUuNTU2LTE1Ljk1MSwzNS41NTYtMzUuNTU3di0xNi4wMzJjMC01LjMzMy0xLjE1My0xMC40NjMtMy40MjktMTUuMjQ5QzM3MC41MTksMjYyLjEwMywzNjYuMDQzLDI2MC41MDksMzYyLjMwNCwyNjIuMjl6Ii8+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />
  <div class="details-two">
   <h1 class="back">Welcome back!</h1>
    <p class="log">Log in and use the opportunities offered by our portal.</p>
    <h2 class="acc">You don't have an account?<br>Create</h2>
    <button class="customer"><h3>Customer Account</h3></button>
    <button class="res"><h3>Restaurant Account</h3></button>
  </div>
  
</div>
</body>
</html>
