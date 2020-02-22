<?php  	include("../config/connection.php"); ?>
<?php  	//include("../include/session.php"); ?>
<?php  	//include("../include/destory.php"); ?>
<?php  	include("include/header.php"); ?>				

		<section>
			<div class='row 200%'>
				<div class='12u 12u$(medium)'>
					<table id="example" class="display">
						<thead>
							<tr>
								<th><center><h4>Nom Complete</h4></center></th>
								<th><center><h4>Division</h4></center></th>
								<th><center><h4>Date De Recrutement</h4></center></th>
								<th><center><h4>Situation Familiale</h4></center></th>
								<th><center><h4>Telephone</h4></center></th>
							</tr>
						</thead>
						<tbody>
<?php 
$sql = "SELECT * FROM `employe` ORDER BY `id_emp` DESC";
$result = $db->query($sql);
 while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
    <td><center><a href='emp_detail.php?id=".$row["id_emp"]."'>".$row["fname"]." ".$row["lname"]."</a></center></i></td>
    <td><center><a href='emp_detail.php?id=".$row["id_emp"]."'>".$row["division"]."</a></center></td>
    <td><center><a href='emp_detail.php?id=".$row["id_emp"]."'>".$row["date_req"]."</a></center></td>
    <td><center><a href='emp_detail.php?id=".$row["id_emp"]."'>".$row["sit_famille"]."</a></center></td>
    <td><center><a href='emp_detail.php?id=".$row["id_emp"]."'>".$row["tel"]."</a></center></td>
        </tr>";
    }
$db = null;
?>

						</tbody>
					</table>
				</div>
			</div>
		</section>
	</div>
</div>
<?php include("include/menu.php"); ?>
<?php  	include("include/menu_table.php"); ?>