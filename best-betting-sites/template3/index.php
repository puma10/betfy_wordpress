<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="http://designers.hubspot.com/hs-fs/hub/327485/file-2054199286-css/font-awesome.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
<link href="style.css" rel="stylesheet" />

	<?php	
		require_once '../admin/meekrodb.2.3.class.php'; 
		$results_features = DB::queryFirstRow("SELECT *,seo_title_hp ,seo_description_hp FROM options WHERE id=0");
		$seo_title	= $results_features['seo_title_hp'];
		$seo_description	= $results_features['seo_description_hp'];
						$feature1_name	= $results_features['feature1_name'];
						$feature2_name   = $results_features['feature2_name'];
						$feature3_name   = $results_features['feature3_name'];
						$feature4_name   = $results_features['feature4_name'];
						$feature5_name   = $results_features['feature5_name'];						
						$feature6_name   = $results_features['feature6_name'];
						$feature7_name   = $results_features['feature7_name'];
						$feature8_name   = $results_features['feature8_name'];
						$feature9_name   = $results_features['feature9_name'];
						$feature10_name   = $results_features['feature10_name'];
	?>
		<title><?php echo $seo_title; ?></title>
		<meta name="description" content="<?php echo $seo_description; ?>">	
		<meta property="og:title" content="<?php echo $seo_title; ?>" />
		<meta property="og:description" content="<?php echo $seo_description; ?>" />
</head>

<body>
<div style="text-align:center">			  
		<a href="../template1/index.php" class="btn btn-success btn"><span class="glyphicon glyphicon-ok"></span> Theme 1</a>
		<a href="../template2/index.php" class="btn btn-success btn"><span class="glyphicon glyphicon-ok"></span> Theme 2</a>
		<a href="../template3/index.php" class="btn btn-success btn"><span class="glyphicon glyphicon-ok"></span> Theme 3</a>
		<a href="../template4/index.php" class="btn btn-success btn"><span class="glyphicon glyphicon-ok"></span> Theme 4</a>
		<a href="../template5/index.php" class="btn btn-success btn"><span class="glyphicon glyphicon-ok"></span> Theme 5</a>
		<a href="../template6/index.php" class="btn btn-success btn"><span class="glyphicon glyphicon-ok"></span> Theme 6</a>
		<a href="../template7/index.php" class="btn btn-success btn"><span class="glyphicon glyphicon-ok"></span> Theme 7</a>
		<a href="../template8/index.php" class="btn btn-success btn"><span class="glyphicon glyphicon-ok"></span> Theme 8</a>
		<a href="../admin" class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-exclamation-sign"></span> Admin</a>
</div>
<?php		$results = DB::query("SELECT * FROM top_listing WHERE active=1 ORDER BY rank");		?>
<div class="container">
<div class="table-responsive">
<div class="su-table">
<table class="table table-bordered">
<tbody><tr class="su-even">
<td><b>Rank</b></td>
<td><b>Name</b></td>
<td><b><?php echo $feature4_name; ?></b></td>
<td><b>Review</b></td>
</tr>
<?php 	foreach ($results as $row) { ?>	

	<tr>
		<td><?php if($row['rank']=='1'){ echo '<img src="images/n1-icon-50x50.png" alt="<?php echo $row[\'name\']; ?> rank" height="50" width="50">'; }
									elseif($row['rank']=='2'){ echo '<img src="images/n2-icon-50x50.png" alt="<?php echo $row[\'name\']; ?> rank" height="50" width="50">'; }
									elseif($row['rank']=='3'){ echo '<img src="images/n3-icon-50x50.png" alt="<?php echo $row[\'name\']; ?> rank" height="50" width="50">'; }
									else{ echo '<h3 style="text-align:center">'.$row['rank'].'</h3>'; }
									?>
									</td>
		<td><center><br>
			<a href="../go.php?top=<?php echo $row['id']; ?>&name=<?php echo $row['name']; ?>" title="<?php echo $row['name']; ?>" target="_blank">
				<img src="../banner/<?php echo $row['banner1']; ?>" alt="<?php echo $row['name']; ?>" style="height:75px; width:150px;" class="size-full wp-image-2909" ></a>
				<br><?php echo strtoupper($row['name']); ?>
			</center></td>
		<td><?php echo $row['value_feature4']; ?></td>
		<td>
			<a href="../page.php?id=<?php echo $row['id']; ?>" class="su-button su-button-style-flat" style="color:#ffffff;background-color:#519eee;border-color:#417ebe;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px" target="_self"><span style="color:#ffffff;padding:0px 22px;font-size:17px;line-height:34px;border-color:#85bbf3;border-radius:5px;-moz-border-radius:5px;-webkit-border-radius:5px;text-shadow:none;-moz-text-shadow:none;-webkit-text-shadow:none"> Reviews</span></a>
		</td>
	</tr>

<?php } ?>

</tbody></table>
</div>
</div>
</body>
</html>
