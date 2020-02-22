<?php  	include("../config/connection.php"); ?>
<?php  	//include("../include/session.php"); ?>
<?php  	//include("../include/destory.php"); ?>
<?php
// generage a flag to hide IDs
$flag = 8767787;
$id_emp = $_GET['id'] + $flag;

if(isset($_POST['btissam'])){

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$genre = $_POST['genre'];
	$date_naiss = $_POST['date_naiss'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$date_req = $_POST['date_req'];
	$division = $_POST['division'];
	$sit_famille = $_POST['sit_famille'];

	$query = 'INSERT INTO `employe` (`fname`, `lname`, `genre`, `date_naiss`, `tel`, `email`, `address`, `date_req`,
	 `division`, `sit_famille`) 
	VALUES (?,?,?,?,?,?,?,?,?,?)';
    $query = $db->prepare($query);
    $query->execute([$fname,$lname,$genre,$date_naiss,$tel,$email,$address,$date_req,$division,
    	$sit_famille]);
    $msg=" Votre Employe a bien été enregistré ! Merci d'avoir utilisé notre Application.";
    header("location:emp_list.php?msg=".$msg."");
}
?>				
<?php  	include("include/header.php"); ?>				
<!-- Content -->
	<section>
		<!-- Elements -->
		<?php
			if(!empty($_POST)) echo "<b>".$msg."<b><a href='index.php'>Retour</a>";
		?>
		<div class="row 200%">
			<div class="12u 12u$(medium)">	
				<form enctype="multipart/form-data" action="emp_add.php" method="POST">
					<div class="row uniform">
<?php 

$sql = "SELECT * FROM `employe` WHERE `id_emp` like ".$_GET['id']."";
$result = $db->query($sql);
 while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>
<div class="4u 12u$(xsmall)">
	<input type="text" name="fname" id="demo-name" value="'.$row["fname"].'" disabled />
</div>															
<div class="4u 12u$(xsmall)">
	<input type="text" name="lname" id="demo-name" value="'.$row["lname"].'" disabled />
</div>
<div class="4u 12u$(xsmall)">
	<input type="text" name="lname" id="demo-name" value="'.$row["genre"].'" disabled />
</div>
<div class="4u 12u$(xsmall)">
	<input type="date" name="date_naiss" id="demo-name" value="'.$row["date_naiss"].'" disabled />
</div>
<div class="4u 12u$(xsmall)">
	<input type="text" name="tel" id="demo-name" value="'.$row["tel"].'" disabled />
</div>
<div class="4u 12u$(xsmall)">
	<input type="email" name="email" id="demo-name" value="'.$row["email"].'" disabled />
</div>
<div class="8u 12u$(xsmall)">
	<input type="text" name="address" id="demo-name" value="'.$row["address"].'" disabled />
</div>
<div class="4u 12u$(xsmall)">
	<input type="date" name="date_req" id="demo-name" value="'.$row["date_req"].'" disabled />
</div>
<div class="6u 12u$(xsmall)">
	<input type="text" name="date_req" id="demo-name" value="'.$row["division"].'" disabled />
</div>
<div class="6u 12u$(xsmall)">
	<input type="text" name="date_req" id="demo-name" value="'.$row["sit_famille"].'" disabled />
</div>
'; }

?>
<div class="row 200%">
    <center><a href="emp_update.php?id=<?= $_GET['id'] ?>" type="submit" name="modifier" value="modifier" class="form_control">modifier</button></center>
	  <label for="confirmer">&nbsp;</label>
	  	<center><a href="emp_delete.php?id=<?= $id_emp ?>" type="reset" name="supprimer" value="supprimer" 
		  class="form_control">supprimer</button></center>
	  
	  </div>														
	  </div>
													
													</form>
											</div>
										</div>
								</section>
						</div>
					</div>
<?php  	include("include/menu.php"); ?>				