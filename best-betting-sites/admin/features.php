<?php include 'header.php' ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Template Options</h1>

<?php
//DB::debugMode();
if(!empty($_POST['update'])){
	if(!empty($_POST['feature1_name'])) { $feature1_name=$_POST['feature1_name']; }else { $feature1_name=''; }
	if(!empty($_POST['feature2_name'])) { $feature2_name=$_POST['feature2_name']; }else { $feature2_name=''; }
	if(!empty($_POST['feature3_name'])) { $feature3_name=$_POST['feature3_name']; }else { $feature3_name=''; }
	if(!empty($_POST['feature4_name'])) { $feature4_name=$_POST['feature4_name']; }else { $feature4_name=''; }
	if(!empty($_POST['feature5_name'])) { $feature5_name=$_POST['feature5_name']; }else { $feature5_name=''; }
if(!empty($_POST['feature6_name'])) { $feature6_name=$_POST['feature6_name']; }else { $feature6_name=''; }
if(!empty($_POST['feature7_name'])) { $feature7_name=$_POST['feature7_name']; }else { $feature7_name=''; }
if(!empty($_POST['feature8_name'])) { $feature8_name=$_POST['feature8_name']; }else { $feature8_name=''; }
if(!empty($_POST['feature9_name'])) { $feature9_name=$_POST['feature9_name']; }else { $feature9_name=''; }
if(!empty($_POST['feature10_name'])) { $feature10_name=$_POST['feature10_name']; }else { $feature10_name=''; }
	if(!empty($_POST['seo_title_hp'])) { $seo_title_hp=$_POST['seo_title_hp']; }else { $seo_title_hp=''; }
	if(!empty($_POST['seo_description_hp'])) { $seo_description_hp=$_POST['seo_description_hp']; }else { $seo_description_hp=''; }
  if(!empty($_POST['title'])) { $title=$_POST['title']; }else { $title='';}
  if(!empty($_POST['description'])) { $description=$_POST['description']; }else { $description='';}



	$insert=DB::insertUpdate('options', array( 'id' => 0,
									'feature1_name' => $feature1_name,
									'feature2_name' => $feature2_name,
									'feature3_name' => $feature3_name,
									'feature4_name' => $feature4_name,
									'feature5_name' => $feature5_name,
									'feature6_name' => $feature6_name,
									'feature7_name' => $feature7_name,
									'feature8_name' => $feature8_name,
									'feature9_name' => $feature9_name,
									'feature10_name' => $feature10_name,
									'seo_title_hp' => $seo_title_hp,'seo_description_hp' => $seo_description_hp,
                  'title' => $title,
									'description' => $description));
	if($insert){
		echo '<div class="alert alert-success">Success.</div>';
	}else{
		echo '<div class="alert alert-warning">Error. Please try again.</div>';
	}
}

	$row = DB::queryFirstRow("SELECT * FROM options WHERE id=0");
	$feature1_name=$row['feature1_name'];
	$feature2_name=$row['feature2_name'];
	$feature3_name=$row['feature3_name'];
	$feature4_name=$row['feature4_name'];
	$feature5_name=$row['feature5_name'];
	$feature6_name=$row['feature6_name'];
	$feature7_name=$row['feature7_name'];
	$feature8_name=$row['feature8_name'];
	$feature9_name=$row['feature9_name'];
	$feature10_name=$row['feature10_name'];
	$seo_title_hp=$row['seo_title_hp'];
	$seo_description_hp=$row['seo_description_hp'];
  $title=$row['title'];
	$description=$row['description'];

	$results = DB::query("SELECT * FROM top_listing ORDER BY id");
	$array_name=array();
	foreach ($results as $row) {
		$array_name[].= $row['name'];
	}
?>
  <link rel="stylesheet" type="text/css" href="../lib/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="../src/bootstrap-wysihtml5.css" />
  <script src="../lib/js/wysihtml5-0.3.0.js"></script>
  <script src="../lib/js/jquery-1.7.2.min.js"></script>
  <script src="../lib/js/bootstrap.min.js"></script>
  <script src="../src/bootstrap3-wysihtml5.js"></script>

<form class="form-horizontal" method="post">

<!-- Form Name -->
<legend>Choose the displayed name of the 10 different features</legend>
 If you record 2 features, only these two will be displayed on the site
