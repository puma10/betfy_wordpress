<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet" type="text/css">
   	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/6e87a688d1.js"></script>

	<?php
		require_once './admin/meekrodb.2.3.class.php';
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
            $title   = $results_features['title'];
						$description  = $results_features['description'];
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
		<a href="../template8/index.php" class="btn btn-success btn"><span class="glyphicon glyphicon-ok"></span> Theme 8</a>
		<a href="./admin" class="btn btn-warning btn-lg"><span class="glyphicon glyphicon-exclamation-sign"></span> Admin</a>-->
</div>
<?php		$results = DB::query("SELECT * FROM top_listing WHERE active=1 ORDER BY rank");	?>
<div class="container top10-main">
  <div>
    <h1 class="text-center"><?php echo $title; ?> </h1>
    <p><?php echo $description;?></p>
</div>
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
                                <img  width="100%" height="100%" title="<?php echo strtoupper($row['name']); ?>" src="./banner/<?php echo $row['banner1']; ?>" alt="<?php echo strtoupper($row['name']); ?>">
                            </a>
                        </div>
	                    <?php echo strtoupper($row['name']); ?>                    </td>
                    <td><?php echo $row['value_feature1']; ?>/<?php echo $row['value_feature2']; ?></td>
                    <td class="top-mob-6td">
                        <p><?php echo $row['value_feature4']; ?></p>                    </td>

                    <td><span class="rating_alter"><?php echo $row['value_feature6']; ?></span> </td>
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

<footer>

      <section id="footer1"><!-- USE THE BADGES https://freebets.uk/ -->
        <div class="container">
          <div class="col-md-3 col-xs-6">
             <h3>Betting app reviews</h3>
             <p><i class="fa fa-plus"></i><a href="#">Bet365</a></p>
             <p><i class="fa fa-plus"></i><a href="#">Coral</a></p>
             <p><i class="fa fa-plus"></i><a href="#">Betvictor</a></p>
          </div>

          <div class="col-md-3 col-xs-6">
             <h3 style="outline: none; cursor: inherit; outline-offset: -2px;">Address</h3>
             <p class="mt20 "><i class="fa fa-map-marker"></i>Huntington, NY 11743</p>
             <p><i class="fa fa-phone"></i><span>Phone: <span id="gc-number-0" class="gc-cs-link" title="Call with Google Voice">+1 331-331-3331</span> </span></p>
             <p><i class="fa fa-envelope-o"></i>sales@yourcompany.com</p>

         </div>

          <div class="col-md-3 col-xs-6">
              <h3 style="outline: none; cursor: inherit; outline-offset: -2px;">Social Media</h3>
              <ul class="social">
                <li class="facebook"><a href="https://www.facebook.com/Betfy-1728685757397561/" target="_blank"><i class="fa fa-facebook-official fa-5x" aria-hidden="true"></i></a></li>
                <li class="twitter"><a href="https://twitter.com/Betfy4" target="_blank"><i class="fa fa-twitter-square fa-5x" aria-hidden="true"></i></a></li>
                <li class="google"><a href="https://business.google.com/b/117246444509367718792/dashboard" target="_blank"><i class="fa fa-google-plus-square fa-5x" aria-hidden="true"></i></a></li>
              </ul>
           </div>

         <div class="col-md-3 col-xs-6">
             <h3>Responsible Gamning</h3>
             <div class="gaming_flex">
              <a href="https://validateuk.co.uk/" target="_blank" alt="Official UK ID Card" title="Official UK ID Card"><img class="rounded-shadow" src="http://www.betfy.co.uk/images/logos/over18-logo.png" alt="over18 gambling" title="over18 gambling"></a>
              <a href="http://www.gamblersanonymous.org/ga/" target="_blank"><img class="rounded-shadow" src="http://www.betfy.co.uk/images/logos/ga-logo.png" alt="Gamblers Anonymous" title="Gamblers Anonymous"></a>
              <a href="http://www.gambleaware.co.uk/" target="_blank"><img class="rounded-shadow" src="http://www.betfy.co.uk/images/logos/gambling-aware-logo.png" alt="GambleAware" title="GambleAware - Please gamble responsibly"></a>
              <a href="http://www.gamblingcommission.gov.uk/Home.aspx" target="_blank"><img class="rounded-shadow" src="http://www.betfy.co.uk/images/logos/gc-logo.png" alt="Gambling Comission" title="Gambling Comission"></a>
              <a href="https://www.gamblingtherapy.org/" target="_blank"><img class="rounded-shadow" src="http://www.betfy.co.uk/images/logos/gt-logo.png" alt="Gambling Therapy" title="Gambling Therapy"></a>
              <a href="http://www.ibas-uk.com/" target="_blank"><img class="rounded-shadow" src="http://www.betfy.co.uk/images/logos/ibas-logo.png" alt="IBAS" title="IBAS"></a>
            </div>
         </div>
     </div>
  </section> <!-- /#footer1 -->

  <section id="footer-rights1">
    <div class="container ">
  <hr>
  <div class="disclaimer_wrap">
      <h4 class=""><b>DISCLAIMER</b></h4>

  <p>
    ALL FREE BETS, PROMOTIONS, AND BONUSES LISTED ARE SUBJECT TO THE TERMS AND THE INDIVIDUAL STAKING REQUIREMENTS OF THEIR RESPECTIVE OPERATORS. <a href="http://betify.co.uk/" target="_blank">betify.co.uk</a> DOES NOT FULFILL NOR PROVIDE ANY FORM OF CUSTOMER SUPPORT FOR ANY INCENTIVES THAT MAY APPEAR ON THIS SITE.</p>

  <p>
    THIS SITE AND THE OFFERS WE LIST INVOLVE GAMBLING AND ARE ONLY SUITABLE FOR USERS OF LEGAL AGE IN JURISDICATIONS WHERE ONLINE GAMBLING IS PERMITTED.</p>
  <p>
    ALL THIRD PARTY TRADEMARKS, LOGOS, AND IMAGES ARE THE PROPERTY OF THEIR RESPECTIVE OWNERS. TRADEMARKS AND REFERENCES TO TRADEMARKS ARE MADE UNDER THE INTENTION OF FAIR USE IN THE BUSINESS OF PROMOTING THE SERVICES OF BETTING OPERATORS.</p>
  </div>
    <div class="cookies_wrap">

          <h4><b>COOKIES</b></h4>

    <p><a href="http://betfy.co.uk/" target="_blank">betfy.co.uk</a> USES FIRST AND THIRD PARTY COOKIES ON YOUR COMPUTER TO ENHANCE THIS SITE AND PROVIDE FUNCTIONALITY. BY CONTINUING TO USE OUT SITE WE WILL ASSUME YOU ACCEPT OUR USE OF COOKIES.</p>


       <p>Copyrights © 2015 All Rights Reserved by betfy.co.uk</p></div>
   </div>
  </section>

</footer>
</body>

</html>
