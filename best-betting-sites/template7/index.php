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
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<style type="text/css">
    

/* Use a wide full screen for small screens like tablets. */
@media (min-width: 768px) and (max-width:992px) {
    .container {
		width: initial;
        padding-left: 2em;
        padding-right: 2em;        
	}
}

/* --- Plans ---------------------------- */

.my_planHeader {
    text-align: center;
    color: white;
    padding-top:0.2em;
    padding-bottom:0.2em;
}
.my_planTitle {
    font-size:2em;
    font-weight: bold;
}
.my_planPrice {
    font-size:1.4em;
    font-weight: bold;    
}
.my_planDuration {
    margin-top: -0.6em;
}

@media (max-width: 768px) {
    .my_planTitle {
        font-size:small;
    }    
}

/* --- Features ------------------------- */

.my_feature {
    line-height:2.8em;   
}

@media (max-width: 768px) {
    .my_feature {
        text-align: center
    }
 }

.my_featureRow {
    margin-top: 0.2em;
    margin-bottom: 0.2em;
    border: 0.1em solid rgb(163, 163, 163);
}    

/* --- Plan 1 --------------------------- */
.my_plan1 {
    background: rgb(224,234,242);
}

.my_planHeader.my_plan1 a {
    background: rgb(72, 109, 139);
    color:white;
}

.my_planHeader.my_plan1 {
    background: rgb(105, 153, 193);
    border-bottom: thick solid rgb(72, 109, 139);
}

/* --- Plan 2 --------------------------- */
.my_plan2 {
    background: rgb(230,235,218);
}

.my_planHeader.my_plan2 a {
    background: rgb(108, 131, 62);
    color:white;
}

.my_planHeader.my_plan2 {
    background: rgb(134, 162, 77);
    border-bottom: thick solid rgb(108, 131, 62);
}

/* --- Plan 3 --------------------------- */
.my_plan3 {
    background: rgb(254,235,212);
}

.my_planHeader.my_plan3 a {
    background: rgb(199, 127, 40);
    color:white;
}

.my_planHeader.my_plan3 {
    background: rgb(253, 161, 49);
    border-bottom: thick solid rgb(199, 127, 40);
}




.my_planFeature {
    text-align: center;
    font-size: 2em;
}

.my_planFeature i.my_check {
    color: green;
}



    </style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
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

		 <div class="alert alert-info" role="alert"><b>Demo 7 !</b> For the <b>demo #7</b>, only 3 features are displayed</div>		 
<?php		$results = DB::query("SELECT * FROM top_listing WHERE active=1 ORDER BY rank");		?>
    <div class="row">
        <div class="col-xs-12 col-sm-offset-4 col-sm-8">
            <div class="row">
                <div class="col-xs-4 my_planHeader my_plan1">
                    <div class="my_planTitle"><?php echo $feature1_name; ?></div>
                </div>
                <div class="col-xs-4 my_planHeader my_plan2">
                    <div class="my_planTitle"><?php echo $feature2_name; ?></div>
                </div>
                <div class="col-xs-4 my_planHeader my_plan3">
                    <div class="my_planTitle"><?php echo $feature5_name; ?></div>
                </div>
            </div>
        </div>
    </div>
	<?php 	foreach ($results as $row) { ?>			
    <div class="row my_featureRow">
        <div class="col-xs-12 col-sm-4 my_feature">
            <b><?php echo '#'.$row['rank'].' : '.strtoupper($row['name']); ?> <a target="_blank" href="../go.php?top=<?php echo $row['id']; ?>&name=<?php echo $row['name']; ?>">(Visit)</a></b>
        </div>
        <div class="col-xs-12 col-sm-8">
            <div class="row">
                <div class="col-xs-4 col-sm-4 my_planFeature my_plan1">
                    <?php echo $row['value_feature1']; ?>
                </div>
                <div class="col-xs-4 col-sm-4 my_planFeature my_plan2">
                    <?php echo $row['value_feature2']; ?>
                </div>
                <div class="col-xs-4 col-sm-4 my_planFeature my_plan3">
                    <?php echo $row['value_feature5']; ?>
                </div>
            </div>
        </div>
    </div>	
	<?php } ?>  
</div>

<h4 class="text-center"> A responsive pricing table that shows the comparison between the different webhosting.</h4>	<script type="text/javascript">
		</script>
</body>
</html>
