<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="Login.css" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <script src="Login.js"></script>
    </head>
    <body>
 
      <div class="container">
       <form method="POST" action="postMetoda.php" id="Form" onsubmit="return validateForm()">
        <h1>Login</h1>
        <div class="box">
       <input  type="text" placeholder="username" name="user" id="username" required>
       <i class='bx bxs-user'></i>

        </div>
        <div class="box">
          <input  type="password" placeholder="passoword" name="psw" id="password" required>
          <i class='bx bxs-lock-alt'></i>
      
           </div>
           <div class="forgot">
            <label><input type="checkbox">Remember me</label>
            <a href="#">Forgot password?</a>
             </div>
             <button type="submit" class="btn" value='RUAJ'>Submit</button>

             <div class="register-link">
              <p>Dont have an account?<a href="register.php">  Register</a></p>
             </div>
             
       </form>
       <h5><?php testGet()?></h5>
      </div>
      
    
        
    </body>
</html>
<?php
function testGet(){ 
if(isset($_POST['submit'])){
$perdoruesi =$_POST['user'];
$fjalkalimi =$_POST['psw'];
echo 'Perdoruesi: ', $perdoruesi,
'<br> Fjalkalimi: ', $fjalkalimi;
exit();
} else{
echo 'Ju nuk keni shtyp butonin RUAJ!';
}
}
?>
