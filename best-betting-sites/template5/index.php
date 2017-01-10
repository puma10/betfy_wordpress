<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="http://designers.hubspot.com/hs-fs/hub/327485/file-2054199286-css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/2.3.2/css/bootstrap.min.css">
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
<hr>
<?php		$results = DB::query("SELECT * FROM top_listing WHERE active=1 ORDER BY rank");		?>
<div class="container">
<div class="table-responsive">
<table id="table-1491" class="tablesaw top_table_block full_width_rating tablesorter tablesaw-columntoggle" cellspacing="0">
<thead>
<tr class="top_rating_heading">
<th class="product_col_name header" >Banner</th>
	<th>Name</th>
	<th><?php echo $feature1_name; ?></th>
	<th><?php echo $feature2_name; ?></th>
	<th><?php echo $feature3_name; ?></th>
	<th><?php echo $feature6_name; ?></th>
	<th>Buy Now</th>
</tr>
</thead>
<tbody>
<?php 	foreach ($results as $row) { ?>	
<tr class="top_rating_item" id="rank_1">
	<td class="product_image_col"> <figure> <span class="rank_count"><?php if($row['rank']=='1'){ echo '<i class="fa fa-trophy"></i>'; }else{ echo $row['rank']; } ?></span> <a href="../go.php?top=<?php echo $row['id']; ?>&name=<?php echo $row['name']; ?>" class="btn_offer_block" target="_blank" > <img src="../banner/<?php echo $row['banner1']; ?>" alt="<?php echo $row['name']; ?>" style="height:80px; width:80px;"   > </a> </figure></td>
	<td class="column_0 column_content centered_content">
		<h3><?php echo strtoupper($row['name']); ?></h3>
	</td>
	<td class="column_1 column_content"><?php echo $row['value_feature1']; ?></td>
	<td class="column_4 column_content centered_content"><?php echo $row['value_feature2']; ?></td>
	<td class="column_4 column_content centered_content"><?php echo $row['value_feature3']; ?></td>
	<td class="column_5 column_content centered_content ">
		<div class="rating_col">
		<div class="top-rating-item-circle-view">
			<div class="radial-progress" >
				<div class="inset">
					<div class="percentage"><?php echo $row['value_feature6']; ?></div>
				</div>
			</div>
		</div>
			<a href="../page.php?id=<?php echo $row['id']; ?>"  class="read_full" target="_blank">Read review</a>
		</div>
	</td>
	<td class="buttons_col tablesaw-priority-1">
		<div class="priced_block clearfix">
			<p> 
				<span class="price_count"><ins>
					<?php echo $row['value_feature5']; ?></ins>
				</span>
			</p>
			<div>
				<a href="../go.php?top=<?php echo $row['id']; ?>&name=<?php echo $row['name']; ?>" class="btn_offer_block" target="_blank">Buy this item</a>
			</div>
		</div>
	</td>
</tr>



<?php } ?>

</tbody>
</table>
</div></div></div></div>
</body>
</html>
