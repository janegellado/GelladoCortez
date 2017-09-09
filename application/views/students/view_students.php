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
<h1>Welcome to Student Management System!</h1>

<table border="1">
	<thead>
		<tr>
			<th>ID NO.</th>
			<th>LAST NAME</th>
			<th>FIRST NAME</th>
			<th>MIDDLE NAME</th>
			<th>COURSE</td>
			<th>SEX</th>
			<th>ACTION</th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach($students as $s){
				echo ' <tr>
							<td>'.$s['idno'].'</td>
							<td>'.$s['lastname'].'</td>
							<td>'.$s['firstname'].'</td>
							<td>'.$s['middlename'].'</td>
							<td>'.$s['course'].'</td>
							<td>'.$s['sex'].'</td>
							<td>
								<a href="">View</a>|
								<a href="">Edit</a>|
								<a href="">Delete</a>|
							</td>
						</tr>';						
			}
		
		?>
	</tbody>
</table>	
</form>
		</div>
		
	</div>
	
	<div class="row">
		<div class="col-md-12 text-center footer">
			Copyright &copy; 2017. Star na si Van Damme Stallone
		</div>
	</div>
	