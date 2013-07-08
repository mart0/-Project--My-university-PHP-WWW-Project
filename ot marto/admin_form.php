<?php
session_start();

if(isset($_SESSION['user_id'])){
	$userID=$_SESSION['user_id'];
}

?>

<!DOCTYPE html>

<html lang="en">
<head>
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script> 
	<script src="jquery-1.9.1.min.js"></script>
	<script type="text/javascript" scr="admin_form.js"></script>
		<title>dalipiche.com</title>
	<link rel="stylesheet" type="text/css" href="weather.css">
	<link rel="stylesheet" type="text/css" href="admin_form.css">
</head>
<body>
	<?php  require_once "database_config.php";?>
	<div id="wrapper">
		<header> 
			<h1>Weather center</h1>
		</header>
		<nav class="left clear">
			<ul>
				<li><a href="weather.php">Main</a></li>
				<li id="logout"><a href="logout.php">Log out</a></li>
			</ul>
		</nav>
		<div id="wrapper-content">
			<section>
				<div>
			<!-- <form action="" method="post"> -->
					<div id="employee_name">
						<p>Employees</p>
							<!-- <select name="employees" id="employees"> -->
								<?php 
								$query="SELECT id_emp, user_emp_name
						                FROM employee";
								$res = $mysqli->query($query);
								if (!$res) {
								    echo 'Could not run query: ' . $mysqli->error();
								    exit;
								}
							echo '<select name="employees" id="employees">';
							while (($row = mysqli_fetch_row($res)) != null)
							{
								 echo '<option value='. $row[0] .'>'. $row[1].'</option>'; 
							    // echo "<option value = '{$row['id_emp']}'";
							    
							    // echo ">{$row['employee_name']}</option>";
							}?>
							
							</select>
					</div>
					<div id="employee_location">
						<p>Locations</p>
					<?php 
							$query="SELECT id_location, location_name
						                FROM location";
								$res = $mysqli->query($query);
								if (!$res) {
								    echo 'Could not run query: ' . $mysqli->error();
								    exit;
								}
								echo '<select name="location" id="location">';
								while (($row = mysqli_fetch_row($res)) != null)
								{
								 echo '<option value='. $row[0] .'>'. $row[1].'</option>'; 
							    
								}?>
							</select>
					</div>
					<!-- Buttons -->
					<div id="button_bar">
						<button formmethod="post" id="assign">Assign task</button>
						<button formmethod="post" id="add_emp">Add emoployee</button>
						<button formmethod="post" id="add_loc">Add location</button>
						<button formmethod="post" id="del_emp">Delete employee</button>
						<button formmethod="post" id="del_loc">Delete location</button>
						<button formmethod="post" id="edit">Edit</button>
					</div>
					<!-- Add Employee FORM -->
					<div>
						<form class="enter_data" id="employee_form" action="form_employee.php" method="post">
						<label for="user_name">User Name&nbsp;&nbsp;&nbsp;</label><input type="text" id="user_name" name="user_name" placeholder="enter employee's name here" >
						&nbsp;&nbsp;&nbsp;
						</label>
						 <br>
						<label for="password">Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<input type="password" id="password" name="password" > <br>
						<label for="name">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<input type="text" id="name" name="name" placeholder="first name and last name" > <br>
						<label for="email">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<input type="email" id="email" name="email" required placeholder="something@gmail.com"> <br>
						<button type="submit" id="admin_submit">Save</button>
						</form>
						<!-- Add Location FORM -->
						<form class="enter_data" id="location_form" action="form_location.php" method="post">
						<label for="location">Location</label>
							<input type="text" id="location" name="location" placeholder="Sofia">
						<button type="submit" id="loc_submit">Save</button>
						</form>
						
						<!-- Assign Task Form -->
						<form class="enter_data" id="assign_form" action="assign_form.php" method="post">
							<label for="location">Location</label>
							<?php 
							$query="SELECT id_location, location_name
						            FROM location";
								$res = $mysqli->query($query);
								if (!$res) {
								    echo 'Could not run query: ' . $mysqli->error();
								    exit;
								}
								echo '<select name="location" id="location">';
								while (($row = mysqli_fetch_row($res)) != null)
								{
									 echo '<option value='."$row[0]|$row[1]".'>'. $row[1].'</option>'; 
							    
								} 
								echo "</select>";?>

								<br/><br/>	
							<label for="employees">Employees</label>
								<?php 
								$query="SELECT id_emp, user_emp_name
						                FROM employee";
								$res = $mysqli->query($query);
								if (!$res) {
								    echo 'Could not run query: ' . $mysqli->error();
								    exit;
								}
								echo '<select name="employees" id="employees">';
								while (($row = mysqli_fetch_row($res)) != null)
								{
								 echo '<option value='."$row[0]|$row[1]".'>'. $row[1].'</option>'; 
							    
								}
								echo "</select>";?><br/><br/>
							<label for="start_date">Start date</label>
							<input type="date" id="start_date" name="start_date"><br/><br/>
							<label for="final_date">Final date</label>
							<input type="date" id="final_date" name="final_date">
							<button type="submit" id="loc_submit">Save</button>
						</form>
						<!-- Delete Location Form -->
						<form action="delete_location.php" id="del_location" method="post">
						<label for="location">Location</label>
							<?php 
							$query="SELECT id_location, location_name
						            FROM location";
								$res = $mysqli->query($query);
								if (!$res) {
								    echo 'Could not run query: ' . $mysqli->error();
								    exit;
								}
								echo '<select name="location" id="location">';
								while (($row = mysqli_fetch_row($res)) != null)
								{
									 echo '<option value='."$row[0]|$row[1]".'>'. $row[1].'</option>'; 
							    
								} 
								echo "</select>";?>
								<button id="del_loc">Delete</button>
						</form><br/>
						<!-- Delete Employee Form -->
						<form action="delete_employee.php" id="del_employee" method="post">
							<label for="employees">Employees</label>
								<?php 
								$query="SELECT id_emp, user_emp_name
						                FROM employee";
								$res = $mysqli->query($query);
								if (!$res) {
								    echo 'Could not run query: ' . $mysqli->error();
								    exit;
								}
								echo '<select name="employees" id="employees">';
								while (($row = mysqli_fetch_row($res)) != null)
								{
								 echo '<option value='."$row[0]|$row[1]".'>'. $row[1].'</option>'; 
							    
								}
								echo "</select>";?>
							
						<button type="submit" id="del_emp">Delete</button>
						</form><br/>
						
						<!-- Edit Form -->
						<form class="edit_data" id="edit_employee" action="edit_employee.php" method="post">
							<label for="employees">Employees</label>
								<?php 
								$query="SELECT id_emp, user_emp_name
						                FROM employee";
								$res = $mysqli->query($query);
								if (!$res) {
								    echo 'Could not run query: ' . $mysqli->error();
								    exit;
								}
								echo '<select name="employees" id="employees">';
								while (($row = mysqli_fetch_row($res)) != null)
								{
								 echo '<option value='."$row[0]|$row[1]".'>'. $row[1].'</option>'; 
							    
								}
								echo "</select>";?><br/>
						</label>
						 <br>
						<label for="password">Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<input type="password" id="password" name="password" > <br>
						<label for="name">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<input type="text" id="name" name="name" placeholder="first name and last name" > <br>
						<label for="email">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<input type="email" id="email" name="email" required placeholder="something@gmail.com" > <br>
						<button type="submit" id="edit_emp">Edit</button>
						</form>
						</div>
					</div>
			</section>
		 </div>
		 	<footer>
		 		<p>Designed by <a href="http://martomarinov.wordpress.com/">Martin Marinov</a> and <a href="http://bg.linkedin.com/pub/gergana-atanasova/72/2b4/165/">Gergana Atanasova</a>, Copyright &#169; 2013. All rights reserved.</p>
			</footer>
	</div>
