<?php
ob_start();//JULAN: kind of like: "Start remembering everything that would normally be outputted, but don't quite do anything with it yet" - 'saved to buffer'
session_start();
function sanitize ($a){
  $b = $_POST[$a];
  $b = trim($b);
  $b = strip_tags($b);
  $b = htmlspecialchars($b);
  return $b;
}
require_once 'actions/db_connect.php';

// if there is no session set - it will route back to register page
if ( isset($_SESSION['user'])!="" ) {
 header("Location: index.php");
 exit;
}

$error = false;

if( isset($_POST['btn-login']) ) {

 // prevent sql injections/ clear user invalid inputs
 $email = sanitize('email');
 $pass = sanitize('password');
 // prevent sql injections / clear user invalid inputs

 if(empty($email)){
  $error = true;
  $emailError = "Please enter your email address.";
} else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
  $error = true;
  $emailError = "Please enter valid email address.";
}

if(empty($pass)){
  $error = true;
  $passError = "Please enter your password.";
}

 // if there's no error, continue to login
if (!$error) {

  $password = hash('sha256', $pass); // password hashing

  $res=mysqli_query($connect, "SELECT Admin_ID, Email, Passwort FROM admindata WHERE Email='$email'");
  $row=mysqli_fetch_array($res, MYSQLI_ASSOC);//JULAN: run Query and 'translate'
  $count = mysqli_num_rows($res); // if uname/pass is correct it returns must be 1 row
  echo $pass;
  echo $email;
  if( $count == 1 && $row['Passwort']==$pass ) {
   $_SESSION['user'] = $row['Admin_ID'];//JULAN: if user name input equals name in row userid ...then it redirects to home page - and log in was successful
   header("Location: adminIndex.php");
 } else {
   $errMSG = "Incorrect Credentials, Try again...";
 }

}

}
$emailError = "";
$nameError="";
$passError="";
$email ="";
$pass ="";
?>

<!-- gets header and nav --> 
<?php
include ("header.php");
?>
     <div class="row">
      <div class="col-lg-12">
        <h1>Admin LogIn</h1>
        </div>
    

      <!-- JULAN: PHP_SELF = var - that returns the current script being executed. Variable returns the name and path of the current file (from root folder) -> use this in the action field of the Form  -->
        <div class="col-lg-6 offset-lg-2">

      <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off"> 
            <h2 class="page-header text-center">Sign In.</h2>
         
            <?php
            if ( isset($errMSG) ) {
              echo $errMSG; ?> 
              
              <?php
            }


            ?>
            <!--referres to  error message above-->


            
            <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $email; ?>" maxlength="40" />

            <span class="text-danger"><?php echo $emailError; ?></span>


            <input type="password" name="password" class="form-control" placeholder="Your Password" maxlength="15"/>

            <span class="text-danger"><?php echo $passError; ?></span>
            <hr />
            <!--<a href="register.php" class="pull-right">Register Here...</a>-->
            <button type="submit" name="btn-login" class="btn btn-primary pull-right">Sign In</button>
            <br><br>
        </form>

          </div><!-- col close -->

      </div><!-- row close -->

  </div> <!-- container close needs to move into footer when available -->
  </body>
  </html>
  <?php ob_end_flush(); ?>