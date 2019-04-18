
<?php
ob_start();
session_start();
require_once 'db_connect.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['user']) ) {
 header("Location: login.php");
 exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <title>Autismus-Welt - Seiten Bearbeiten</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  
  <!--Script used for the TinyMCE CDN -->
  <script src='https://cloud.tinymce.com/5/tinymce.min.js?apiKey=your_API_key'></script>
  
  <!--Script used to apply the TinyMCE into our WYSIWYG Editor with all of our needed plugins-->
  <script>
    tinymce.init({
      selector: '#mytextarea',
      height: 2500,
      width: 1050,
      plugins: 'link image table',
      menubar: 'insert table',
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image table tabledelete | tableprops tablerowprops tablecellprops"

    });
  </script>
</head>

<body id="editcontentsection">
	
  <div class="container-fluid" >
    <!--NAV BAR For EDIT Page --> 
    <br>
    <nav class="navbar navbar-expand-sm bg-custom sticky-top">
      <img src="../img/logo_landscape.png" width="100px" height="30px" alt="logo"/>

      <!-- Link back to AdminIndex -->
      <ul class="navbar-nav col text-right">
       <li class="col">
        <a href="../adminIndex.php" ><button class="btn btn-light" type="button">Zurück zur Admin Seite</button></a>
      </li>
    </ul>
    <!--Session Logout Button For Users If They Want To Logout Here-->
    <?php if (isset($_SESSION['user'])){ ?>
      <a  id="login" class="nav-link btn btn-default" href="../logout.php?logout"><i class="fas fa-sign-out-alt"></i></a>
    <?php }else { ?>
      <a  id="login" class="nav-link" href="../login.php"><button type="submit" name="btn-login"><i class="fas fa-user-lock"></i></button></a>
    <?php } ?>
  </nav>
  <br>
  <!--./END OF HEADER SECTION-->  





  
  <!-- START OF ADMIN EDIT TABLE AND CONTENT SECTION -->
  <?php 
  require_once 'db_connect.php';

  if($_GET['ID']) {
    $contentid = $_GET['ID'];

    $sql = "SELECT * FROM webcontent WHERE ID = {$contentid}";
        $result = $connect->query($sql); // mysqli_query($mysqli, $sql)

        $updatecontent = $result->fetch_assoc(); // mzsqli_fetch_assoc($result)
      }        
      ?>

       <?php


      if($_POST) {


        $content = $_POST['content'];

        $contentid = $_POST['ID'];

        $sql = "UPDATE webcontent SET Content = '$content' WHERE ID = {$contentid}";
        if($connect->query($sql) === TRUE) {
          echo "<p>Successfully Updated</p>";
          echo "<a href='../adminIndex.php'><button  id='submitbtns' class='btn btn-md btn' type='button'>Back to Admin Panel</button></a>";

        } else {
          echo "Error while updating record : ". $connect->error;
        }
      }




    $sql2 = "SELECT * FROM webcontent WHERE ID = {$contentid}";
        $result2 = $connect->query($sql2); // mysqli_query($mysqli, $sql)

        $updatecontent2 = $result2->fetch_assoc(); // mzsqli_fetch_assoc($result)

        $connect->close();
      
      ?>



      <h1>Sie arbeiten in der folgende Seite:</h1>
      <div class="row text-center menudirection">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <p><b>Menü:</b> <?php echo $updatecontent2["NavName"] ?>    |   <b>SubMenü: </b> <?php echo $updatecontent2["Navsubpagename"] ?></p>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
          <p><b>Erstellt Am:</b> <?php echo $updatecontent2["Created_On"] ?>  |  <b>Aktualisiert Am:</b> <?php echo $updatecontent2["Updated_On"] ?></p> 
        </div>
      </div>
      
      <div class="row">

        <div class="col-lg-12">
          <form  method="POST">
            <input type="hidden" name="ID" value="<?= $updatecontent['ID'] ?>">

            <div class="row textareabucket justified">
              <textarea id="mytextarea" name="content"><?= $updatecontent2["Content"] ?></textarea>
            </div>

            <div class="text-center">
              <button class="btn btn-warning btn-lg btn-block " type="submit" name="submit">Save Update</button>
            </div>
          </form>

        </div>
      </div>
     

    </div>
    <br>
    <br>
  </body>

  </html>