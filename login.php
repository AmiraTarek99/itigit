<?php 

$servername = "MYSQL5047.site4now.net";
$username = "a82e8b_a3go";
$password = "vAxMvxqtTXAw8Vq";
$db="db_a82e8b_a3go";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);



// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['register']))
{
$username=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['pass'];
$phonenumber=$_POST['phone'];
$query="INSERT INTO `authors`(`Author_Name`, `Email`, `Password`, `Phone_Number`) VALUES ('$username','$email','$password','$phonenumber')";
if (mysqli_query($conn, $query)) {
  echo "New record created successfully";
}
else{ echo "failed";}

}
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Sign In Form</title>

<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

<link rel="stylesheet" href="css/style.css">
<meta name="robots" content="noindex, follow">
<script nonce="9e793216-081a-4c99-b281-54e9cb7558fc">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zaraz={deferred:[]},a.zaraz.q=[],a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.zaraz.init=()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];for(n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.x=Math.random(),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.zarazData.q=[];a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0;for(const e of[localStorage,sessionStorage])Object.keys(e||{}).filter((a=>a.startsWith("zaraz"))).forEach((t=>{try{a.zarazData["z_"+t.slice(7)]=JSON.parse(e.getItem(t))}catch{a.zarazData["z_"+t.slice(7)]=e.getItem(t)}}));z.referrerPolicy="origin",z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)},["complete","interactive"].includes(e.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script></head>
<body>
<div class="main">



<section class="sign-in">
<div class="container">
<div class="signin-content">
<div class="signin-image">
<figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
<a href="signup.php" class="signup-image-link">Create an account</a>
</div>
<div class="signin-form">
<h2 class="form-title">Sign in</h2>

<form action="instructor-create-course2.php" method="POST" class="register-form" id="login-form">
<div class="form-group">
<label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
<input type="text" name="email" id="email" placeholder="Email" />
</div>
<div class="form-group">
<label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
<input type="password" name="pass" id="your_pass" placeholder="Password" />
</div>

<div class="form-group form-button">
<input type="submit" name="signin" id="signin" class="form-submit" value="Log in" />
</div>
</form>
</div>
</div>
</div>
</div>
</section>
</div>

<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"72749b383d2741f6","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.6.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>