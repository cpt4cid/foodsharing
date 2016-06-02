<?php
?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="own.css" media="screen">
		<script src="jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/modernizr.custom.26633.js"></script>
		
		<title>
		Foodsharing - Münster
		</title>
	</head>
	
	<body>
		
		<button type="button" class="btn btn-danger btn-lg fs-button" data-toggle="modal" data-target="#myModal">Doch etwas zu verschenken?</button>
		<a data-toggle="modal" data-target="#my2ndModal"></a>
		
		
		<div class="container">
			<div class="modal modal-bottom fade" id="my2ndModal" role="dialog">
				<div class="modal-dialog modal-sm">
					<div class="modal-content">
						kokmok
					</div>
					
				</div>
				
			</div>
			
			<!-- Modal -->
			<div class="modal" id="myModal" role="dialog">
				<div class="modal-dialog modal-xl">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title" style="text-align: center;">Foodsharing - Münster</h4>
						</div>
						<div class="modal-body">
							<form class="form-horizontal" role="form" method="post" action="seif.php">
								<div class="form-group">
									<label for="name" class="col-sm-4 control-label">Art des Lebensmittels</label>
									<div class="col-sm-8">
										<select class="form-control" id="sel1" name="kind">
											<option>Gemüse</option>
											<option>Fleisch / Fisch</option>
											<option>Milchprodukt</option>
											<option>Getreideprodukt</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="name" class="col-sm-4 control-label">Nutzbarkeitsdauer in Tagen:</label>
									<div class="col-sm-8">
										<select class="form-control" id="sel1" name="timespan">
											<option>0-1</option>
											<option>1-3</option>
											<option>3-7</option>
											<option>7-14</option>
											<option>21+</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="email" class="col-sm-4 control-label">Ihr Standort</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="email" name="location" placeholder="...irgendwo in Münster" value="">
										<br />
										<!-- <div class="osm"></div> -->
										<img src="map.png" class="img-responsive">
										
										
									</div>
								</div>
								<div class="form-group">
									<label for="email" class="col-sm-4 control-label">Idealer Abholzeitpunkt ist heute, </label>
									<div class="col-sm-8">
										<select class="form-control" id="sel1" name="pot">
											<option>...ab sofort</option>
											<option>morgens</option>
											<option>vormittags</option>
											<option>mittags</option>
											<option>nachmittags</option>
											<option>abends</option>
										</select>
										
									</div>
								</div>

								<div class="form-group">
									<label for="email" class="col-sm-4 control-label">Ihre Telefonnummer für Rückfragen</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="email" name="phone" placeholder="0176 236662313" value="">
										<br />
									</div>
								</div>
								
								<div class="form-group">
									<label for="human" class="col-sm-4 control-label">Foto der zu teilenden Lebensmittel</label>
									<div class="col-sm-8">
										<label class="control-label">
											<br />
											<input id="file-1" type="file" class="file" name="pic">
											<span class="file-custom"></span>
										</label>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-10 col-sm-offset-2">
										<input id="submit" name="submit" type="submit" value="Absenden" class="btn btn-primary">
									</div>
								</div>
								
							</form>
							
						</div>
						<div class="modal-footer">
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		
	</body>
</html>


