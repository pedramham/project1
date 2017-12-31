<?php
   session_start();
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'loginphp');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
 
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT * FROM login  WHERE username = '$myusername' and pass = '$mypassword'";

      $result=mysqli_query($db,$sql);
     // die($result);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
if(mysqli_num_rows($result) == 1)
{
       
         $_SESSION['login_user'] = $myusername;
          echo '<script>alert("خوش آمدید"); </script>';
         header("location: index.php");
      }else {
        session_unset(); 
        session_destroy(); 
         echo '<script>alert("نام کاربری یا رمز عبور را شما اشتباه است") ;</script>';
      }
   }
?>

	


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>فرم لاگین</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body>
<div class="login">
	<h1>فرم ورود</h1>
        <form method="post" action="login.php">
    	<input type="text" name="username" placeholder="نام کاربری" required="required" />
        <input type="password" name="password" placeholder="رمز عبور" required="required" />
        <button type="submit" name="submit" class="btn btn-primary btn-block btn-large">ورود</button>
    </form>
</div>
</body>
</html>