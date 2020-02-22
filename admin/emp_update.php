<?php  	include("../config/connection.php"); ?>
<?php  	//include("../include/session.php"); ?>
<?php  	//include("../include/destory.php"); ?>
<?php
if(isset($_POST['modifier'])){

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

	$query = 'INSERT INTO `employe` (`fname`, `lname`, `genre`, `date_naiss`, `tel`, `email`, `address`, `date_req`, `division`, `sit_famille`) 
	VALUES (?,?,?,?,?,?,?,?,?,?)';
    $query = $db->prepare($query);
    $query->execute([$fname,$lname,$genre,$date_naiss,$tel,$email,$address,$date_req,$division,
    	$sit_famille]);
    $msg=" Votre Employe a bien été modifier! Merci d'avoir utilisé notre Application.";
    header("location:emp_list.php?msg=".$msg."");
}
?>				
<?php  	include("include/header.php"); ?>				
<!-- Content -->
	<section>
<?php if(!empty($_POST)) echo "<b>".$msg."<b><a href='index.php'>Retour</a>";?>
		<div class="row 200%">
			<div class="12u 12u$(medium)">	
				<form enctype="multipart/form-data" action="emp_add.php" method="POST">
					<div class="row uniform">
<?php 
$sql = 'SELECT * FROM `employe` WHERE `id_emp` like "'.$_GET['id'].'"';
$result = $db->query($sql);
 while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>
<div class="4u 12u$(xsmall)">
	<input type="text" name="fname" id="demo-name" value="'.$row["fname"].'" placeholder="Prenom"  />
</div>															
<div class="4u 12u$(xsmall)">
	<input type="text" name="lname" id="demo-name" value="'.$row["lname"].'" placeholder="Nom" />
</div>
<div class="4u 12u$(xsmall)">
	<div class="select-wrapper">
		<select name="genre" value="'.$row["genre"].'" id="Date de Fin </br>demo-category" required>
			<option type="text" class="form-control1">Genre</option>
			<option type="text" class="form-control1"  value="homme">Home</option>
			<option type="text" class="form-control1"  value="femme">Femme</option>
		</select>
	</div>
</div>
<div class="4u 12u$(xsmall)">
	<input type="date" name="date_naiss" value="'.$row["date_naiss"].'" id="demo-name" placeholder="Date de Naissance" />
</div>
<div class="4u 12u$(xsmall)">
	<input type="text" name="tel" value="'.$row["tel"].'" id="demo-name" placeholder="Telephone" />
</div>
<div class="4u 12u$(xsmall)">
	<input type="email" name="email" value="'.$row["email"].'" id="demo-name" placeholder="Email" />
</div>
<div class="8u 12u$(xsmall)">
	<input type="text" name="address" value="'.$row["address"].'" id="demo-name" placeholder="Address" />
</div>
<div class="4u 12u$(xsmall)">
	<input type="date" name="date_req" value="'.$row["date_req"].'" id="demo-name" placeholder="Date de recrutement" />
</div>
<div class="6u 12u$(xsmall)">
	<div class="select-wrapper">
		<select name="division" value="'.$row["division"].'" id="Date de Fin </br>demo-category" required>
			<option type="text" class="form-control1">Division</option>
			<option type="text" class="form-control1"  value="DAR">DAR</option>
			<option type="text" class="form-control1"  value="DBM">DBM</option>
		</select>
	</div>
</div>
<div class="6u 12u$(xsmall)">
	<div class="select-wrapper">
		<select name="sit_famille" value="'.$row["sit_famille"].'" id="Date de Fin </br>demo-category" required>
			<option type="text" class="form-control1">Situation Familiale</option>
			<option type="text" class="form-control1"  value="DAR">Celibataire</option>
			<option type="text" class="form-control1"  value="DBM">Mari(E)</option>
			<option type="text" class="form-control1"  value="DBM">Divorce</option>
		</select>
	</div>
</div>

<div class="12u$">
	<ul class="actions">
		<li><input type="submit" name="modifier" value="Ajouter Employe" class="special" /></li>
	</ul>
</div>'; }
?>
														</div>
													</form>
											</div>
										</div>
								</section>
						</div>
					</div>
<?php  	include("include/menu.php"); ?>				