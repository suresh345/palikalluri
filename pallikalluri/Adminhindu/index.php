<?php
session_start();
 include "config.php";
?>

<html>
<head><title>Admin</title>
  <style>
  body {font-family: Arial, Helvetica, sans-serif;
background-color: blue;
  }

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    border-radius: 1em;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}


.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 10px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 2; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
   /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 10% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 30%; /* Could be more or less, depending on screen size */
    border-radius: 2em;
}

/* The Close Button (x) */


/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)}
    to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 100px) {
    span.psw {
       display: block;
       float: none;
    }

}
  </style>
</head>
  <body>

 
     
     
      <form class="modal-content animate" action="" method="post">
        <div class="imgcontainer">

          <img src="http://thehinduads.com/frtamil/Index_files/login-logo.png" width=200px height=180px>
        </div>

        <div class="container">
          <label for="uname"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" autocomplete="organization" name="user" required>

          <label for="psw"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" autocomplete="organization" required>

          <button type="submit" name="submit">Login</button>
        </div>


      </form>

</body>
</html>
<?php
if(isset($_POST["submit"]))
						{
							$sql="SELECT * FROM admin  WHERE username='{$_POST["user"]}' AND password='{$_POST["password"]}'";

							$res=$con->query($sql);
							if($res->num_rows>0)
							{
								$row=$res->fetch_assoc();
								 $_SESSION["id"]=$row["id"]; 
								$_SESSION["username"]=$row["username"];
								switch ($row["username"]) {
    case "50295@thehindutamil.co.in":
        header('location:  schooldetail.php');
        break;
    case "50277@thehindutamil.co.in":
        header('location:  collegedetail.php');
        break;
    default:
        header('location: index.php');
}
							}
							else
							{
								echo "<p class='error'>Invalid User Na or Password</p>";
							}
						}
					
?>