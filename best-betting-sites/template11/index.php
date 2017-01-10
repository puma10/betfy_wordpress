<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://designers.hubspot.com/hs-fs/hub/327485/file-2054199286-css/font-awesome.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet" type="text/css">
   	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

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
		<!--<a href="../template1/index.php" class="btn btn-success btn"><span class="glyphicon glyphicon-ok"></span> Theme 1</a>
		<a href="../template2/index.php" class="btn btn-success btn"><span class="glyphicon glyphicon-ok"></span> Theme 2</a>
		<a href="../template3/index.php" class="btn btn-success btn"><span class="glyphicon glyphicon-ok"></span> Theme 3</a>
		<a href="../template4/index.php" class="btn btn-success btn"><span class="glyphicon glyphicon-ok"></span> Theme 4</a>
		<a href="../template5/index.php" class="btn btn-success btn"><span class="glyphicon glyphicon-ok"></span> Theme 5</a>
		<a href="../template6/index.php" class="btn btn-success btn"><span class="glyphicon glyphicon-ok"></span> Theme 6</a>
		<a href="../template7/index.php" class="btn btn-success btn"><span class="glyphicon glyphicon-ok"></span> Theme 7</a>
		<a href="../template8/index.php" class="btn btn-success btn"><span class="glyphicon glyphicon-ok"></span> Theme 8</a>-->
		<a href="../admin" class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-exclamation-sign"></span> Admin</a>
</div>
<?php		$results = DB::query("SELECT * FROM top_listing WHERE active=1 ORDER BY rank");	?>
<div class="container top10-main">
    <div class="table-responsive">
        <table class="table table-bordered top10-table-desktop">
            <tbody><tr>
                <td>Rank</td>
                <td>Name</td>
                <td><?php echo $feature1_name; ?>/<?php echo $feature2_name; ?></td>
                <td><?php echo $feature4_name; ?></td>
                <td><?php echo $feature6_name; ?></td>
                <td>Details</td>
            </tr>
				<?php 	foreach ($results as $row) { ?>

				<tr>
                    <td class="top-mob-1td">
						<?php if($row['rank']=='1'){ ?>
							<div class="customer-choice"><b>Customer's Choice</b></div>
							<div class="top10-box-cup top10-sheild  "><span>1 </span></div>
						<?php }else{ ?>
							<div class="top10-box-cup fa fa-trophy"><span><?php echo $row['rank']; ?> </span></div>
						<?php } ?>
					</td>
                    <td class="top-mob-2td">
                        <div class="provider-img-box">
                            <a href="../go.php?top=<?php echo $row['id']; ?>&name=<?php echo $row['name']; ?>" title="<?php echo strtoupper($row['name']); ?>" target="_blank" >
                                <img title="<?php echo strtoupper($row['name']); ?>" src="../banner/<?php echo $row['banner1']; ?>" alt="<?php echo strtoupper($row['name']); ?>">
                            </a>
                        </div>
	                    <?php echo strtoupper($row['name']); ?>                    </td>
                    <td><?php echo $row['value_feature1']; ?>/<?php echo $row['value_feature2']; ?></td>
                    <td class="top-mob-6td">
                        <p><?php echo $row['value_feature4']; ?></p>                    </td>

                    <td><span class="rating_alter"><?php echo $row['value_feature6']; ?></span></td>
                    <td><div class="prvd-prc-main"><?php echo $row['value_feature5']; ?><span>per month</span></div><a href="../go.php?top=<?php echo $row['id']; ?>&name=<?php echo $row['name']; ?>" target="_blank" class="btn-visit-prov">Visit Provider</a></td>
                </tr>

				<?php } ?>
                        </tbody></table>
    </div>
<?php  $results1 = DB::query("SELECT * FROM text");?>
    <div class="col-md-12">
      	<?php 	foreach ($results1 as $row) { ?>
          <p>
          <?php echo $row[text]; ?>
        </p>
          <?php }?>
    </div>
</div>
</body>
</html>
