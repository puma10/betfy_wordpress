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
    <style type="text/css">
        	.row{
		    margin-top:40px;
		    padding: 0 10px;
		}
		.clickable{
		    cursor: pointer;   
		}

		.panel-heading div {
			margin-top: -18px;
			font-size: 15px;
		}
		.panel-heading div span{
			margin-left:5px;
		}
		.panel-body{
			display: none;
		}    </style>
		
		
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
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
	<script src="js/pbTable.js"></script>
					<script>
						$(document).ready(function(e) {
							$('#dev-table').pbTable({
								selectable: true,
								sortable:true,
								toolbar:{
									enabled:false				
								}
							});
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
		 <div class="alert alert-info" role="alert"><b>Demo 6 </b></div>
<?php		$results = DB::query("SELECT * FROM top_listing WHERE active=1 ORDER BY rank");		?>
    <h5>Click the filter icon <small>(<i class="glyphicon glyphicon-filter"></i>)</small></h5>
    	<div class="row">
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Top 10 Webhosting</h3>
						<div class="pull-right">
							<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
								<i class="glyphicon glyphicon-filter"></i>
							</span>
						</div>
					</div>
					<div class="panel-body">
						<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
					</div>
					<table class="table table-hover table-responsive" id="dev-table">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th></th>
								<?php if(!empty($feature1_name)){ echo '<th>'.$feature1_name.'</th>'; } ?>
								<?php if(!empty($feature2_name)){ echo '<th>'.$feature2_name.'</th>'; } ?>
								<?php if(!empty($feature3_name)){ echo '<th>'.$feature3_name.'</th>'; } ?>
								<?php if(!empty($feature4_name)){ echo '<th>'.$feature4_name.'</th>'; } ?>
								<?php if(!empty($feature5_name)){ echo '<th>'.$feature5_name.'</th>'; } ?>
								<th>&nbsp;</th>
							</tr>
						</thead>
						<tbody>
							<?php 	foreach ($results as $row) { ?>							
								<tr>
									<td><?php echo $row['rank']; ?></td>
									<td><b><?php echo strtoupper($row['name']); ?></b></td>
									<?php if(!empty($row['banner1'])){ echo '<td><img src="../banner/'.$row['banner1'].'" alt="'.$row['name'].'"></td>'; } ?>
									<?php if(!empty($feature1_name)){ echo '<td>'.$row['value_feature1'].'</td>'; } ?>
									<?php if(!empty($feature2_name)){ echo '<td>'.$row['value_feature2'].'</td>'; } ?>
									<?php if(!empty($feature3_name)){ echo '<td>'.$row['value_feature3'].'</td>'; } ?>
									<?php if(!empty($feature4_name)){ echo '<td>'.$row['value_feature4'].'</td>'; } ?>
									<?php if(!empty($feature5_name)){ echo '<td>'.$row['value_feature5'].'</td>'; } ?>
									<td><a target="_blank" href="../go.php?top=<?php echo $row['id']; ?>&name=<?php echo $row['name']; ?>" class="btn btn-success btn-block"><span class="glyphicon glyphicon-log-out"></span> Visit</a>
										<a href="../page.php?id=<?php echo $row['id']; ?>" class="btn btn-info btn-block"><span class="glyphicon glyphicon-comment"></span> Reviews</a></td>
								</tr>
							<?php } ?>
							
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>	<script type="text/javascript">
	/**
*   I don't recommend using this plugin on large tables, I just wrote it to make the demo useable. It will work fine for smaller tables 
*   but will likely encounter performance issues on larger tables.
*
*		<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
*		$(input-element).filterTable()
*		
*	The important attributes are 'data-action="filter"' and 'data-filters="#table-selector"'
*/
(function(){
    'use strict';
	var $ = jQuery;
	$.fn.extend({
		filterTable: function(){
			return this.each(function(){
				$(this).on('keyup', function(e){
					$('.filterTable_no_results').remove();
					var $this = $(this), search = $this.val().toLowerCase(), target = $this.attr('data-filters'), $target = $(target), $rows = $target.find('tbody tr');
					if(search == '') {
						$rows.show(); 
					} else {
						$rows.each(function(){
							var $this = $(this);
							$this.text().toLowerCase().indexOf(search) === -1 ? $this.hide() : $this.show();
						})
						if($target.find('tbody tr:visible').size() === 0) {
							var col_count = $target.find('tr').first().find('td').size();
							var no_results = $('<tr class="filterTable_no_results"><td colspan="'+col_count+'">No results found</td></tr>')
							$target.find('tbody').append(no_results);
						}
					}
				});
			});
		}
	});
	$('[data-action="filter"]').filterTable();
})(jQuery);

$(function(){
    // attach table filter plugin to inputs
	$('[data-action="filter"]').filterTable();
	
	$('.container').on('click', '.panel-heading span.filter', function(e){
		var $this = $(this), 
				$panel = $this.parents('.panel');
		
		$panel.find('.panel-body').slideToggle();
		if($this.css('display') != 'none') {
			$panel.find('.panel-body input').focus();
		}
	});
	$('[data-toggle="tooltip"]').tooltip();
})	</script>
</body>
</html>
