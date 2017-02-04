<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>Pagination</title>
	
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	
</head>
<body>

<?php 
require('db_connect.php');
require('script.php');
?>


	<div class="container" style="margin-top: 70px">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
				<form method="get">
					<label>Nombre d'articles par page :</label>
					<select name="pp">
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
					</select>
					<input type="hidden" name="p" value="<?php echo $current; ?>">
					<button class="btn btn-primary btn-xs" type="submit">Appliquer</button>
				</form>


				<div class="table-responsive">
					<table class="table table-hover table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>Articles</th>
								<th>Contenu</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								while ($products = $reqProducts->fetch()) {
							?>
								<tr>
									<td><?php echo $products['id']; ?></td>
									<td><?php echo $products['title']; ?></td>
									<td><?php echo $products['content']; ?></td>	
								</tr>
							<?php
							}
							?>
						</tbody>
					</table>
					
				</div>

				<ul class="pagination">
					<li class="<?php if($current == '1'){ echo 'disabled';} ?>"><a href="?p=<?php if($current != '1'){ echo $current-1; }else{echo $current;} ?>">&laquo;</a></li>

					<?php
					 for($i=1; $i<=$nbPage; $i++){
						if($i==$current){
							?>
							<li class="active"><a href="?p=<?php echo $i ?>"><?php echo $i ?></a></li>
						<?php
						} else{
							?>
							<li><a href="?p=<?php echo $i ?>"><?php echo $i ?></a></li>
						<?php
						}
					}
					?>
					<li class="<?php if($current == $nbPage){ echo 'disabled';} ?>"><a href="?p=<?php if($current != $nbPage){ echo $current+1; }else{echo $current;} ?>">&raquo;</a></li>

				</ul>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
</body>
</html>