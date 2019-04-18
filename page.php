<?php
session_start();
require_once 'actions/show.php';
include ("header.php");
// if (isset($_SESSION['user'])){
// 	echo 'logged in';
// }
?>
<main id="about">
	<!-- 	admin button -->
	<?php if (isset($_SESSION['user'])){
 		?>
       <a  id="login"  href="adminIndex.php"><button class="btn btn-sm-default" type="button">Zurück zum Admin</button></a>
    <?php }else { ?>
    <!-- <a  id="login" class="nav-link" href="login.php"><button type="submit" name="btn-login"><i class="fas fa-user-lock"></i></button></a> -->
 	<?php } ?>
	<div class="row">
		<aside class="col-lg-2 d-none d-lg-block mt-4 pr-0">
			<?php
			if ($contentid >= 2 && $contentid <=5) { //Über uns
				require_once 'sidebars/ueberuns.php';
			} elseif ($contentid >= 6 && $contentid <=12) { //Autismus
				require_once 'sidebars/autismus.php';
			} elseif ($contentid >= 13 && $contentid <=16) { //Gesetzliche Regelungen
				require_once 'sidebars/gesetz.php';
			} elseif ($contentid >= 17 && $contentid <=21) { //Wohin wenden
				require_once 'sidebars/wohin.php';
			} elseif ($contentid >= 22 && $contentid <=24) { //Erfahrungen
				require_once 'sidebars/erfahrungen.php';
			} elseif ($contentid >= 25 && $contentid <=35) { //Tips & Tricks
				require_once 'sidebars/tips.php';
			} elseif ($contentid >= 26 && $contentid <=37) { //Aktuelles
				require_once 'sidebars/aktuelles.php';
			}
			?>
		</aside>
		<div class="col-12 col-lg-10 mt-4">
			<?php			
				echo $data['Content'];
			?>
		</div> <!-- closes col.10 -->
	</div><!-- closes row -->
</main>

<?php include ("footer.php"); ?>