<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
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
<div id="tbl_rank_cont" class="tbl_rank_inner overview">
<table id="tbl_rank_cnt" class="top_provid top-provid-new" cellpadding="0" cellspacing="0">
<tbody>
<tr>
<th class="col1">Rank</th>
<th class="col2">Name</th>
<th class="col4"><?php echo $feature4_name; ?></th>
<th class="col5">&nbsp;</th>
<th class="col3">as low as</th>
</tr>

<?php 	foreach ($results as $row) { ?>	
<tr>
	<td class="col1-1"><?php echo $row['rank']; ?></td>
	<td class="col2-2 top-provid-new-img"><a target="_blank" href="../go.php?top=<?php echo $row['id']; ?>&name=<?php echo $row['name']; ?>"><img title="<?php echo strtoupper($row['name']); ?>" src="../banner/<?php echo $row['banner1']; ?>" alt="<?php echo strtoupper($row['name']); ?>" style="display: inline;height:70px; width:150px;" class="lazy"></a></td>
	<td class="col4-4"><?php echo $row['value_feature4']; ?></td>
	<td class="col5-5"><a class="col-green_btn col-orng-btn" href="../go.php?top=<?php echo $row['id']; ?>&name=<?php echo $row['name']; ?>" target="_blank"><?php echo strtoupper($row['name']); ?></a><a class="col-red_btn col-rw-btn" href="../go.php?top=<?php echo $row['id']; ?>&name=<?php echo $row['name']; ?>" target="_blank"><?php echo $row['value_feature3']; ?> - Days Money Back Guarantee</a></td>
	<td class="col3-3 top-provid-new-prc-tag"><?php echo $row['value_feature5']; ?><br> per month</td>
</tr>


<?php } ?>

</tbody>
</table>
</div>
</div>
</div>
</body>
</html>
