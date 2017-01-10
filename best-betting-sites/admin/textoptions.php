<?php include 'header.php' ?>
<?php
echo '<script LANGUAGE="JavaScript">
												function confirmSubmit()
												{
												var agree=confirm("Are you sure you wish to remove?");
												if (agree)
													return true ;
												else
													return false ;
												}
												</script>';


if(!empty($_GET['id'])){ $_GET['num_top']=$_GET['id']; }
if(!empty($_GET['num_top']) AND $_GET['num_top']>0){
	$num_top = (int)$_GET['num_top'];
	}else{
	$num_top = '';
	}
?>
<?php function display_top($top_number=''){ ?>
	<link rel="stylesheet" type="text/css" href="../lib/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../src/bootstrap-wysihtml5.css" />
    <script src="../lib/js/wysihtml5-0.3.0.js"></script>
    <script src="../lib/js/jquery-1.7.2.min.js"></script>
    <script src="../lib/js/bootstrap.min.js"></script>
    <script src="../src/bootstrap3-wysihtml5.js"></script>
    <style type="text/css" media="screen">
				.modal-dialog{
					left: 0!important;
				}
        .btn.jumbo {
            font-size: 20px;
            font-weight: normal;
            padding: 14px 24px;
            margin-right: 10px;
            -webkit-border-radius: 6px;
            -moz-border-radius: 6px;
            border-radius: 6px;
        }
    </style>

<?php

if(!empty($_POST['update'])){

	if($_POST['active']=='1' AND empty($_POST['name'])){
		echo '<div class="alert alert-danger">Error. Please insert a name.</div>';
	}else{
		if(!empty($_POST['text'])) { $text=$_POST['text']; }else { $text=''; }


		$insert=DB::insertUpdate('text', array(
										'text' => $text));
		if($insert){
			echo '<div class="alert alert-success">Success.</div>';
		}else{
			echo '<div class="alert alert-warning">Error. Please try again.</div>';
		}
	}
}
	if(!empty($top_number)){
		$row = DB::queryFirstRow("SELECT * FROM text WHERE id=$top_number");
		$text=$row['text'];
	}
?>
<form class="form-horizontal" method="post">
<fieldset>
<!-- Multiple Radios (inline) -->


<!-- Textarea -->
<div class="form-group">
  <div class="col-md-12">
	<textarea class="textarea form-control" id="text" name="text" placeholder="Enter text ..." style="height: 200px"><?php if(!empty($text)){ echo $text; } ?></textarea>
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
<script type="text/javascript" charset="utf-8">
    $(prettyPrint);
</script>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <input type="submit" class="btn btn-default btn-primary btn-lg" name="update" value="Insert"/>
  </div>
</div>

</fieldset>
<input type="hidden" name="num_top" value="<?php echo $top_number; ?>">
</form>


</form>

<?php } ?>
<?php
/**
 * uploadFile()
 *
 * @param string $file_field name of file upload field in html form
 * @param bool $check_image check if uploaded file is a valid image
 * @param bool $random_name generate random filename for uploaded file
 * @return array
 */
function uploadFile ($file_field = null, $check_image = false, $random_name = false) {

  //Config Section
  //Set file upload path
  $path = '../banner/'; //with trailing slash
  //Set max file size in bytes
  $max_size = 1000000;
	//Set default file extension whitelist
	$whitelist_ext = array('jpg', 'jpeg', 'png','gif');
	//Set default file type whitelist
	$whitelist_type = array('image/jpg', 'image/pjpeg', 'image/png','image/gif');



  //The Validation
  // Create an array to hold any output
  $out = array('error'=>null);

  if (!$file_field) {
    $out['error'][] = "Please specify a valid form field name";
  }

  if (!$path) {
    $out['error'][] = "Please specify a valid upload path";
  }

  if (count($out['error'])>0) {
    return $out;
  }

  //Make sure that there is a file
  if((!empty($_FILES[$file_field])) && ($_FILES[$file_field]['error'] == 0)) {

    // Get filename
    $file_info = pathinfo($_FILES[$file_field]['name']);
    $name = $file_info['filename'];
    $ext = $file_info['extension'];

    //Check file has the right extension
    if (!in_array($ext, $whitelist_ext)) {
      $out['error'][] = "Invalid file Extension";
    }

    //Check that the file is of the right type
    if (!in_array($_FILES[$file_field]["type"], $whitelist_type)) {
      $out['error'][] = "Invalid file Type";
    }

    //Check that the file is not too big
    if ($_FILES[$file_field]["size"] > $max_size) {
      $out['error'][] = "File is too big";
    }

    //If $check image is set as true
    if ($check_image) {
      if (!getimagesize($_FILES[$file_field]['tmp_name'])) {
        $out['error'][] = "Uploaded file is not a valid image";
      }
    }

    //Create full filename including path
    if ($random_name) {
      // Generate random filename
      $tmp = str_replace(array('.',' '), array('',''), microtime());

      if (!$tmp || $tmp == '') {
        $out['error'][] = "File must have a name";
      }
      $newname = $tmp.'.'.$ext;
    } else {
        $newname = $name.'.'.$ext;
    }

    //Check if file already exists on server
    if (file_exists($path.$newname)) {
      $out['error'][] = "A file with this name already exists";
    }

    if (count($out['error'])>0) {
      //The file has not correctly validated
      return $out;
    }

    if (move_uploaded_file($_FILES[$file_field]['tmp_name'], $path.$newname)) {
      //Success
      $out['filepath'] = $path;
      $out['filename'] = $newname;
      return $out;
    } else {
      $out['error'][] = "Server Error!";
    }

  } else {
    $out['error'][] = "No file uploaded";
    return $out;
  }
}
?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add text</h1>
					<?php display_top($num_top); 	?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
<?php include 'footer.php' ?>