<fieldset>
	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="feature1">Name of Feature 1</label>
	  <div class="col-md-5">
	  <input id="feature1" name="feature1_name" type="text" placeholder="-" class="form-control input-md" <?php if(!empty($feature1_name)){ echo "value='".$feature1_name."'"; } ?>>
	  </div>
	</div>
	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="feature2">Name of Feature 2</label>
	  <div class="col-md-5">
	  <input id="feature2" name="feature2_name" type="text" placeholder="-" class="form-control input-md" <?php if(!empty($feature2_name)){ echo "value='".$feature2_name."'"; } ?>>
	  </div>
	</div>
	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="feature3">Name of Feature 3</label>
	  <div class="col-md-5">
	  <input id="feature3" name="feature3_name" type="text" placeholder="-" class="form-control input-md" <?php if(!empty($feature3_name)){ echo "value='".$feature3_name."'"; } ?>>
	  </div>
	</div>
	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="feature4">Name of Feature 4</label>
	  <div class="col-md-5">
	  <input id="feature4" name="feature4_name" type="text" placeholder="-" class="form-control input-md" <?php if(!empty($feature4_name)){ echo "value='".$feature4_name."'"; } ?>>
	  </div>
	</div>
	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="feature5">Name of Feature 5</label>
	  <div class="col-md-5">
	  <input id="feature5" name="feature5_name" type="text" placeholder="-" class="form-control input-md" <?php if(!empty($feature5_name)){ echo "value='".$feature5_name."'"; } ?>>
	  </div>
	</div>
	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="feature5">Name of Feature 6</label>
	  <div class="col-md-5">
	  <input id="feature5" name="feature6_name" type="text" placeholder="-" class="form-control input-md" <?php if(!empty($feature6_name)){ echo "value='".$feature6_name."'"; } ?>>
	  </div>
	</div>
	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="feature5">Name of Feature 7</label>
	  <div class="col-md-5">
	  <input id="feature5" name="feature7_name" type="text" placeholder="-" class="form-control input-md" <?php if(!empty($feature7_name)){ echo "value='".$feature7_name."'"; } ?>>
	  </div>
	</div>
	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="feature5">Name of Feature 8</label>
	  <div class="col-md-5">
	  <input id="feature5" name="feature8_name" type="text" placeholder="-" class="form-control input-md" <?php if(!empty($feature8_name)){ echo "value='".$feature8_name."'"; } ?>>
	  </div>
	</div>
	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="feature5">Name of Feature 9</label>
	  <div class="col-md-5">
	  <input id="feature5" name="feature9_name" type="text" placeholder="-" class="form-control input-md" <?php if(!empty($feature9_name)){ echo "value='".$feature9_name."'"; } ?>>
	  </div>
	</div>
	<!-- Text input-->
	<div class="form-group">
	  <label class="col-md-4 control-label" for="feature5">Name of Feature 10</label>
	  <div class="col-md-5">
	  <input id="feature5" name="feature10_name" type="text" placeholder="-" class="form-control input-md" <?php if(!empty($feature10_name)){ echo "value='".$feature10_name."'"; } ?>>
	  </div>
	</div>
  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="title">Title</label>
    <div class="col-md-5">
    <input id="title" name="title" type="text" placeholder="-" class="form-control input-md" <?php if(!empty($title)){ echo "value='".$title."'"; } ?>>
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="description">Description</label>
    <div class="col-md-5">
      <textarea class="textarea form-control input-md" id="description" name="description" placeholder="Enter text ..." style="height: 200px">
        <?php if(!empty($description)){ echo $description; } ?>
      </textarea>


    </div>
  </div>
  <script>
      //$('.textarea').wysihtml5();
  	$('.textarea').wysihtml5({
      "font-styles": true, //Font styling, e.g. h1, h2, etc. Default true
      "emphasis": true, //Italics, bold, etc. Default true
      "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
      "html": false, //Button which allows you to edit the generated HTML. Default false
      "link": true, //Button to insert a link. Default true
      "image": true, //Button to insert an image. Default true,
      "color": false, //Button to change color of font
      "size": 'sm' //Button size like sm, xs etc.
  });
  </script>
<div class="panel panel-primary">
	<div class="panel-heading">
    <h3 class="panel-title">SEO options</h3>
  </div>
  <div class="panel-body">
  <b><u>TIPS</u></b>
  <br><b>Title :</b> between 10 and 70 characters (including spaces), and less than 12 words in length
  <br><b>Description :</b>between 50 and 160 characters (spaces included), and no more than 24 words in length
				<br>
						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="feature1">SEO Title</label>
						  <div class="col-md-5">
						  <input id="feature1" name="seo_title_hp" type="text" placeholder="-" class="form-control input-md" <?php if(!empty($seo_title_hp)){ echo "value='".$seo_title_hp."'"; } ?>>
						  </div>
						</div>
						<!-- Text input-->
						<div class="form-group">
						  <label class="col-md-4 control-label" for="feature2">SEO Description</label>
						  <div class="col-md-5">
						  <input id="feature2" name="seo_description_hp" type="text" placeholder="-" class="form-control input-md" <?php if(!empty($seo_description_hp)){ echo "value='".$seo_description_hp."'"; } ?>>
						  </div>
						</div>


  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
	<input type="submit" class="btn btn-default btn-primary btn-lg" name="update" value="Update"/>
  </div>
</div>

</fieldset>
</form>


                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
<?php include 'footer.php' ?>
