<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="http://designers.hubspot.com/hs-fs/hub/327485/file-2054199286-css/font-awesome.css" rel="stylesheet">
<link href="style.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5-alpha/css/bootstrap.css" rel="stylesheet">

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
<div style="text-align:center;background-color:black;color:white;padding:10px">		
<style>.alink { color:white;} </style>	  
		<a href="../template1/index.php" class="alink"> Theme 1</a> |
		<a href="../template2/index.php" class="alink"> Theme 2</a> |
		<a href="../template3/index.php" class="alink"> Theme 3</a> |
		<a href="../template4/index.php" class="alink"> Theme 4</a> |
		<a href="../template5/index.php" class="alink"> Theme 5</a> |
		<a href="../template6/index.php" class="alink"> Theme 6</a> |
		<a href="../template7/index.php" class="alink"> Theme 7</a> |
		<a href="../template8/index.php" class="alink"> Theme 8</a> |
		<a href="../admin" class="alink"> Admin</a>
</div>
<hr>
<?php		$results = DB::query("SELECT * FROM top_listing WHERE active=1 ORDER BY rank");		?>
<div class="top10table-container">
<div class="container">
<div class="table-responsive">
<div class="shadow">
<table class="top10table" cellpadding="0" cellspacing="0">
<tbody>
<tr style="COLOR: #006d9e">
<th>RANK</th>
<th>HOST</th>
<th><?php echo $feature5_name; ?></th>
<th><?php echo $feature1_name; ?></th>
<th><?php echo $feature2_name; ?></th>
<th><?php echo $feature3_name; ?></th>
<th><?php echo $feature6_name; ?></th>
<th>REVIEWS</th></tr>
<?php 	foreach ($results as $row) { ?>	
<tr  <?php if($row['rank']=='1'){ echo 'class="place1"'; }
									elseif($row['rank']=='2'){ echo 'class="place2"'; }
									elseif($row['rank']=='3'){ echo 'class="place3"'; }
									?>>
	<td class="col1"><?php echo $row['rank']; ?></td>
	<td class="col2"><a title="<?php echo $row['name']; ?>" class="image-link" href="../go.php?top=<?php echo $row['id']; ?>&name=<?php echo $row['name']; ?>" target="_blank">
						<img style="margin-top: 0px;height:60px; width:100px;" alt="<?php echo $row['name']; ?>" src="../banner/<?php echo $row['banner1']; ?>"  >
					</a>
	</td>
	<td class="col3"><span><?php echo $row['value_feature5']; ?></span></td>
	<td class="col4"><span><?php echo $row['value_feature1']; ?></span></td>
	<td class="col5"><span><?php echo $row['value_feature2']; ?></span></td>
	<td class="col6"><span><?php echo $row['value_feature3']; ?></span></td>
	<td class="col8"><span><?php echo $row['value_feature6']; ?></span></td>
	<td class="col9"><a title="<?php echo $row['name']; ?>" class="read-review" href="../page.php?id=<?php echo $row['id']; ?>">READ REVIEW</a></td>
</tr>

<?php } ?>
</tbody></table></div></div></div>
</body>
</html>
