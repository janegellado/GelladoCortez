<div class="container-fluid">
	<div class="row">
		<div class="col-md-12 header">
		<h1>Hello Bootstrap!</h1>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-4 col-xs-4 col-sm-4">
			<p class="lead">Menu</p>
			
		<div class="btn-group">
			<button type="button" class="btn btn-primary">Apple</button>
			<button type="button" class="btn btn-primary">LG</button>
			<div class="btn-group">
				<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
				Sony <span class="caret"></span></button>
				<ul class="dropdown-menu" role="menu">
					<li><a href="#">Tablet</a></li>
					<li><a href="#">Smartphone</a></li>
				</ul>
			</div>
			<button type="button" class="btn btn-default">
				<span class="glyphicon glyphicon-search"></span> Search
			</button>
		</div>
		</div>
		
		<div class="col-md-8 col-xs-8 col-sm-8 content">
		<?php
			echo "<p>Hello $name you are $years years old!</p>";
		?>
		</div>
		
	</div>
	
	<div class="row">
		<div class="col-md-12 text-center footer">
			Copyright &copy; 2017. Star na si Van Damme Stallone
		</div>

</div>




