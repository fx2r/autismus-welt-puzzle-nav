

<?php
ob_start();
session_start();
if( !isset($_SESSION['user']) ) {
 header("Location: login.php");
 exit;
}



include ("header.php");
require_once("actions/db_connect.php")
?>
<div class="container">
  <br>
  <h1> Hi Admin</h1>
  <br>
  <table class='table table-striped' > 
   <thead>
     <tr>
       <th scope="col">Menü</th>
       <th scope="col">Unter Menü</th>
       <th scope="col">Inhalt</th>
       <th scope="col">Aktion</th>
     </tr>
   </thead>
   <tbody>
     <?php
     $sql = "SELECT * FROM webcontent";

     $result = $connect->query($sql);

     if($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {

         echo "<tr>
         <td scope='row'>".$row['NavName']."</td>
         <td scope='row'>".$row['Navsubpagename']."</td>
         <td scope='row' id='content".$row['ID']."'>".$row['Content']."</td>
         <td scope='row'>
         <a href='actions/adminEdit.php?ID=".$row['ID']."'><button id='editbtn' class='btn btn-warning' type='button'>Edit</button></a>
         </td>
         </tr>"
         ;
       }
     } else {
       echo "<tr><td scope='row' colspan='5'><center>No Data Avaliable</center></td></tr>";
     }
     ?>
   </tbody>
 </table>

</div>
</div>
</div> 
</div>

<script src="js/admin.js" type="text/javascript"></script>
</body>
</html>
