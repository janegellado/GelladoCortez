<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 header">
		<h1>Student Management System</h1>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-4 col-xs-4 col-sm-4">
			<p class="lead"><h1>MENU</h1></p>
			<p class="lead"><a href="boots">STUDENTS</p></a>
			<p class="lead"><a href="">COURSE</p></a>
		</div>
		
		<div class="col-md-8 col-xs-8 col-sm-8 content">
			<form role="form">
			
				<div class="form-group"  method="POST">
					<a href="../CI"><h1>View Students</h1></a>
				<div class="form-group">
					<label for="idno">ID No.:</label>
					<input type="text" class="form-control" id="idno" name="idno">
				</div>
					
				<div class="form-group">
					<label for="lname">Last Name:</label>
					<input type="text" class="form-control" id="lname" name="lname">
				</div>
			
				<div class="form-group">
					<label for="fname">First Name:</label>
					<input type="text" class="form-control" id="fname" name="fname">
				</div>
			
				<div class="form-group">
					<label for="mname">Middle Name:</label>
					<input type="text" class="form-control" id="mname" name="mname">
				</div>
			
				<div class="form-group">
					<label for="course">Course:</label>
					<select class="form-control" id="course" name="course">
						<option value="BSIT">BSIT</option>
					</select>
				</div>
			
			
				<div class="form-group">
					<label for="sex"> Sex: </label>
					
					<input type="radio" class="" id="sex" name="sex" value="M">Male</input>
					<input type="radio" class="" id="sex" name="sex" value="F">Female</input>
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary">
					Save <span class="glyphicon glyphicon-floppy-save">
				</div>
			
			</form>
		</div>
		
	</div>
	
	<div class="row">
		<div class="col-md-12 text-center footer">
			Copyright &copy; 2017. Student Management System
		</div>

</div>

<?php
if( isset($saved) && $saved==TRUE ){
?>
<script type="text/javascript">
	alert("The new student record was successfully saved!");
	location.href = '<?php echo base_url('boots'); ?>';
</script>
<?php
}

?>


