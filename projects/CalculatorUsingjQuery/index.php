<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<hr>
	<div class="row justify-content-center">
		<div class="col-lg-6 ">
			<div class="card">
				<div class="card-header bg-warning text-white text-center">
					<h3>Calculator using JQuery</h3>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>First Number</label>
						<input type="text" class="form-control" id="first_number">
					</div>
					<div class="form-group">
						<label>Last Number</label>
						<input type="text" class="form-control" id="last_number">
					</div>
					<div class="form-group row">
						<div class="col-lg-9">
							<button type="submit" id="addition" class="btn btn-primary btn-sm"">+</button>
							<button type="submit" id="substraction" class="btn btn-warning btn-sm"">-</button>
							<button type="submit" id="multi" class="btn btn-info btn-sm"">X</button>
							<button type="submit" id="division" class="btn btn-secondary btn-sm">/</button>
							<button type="submit" id="modulas" class="btn btn-danger btn-sm"">%</button>
						</div>
					</div>
					<div class="form-group">
						<label>Result</label>
						<div><h4 id="result"></h4></div>
					</div>
				</div>
				<div class="card-footer bg-secondary text-white text-center">
					<h3>Created By Syed Zaman Mostafiz.</h3>
				</div>
			</div>
		</div>
	</div>
</div>
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="js/cal.js"></script>
</body>
</html>