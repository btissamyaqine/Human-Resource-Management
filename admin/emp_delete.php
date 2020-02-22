<?php  	include("../config/connection.php"); ?>
<?php  	//include("../include/session.php"); ?>
<?php  	//include("../include/destory.php"); ?>
<?php
	// if(isset($_POST['supprimer'])){
	// 	if(isset($_GET['id'])){
	// 		$sql = 'DELETE FROM `employe` where id="'.$_GET['id'].'"';
	// 		$sql = $db->prepare($sql);
	// 		$sql->execute();
	// 		//$resultas=mysql_query($sql);
	// 		$msg=" Votre Employe a bien été supprimer! Merci d'avoir utilisé notre Application.";
	// 		header('location:emp_list.php?msg="'.$msg.'"');
	// }else {
	// 	$msg = "erreur";
	// 	header('location:emp_list.php?msg="'.$msg.'"');
	// 	}
	// }

		if(isset($_GET['id'])) {
			$flag = 8767787;
			$id_emp = $_GET['id'] - $flag;
			$sql = 'DELETE FROM `employe` WHERE `id_emp` = "'.$id_emp.'"';
			$sql = $db->prepare($sql);
			if ($sql->execute()) {
				$msg=" Votre Employe a bien été supprimer! Merci d'avoir utilisé notre Application.";
				header('location:emp_list.php?msg="'.$msg.'"');
			} else {
				echo "Emp not existe";
			}
			
		} else {
			$msg = "Please select a valide user";
			header('location:emp_list.php?msg="'.$msg.'"');
		}





?>	


			

			