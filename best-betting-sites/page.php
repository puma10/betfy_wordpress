<?php
if(empty($_GET['id']) OR !is_numeric($_GET['id'])) {
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<?php	
		require_once 'admin/meekrodb.2.3.class.php'; 
		$id=$_GET['id'];
		
	
	
	$row = DB::queryFirstRow("SELECT * FROM top_listing,options WHERE top_listing.id ='".$id."'");
	$feature1_name	= $row['feature1_name'];
	$feature2_name   = $row['feature2_name'];
	$feature3_name   = $row['feature3_name'];
	$feature4_name   = $row['feature4_name'];
	$feature5_name   = $row['feature5_name'];
		$seo_title	= $row['seo_title'];
		$seo_description  = $row['seo_description'];
		
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
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <link type="text/css" rel="stylesheet" href="css/example.css">
	<link href="css/star-rating.css" media="all" rel="stylesheet" type="text/css"/>
	<script src="js/star-rating.js" type="text/javascript"></script>
    
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
	<div class="container">


<h1>TOP # <?php echo $row['rank'].' '.$row['name']; ?></h1>
<?php if(!empty($row['banner1'])){echo '<center><img src="./banner/'.$row['banner1'].'" alt="'.$row['name'].'"></center><br><br>'; } ?>
    <p><?php echo $row['description']; ?></p>
    <div>
<span class="label label-danger"><a target="_blank" href="go.php?top=<?php echo $id; ?>&name=<?php echo $row['name']; ?>" style="color:white">Visit</a></span>
<div class="pull-right">
	<span class="label label-default"><?php echo $feature1_name.' : '.$row['value_feature1']; ?></span> 
	<span class="label label-primary"><?php echo $feature2_name.' : '.$row['value_feature2']; ?></span> 
	<span class="label label-success"><?php echo $feature3_name.' : '.$row['value_feature3']; ?></span> 
	<span class="label label-warning"><?php echo $feature5_name.' : '.$row['value_feature5']; ?></span>
</div>         
     </div>
<?php if(!empty($row['banner2'])){echo '<br><br><center><img src="./banner/'.$row['banner2'].'" alt="'.$row['name'].'"></center>'; } ?>
<br><hr>
<h3>Comments</h3>
		
<?php
$id_post = $id;
?>	 
	<div class="cmt-container" >
	
    <?php 	
	$results = DB::query("SELECT * FROM comments WHERE id_post = '$id_post'");	

	foreach ($results as $affcom) {	
        $name = $affcom['name'];
        $email = $affcom['email'];
        $comment = $affcom['comment'];
		$rating = $affcom['rating'];
        $date = $affcom['date'];

        // Get gravatar Image 
        // https://fr.gravatar.com/site/implement/images/php/
        $default = "mm";
        $size = 35;
        $grav_url = "http://www.gravatar.com/avatar/".md5(strtolower(trim($email)))."?d=".$default."&s=".$size;

    ?>
	
	
	
    <div class="cmt-cnt">
        <img src="<?php echo $grav_url; ?>" />
        <div class="thecom">
            <h5><?php echo $name; ?></h5>
			<input id="input-5a" class="rating" value="<?php echo $rating; ?>" data-size="xs" data-show-clear="false" data-show-caption="false" data-readonly="true">
			<span data-utime="1371248446" class="com-dt"><?php echo $date; ?></span>
            <br/>
            <p>
                <?php echo $comment; ?>
            </p>
        </div>
    </div><!-- end "cmt-cnt" -->
    <?php } ?>
	
	

    <div class="new-com-bt">
        <span>Write a comment ...</span>
    </div>
    <div class="new-com-cnt">
        <input type="text" id="name-com" name="name-com" value="" placeholder="Your name" />
        <input type="text" id="mail-com" name="mail-com" value="" placeholder="Your e-mail adress" />
		<input name="starrating" id="starrating" value="1" type="number" class="rating" min=0 max=5 step=1 data-size="xs2" >
		<textarea class="the-new-com"></textarea>
		
        <div class="bt-add-com">Post comment</div>
        <div class="bt-cancel-com">Cancel</div>
    </div>
    <div class="clear"></div>
</div><!-- end of comments container "cmt-container" -->


<script type="text/javascript">
   $(function(){ 
        //alert(event.timeStamp);
        $('.new-com-bt').click(function(event){    
            $(this).hide();
            $('.new-com-cnt').show();
            $('#name-com').focus();
        });

        /* when start writing the comment activate the "add" button */
        $('.the-new-com').bind('input propertychange', function() {
           $(".bt-add-com").css({opacity:0.6});
           var checklength = $(this).val().length;
           if(checklength){ $(".bt-add-com").css({opacity:1}); }
        });

        /* on clic  on the cancel button */
        $('.bt-cancel-com').click(function(){
            $('.the-new-com').val('');
            $('.new-com-cnt').fadeOut('fast', function(){
                $('.new-com-bt').fadeIn('fast');
            });
        });

        // on post comment click 
        $('.bt-add-com').click(function(){
            var theCom = $('.the-new-com');
            var theName = $('#name-com');
            var theMail = $('#mail-com');
			var starrating = $('#starrating');			
			
            if( !theCom.val()){ 
                alert('You need to write a comment!'); 
            }else{ 
                $.ajax({
                    type: "POST",
                    url: "add-comment.php",
                    data: 'act=add-com&id_post='+<?php echo $id_post; ?>+'&name='+theName.val()+'&rating='+starrating.val()+'&email='+theMail.val()+'&comment='+theCom.val(),
                    success: function(html){
                        theCom.val('');
                        theMail.val('');
                        theName.val('');
						starrating.val('');
                        $('.new-com-cnt').hide('fast', function(){
                            $('.new-com-bt').show('fast');
                            $('.new-com-bt').before(html);  
                        })
                    }  
                });
            }
        });

    });
</script> 
	 
	 
	</div>	
</body>
</html>
