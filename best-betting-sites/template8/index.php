<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
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
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'http://bootsnipp.com');
        });
    </script>
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
<div class="container">
		 <div class="alert alert-info" role="alert"><b>Demo 8 !</b> For the <b>demo #8</b>, only the top 5 are displayed</div>	
<?php		$results = DB::query("SELECT * FROM top_listing WHERE active=1 ORDER BY rank LIMIT 5");		?>


		

<div class="col-md-12">
	<?php foreach ($results as $row) { ?>	
    <h1>TOP # <?php echo $row['rank'].' '.$row['name']; ?></h1>
    <p><?php echo $row['description']; ?></p>
    <div>
<span class="label label-danger"><a target="_blank" href="../go.php?top=<?php echo $row['id']; ?>&name=<?php echo $row['name']; ?>" style="color:white">Visit</a></span>
<div class="pull-right">
	<span class="label label-default"><?php echo $feature1_name.' : '.$row['value_feature1']; ?></span> 
	<span class="label label-primary"><?php echo $feature2_name.' : '.$row['value_feature2']; ?></span> 
	<span class="label label-success"><?php echo $feature3_name.' : '.$row['value_feature3']; ?></span> 
	<span class="label label-warning"><?php echo $feature5_name.' : '.$row['value_feature5']; ?></span>
</div>         
     </div>
	 <hr>
	 <?php } ?>
</div>
</div>
</body>
</html>
