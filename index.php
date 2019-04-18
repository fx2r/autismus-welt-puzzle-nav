
<!-- header included -->
<!-- nav included  -->
<?php
session_start();
include ("header.php");
require_once 'actions/show.php'
?>


<main>
	<div class="row">
		<div class="col-lg-1 offset-lg-11">
			
	
<!-- 	admin button -->
	<?php if (isset($_SESSION['user'])){
 		?>

       <a  id="login"  href="adminIndex.php"><button class="btn btn-sm-default" type="button">Zurück zum Admin</button></a>
     <?php }else { ?>
    <!-- <a  id="login" class="nav-link" href="login.php"><button type="submit" name="btn-login"><i class="fas fa-user-lock"></i></button></a> -->
 	 <?php } ?>
		</div>
	</div>
<!-- admin button done
 -->
	<div class="row">
		<aside class="col-lg-2 d-none d-lg-block mt-4">
			<?php require_once 'sidebars/home.php'; ?>
		</aside>
		<div id="welcome" class="col-lg-10 mt-4">
			<?php echo $data['Content'] ?>
		</div>
	</div>
</main>


<?php include ("footer.php"); ?>

</body>
</html>