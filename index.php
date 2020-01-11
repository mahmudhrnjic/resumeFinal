<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<header id="header">
	<div id=logoHeader><img class="headerLogo" src="logo.png"></div>
	<div class="headerItems"><a href="#about" style="color: black">ABOUT</a></div>
	<div class="headerItems"><a href="#education" style="color: black">EDUCATION</a></div>
	<div class="headerItems"><a href="#contact" style="color: black">CONTACT</a></div>
	<div class="headerItems"><a href="index2.php" style="color: black">GITHUB</a></div>
</div>


	
</header>

<div id="title">
	<p id="naslov">I am Mahmud Hrnjic</p>
	<p id="podnaslov">Web developer</p>
	<a href="index3.html" target="_blank"><p id="calc">Calculator</p></a>
</div>

<div class="scroll"><a href="#about"><img class="arrow" src="arrow.png"></a></div>



<div class="content" id="about">
	
	<header class="logoHeader"><img class="logo" src="logo.gif"></header>
	<h1>ABOUT ME</h1>
	<p id="aboutMe">
	My name is Mahmud Hrnjic.
	I'm student of Software engineering at the International University of Sarajevo.<br><br>
	My tech skills are: HTML5, CSS3 and JavaScript
    </p>
    <h2>Tech Skills:</h2>
    <div id="techSkills">
    	<div class="ss"><img class="techSkillsIcons" src="html.png"></div>
    	<div class="ss"><img class="techSkillsIcons" src="css.png"></div>
    	<div class="ss"><img class="techSkillsIcons" src="js.png"></div>
    </div>

</div>


<div class="content" id="education">
	<header class="logoHeader"><img class="logo" src="logo.gif"></header>
	<h1>EDUCATION</h1>
	<div id="edu">
    	<div class="ee"><img class="eduIcons" src="bbm.png"></div>
    	<div class="ee"><img class="eduIcons" src="ius.png"></div>
    </div>

    <div id="eduCaptions">
    	<p class="cc">2014-2018<br>Valedictorian award</p>
    	<p class="cc">2018-2022<br>Software engineering</p>
    </div>
</div>



<div class="content" id="contact">
	<h1>CONTACT INFORMATIONS</h1>
	<div id="cont">
		<a href="https://ba.linkedin.com/in/mahmud-hrnjic-1b62b7177" target="_blank"><img onmouseover="bigImg" class="contactIcons" src="linkedin.png"></a>
		<a href="https://www.instagram.com/mahmudhrnjic/?hl=en" target="_blank"><img class="contactIcons" src="instagram.png"></a>
	</div>
</div>
<div id="form">
  <form action="index.php" method="POST">
  
  <input type="text" name="firstname" placeholder="Your name">

  <input type="text" name="email" placeholder="Your e-mail address">
  
  <input id="question" type="text" name="question" placeholder="Write your question here">

  <a href="#about"><input type="submit" value="Submit" name="subb"></a>
</form> 
</div>
</body>
</html>

<?php

   require '../PHPMailer-master/PHPMailerAutoload.php';
   $con = mysqli_connect("localhost", "root", "") or die("unable");

   mysqli_select_db($con, "project1_database");
   

   if (isset($_POST["subb"])) {
   	# code...
   
   $name=$_POST["firstname"];
   $email=$_POST["email"];
   $question=$_POST["question"];
   $subject="Question from resume webpage";

   $connection = "INSERT  INTO base (Name,Email,Question) VALUES ('$name','$email','$question')";
   $connection2 = mysqli_query ($con, $connection);  
   
    $mail = new PHPMailer();
    $mail ->IsSmtp();
     $mail ->SMTPDebug = 0;
     $mail ->SMTPAuth = true;
     $mail ->SMTPSecure = 'ssl';
     $mail ->Host = "smtp.gmail.com";
     $mail ->Port = 465; // or 587
     $mail ->IsHTML(true);
     $mail ->Username = "mahmudmaho@gmail.com";
     $mail ->Password = "";
     $mail ->SetFrom("mahmudmaho@gmail.com");
     $mail ->Subject = $subject;
     $mail ->Body = $name." asked you the following question: " .$question;
     $mail ->AddAddress("mahmudhrnjic@gmail.com");
     
     $mail->Send();
    //header('Location: ../index.php');
     }
    
?>