<script>
	$(document).ready(function () {
    	$('#add_emp').click(function() {
    		$('#location_form').hide("fast");
    		$('#assign_form').hide("fast");
    		$('#del_location').hide("fast");
    		$('#del_employee').hide("fast");
    		$('#edit_employee').hide("fast");
    		$('#employee_form').show("slow");
        });
        $('#add_loc').click(function() {
        	$('#employee_form').hide("fast");
    		$('#assign_form').hide("fast");
    		$('#del_location').hide("fast");
    		$('#del_employee').hide("fast");
    		$('#edit_employee').hide("fast");
        	$("#location_form").show("slow").css("display","inline-block","float","right");
    	});
    	$('#assign').click(function() {
    		$('#location_form').hide("fast");
    		$('#employee_form').hide("fast");
    		$('#del_location').hide("fast");
    		$('#del_employee').hide("fast");
    		$('#edit_employee').hide("fast");
    		$('#assign_form').show("slow");
        });
        $('#del_loc').click(function() {
    		$('#location_form').hide("fast");
    		$('#employee_form').hide("fast");
    		$('#assign_form').hide("fast");
    		$('#del_employee').hide("fast");
    		$('#edit_employee').hide("fast");
    		$('#del_location').show("slow");
        });
        $('#del_emp').click(function() {
    		$('#location_form').hide("fast");
    		$('#employee_form').hide("fast");
    		$('#assign_form').hide("fast");
    		$('#del_location').hide("fast");
    		$('#edit_employee').hide("fast");
    		$('#del_employee').show("slow");
        });
        $('#edit').click(function() {
    		$('#location_form').hide("fast");
    		$('#employee_form').hide("fast");
    		$('#assign_form').hide("fast");
    		$('#del_location').hide("fast");
    		$('#del_employee').hide("fast");
    		$('#edit_employee').show("slow");
        });
	}); 
</script> 
</body>
</html>