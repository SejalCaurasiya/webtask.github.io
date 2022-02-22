<?php
require_once('config.php');



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css2/style.css">
	<style>
	.title_bar{
width:100%;
height:60px;
font-size:30px;
text-align:center;
font: normal 60px 'Cookie', cursive;
background-color:darkblue;
color:white;
}




.topnav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: lightseagreen;
}

.topnav ul li {
  float: left;
}

.topnav ul li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}



  .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

 .search-container button:hover {
  background: #ccc;
}
 .search-container {
  float: right;
}


@media screen and (max-width: 600px) {
   .search-container {
    float: none;
  }
   a, .topnav input[type=text], .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
   input[type=text] {
    border: 1px solid #ccc;  
  }
}


img{
width:70vw;
}

.center {
display: block;
margin-left: auto;
margin-right: auto;
margin-top: 10px;
}


.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color:black;
  color: white;
}

.topnav .search-container {
  float: right;
  margin-top: -50px;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
	</style>
</head>
<body class="backgroud">
<div>
	<?php
	if(isset($_POST['signup'])){
	$name  = $_POST['name'];
	$email = $_POST['email'];
	$pword = $_POST['pass'];
	$repword = $_POST['re_pass'];
	
	if($pword != $repword){
		echo 'Password are not same';
	} else{
	$sql = "INSERT INTO reginfo (name, email, password ) VALUES(?,?,?)";
	$stmtinsert =$db->prepare($sql);
	$result = $stmtinsert->execute([$name, $email, $pword]);
	if($result){
		echo 'Successfully saved.';
	}else{
		echo 'There were erros while saving the data.';
	}
		

	}
	}
	
	?>
</div>
<div class="topnav">
  <ul>
  <li><a class="active" href="index.html">HOME</a></li>
  <li><a href="about.html">ABOUT US</a></li>
  <li><a href="registeration/index2.php">LOGIN</a></li>
  <li><a href="Foodback.html">FEEDBACK</a></li>
  </ul>
  </div>
    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" >
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="YourName" required />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="YourEmail" required />
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" required />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" required />
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="index2.html" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

        
       

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>