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

			<div class="student-profile">
				<p><b>ID No: </b><?php echo $student[0]['idno']; ?></p>
				<p><b>Name: </b><?php echo $student[0]['lname'].', '.$student[0]['fname'].' '.$student[0]['mname']; ?></p>
				<p><b>Course: </b><?php echo $student[0]['course']; ?></p>
				<p><b>Sex: </b><?php echo $student[0]['sex']; ?></p>
			</div>
	
			<p id="para">Hello I am Paragraph!</p>
			<button id="btn">Vanish</button>
</div>
</div>
</div>