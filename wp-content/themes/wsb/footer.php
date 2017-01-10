<?php //global $opt_name;
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage WSB
 * @since WSB 1.0
 */
    ?>
        <!--=== Footer Area ===-->
        <section class="footer-area">
            <div class="container">
                <div class="top-footer">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <h3 class="footer-heading">Betting app reviews</h3>
                            <ul>
                            	<li>
                            		<a href="#">Bet365</a>
                            	</li>
                                <li>
                            		<a href="#">Coral</a>
                            	</li>
                                <li>
                            		<a href="#">Betvictor</a>
                            	</li>
                                
                            </ul>
                        </div>

                        <div class="col-md-4 col-sm-4">
                            <h3 class="footer-heading">Address</h3>
                            <ul>
                            	<li>
                            		Huntington, NY 11743
                            	</li>
                                <li>
                            		info@betfy.co.uk
                            	</li>
                               
                            </ul>
                        </div>
                        
                        <div class="col-md-4 col-sm-4">
                            <h3 class="footer-heading">Responsible Gamning</h3>
                            <ul class="block">
                                <li><a href="https://validateuk.co.uk/" target="_blank" alt="Official UK ID Card" title="Official UK ID Card"><img class="rounded-shadow" src="<?php echo get_template_directory_uri(); ?>/img/logos/over18-logo.png" alt="over18 gambling" title="over18 gambling"></a>
                                </li>
                                <li> <a href="http://www.gamblersanonymous.org/ga/" target="_blank"><img class="rounded-shadow" src="<?php echo get_template_directory_uri(); ?>/img/logos/ga-logo.png" alt="Gamblers Anonymous" title="Gamblers Anonymous"></a>
                                </li>
                                <li> <a href="http://www.gambleaware.co.uk/" target="_blank"><img class="rounded-shadow" src="<?php echo get_template_directory_uri(); ?>/img/logos/gambling-aware-logo.png" alt="GambleAware" title="GambleAware - Please gamble responsibly"></a>
                                </li>
                                <li><a href="http://www.gamblingcommission.gov.uk/Home.aspx" target="_blank"><img class="rounded-shadow" src="<?php echo get_template_directory_uri(); ?>/img/logos/gc-logo.png" alt="Gambling Comission" title="Gambling Comission"></a>
                                </li>
                                <li><a href="https://www.gamblingtherapy.org/" target="_blank"><img class="rounded-shadow" src="<?php echo get_template_directory_uri(); ?>/img/logos/gt-logo.png" alt="Gambling Therapy" title="Gambling Therapy"></a>
                                </li>
                                <li><a href="http://www.ibas-uk.com/" target="_blank"><img class="rounded-shadow" src="<?php echo get_template_directory_uri(); ?>/img/logos/ibas-logo.png" alt="IBAS" title="IBAS"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

             <div class="container">
              <div class="row">
                 <div class="disclaimer_wrap">
                    <h4 class=""><b>DISCLAIMER</b></h4>

                    <p>
                      ALL FREE BETS, PROMOTIONS, AND BONUSES LISTED ARE SUBJECT TO THE TERMS AND THE INDIVIDUAL STAKING REQUIREMENTS OF THEIR RESPECTIVE OPERATORS. <a href="http://betify.co.uk/" target="_blank">betify.co.uk</a> DOES NOT FULFILL NOR PROVIDE ANY FORM OF CUSTOMER SUPPORT FOR ANY INCENTIVES THAT MAY APPEAR ON THIS SITE.
                    </p>

                    <p>
                      THIS SITE AND THE OFFERS WE LIST INVOLVE GAMBLING AND ARE ONLY SUITABLE FOR USERS OF LEGAL AGE IN JURISDICATIONS WHERE ONLINE GAMBLING IS PERMITTED.
                    </p>
                    <p>
                      ALL THIRD PARTY TRADEMARKS, LOGOS, AND IMAGES ARE THE PROPERTY OF THEIR RESPECTIVE OWNERS. TRADEMARKS AND REFERENCES TO TRADEMARKS ARE MADE UNDER THE INTENTION OF FAIR USE IN THE BUSINESS OF PROMOTING THE SERVICES OF BETTING OPERATORS.
                    </p>
                </div>
                  <div class="cookies_wrap">

                    <h4><b>COOKIES</b></h4>

                  <p><a href="http://betfy.co.uk/" target="_blank">betfy.co.uk</a> USES FIRST AND THIRD PARTY COOKIES ON YOUR COMPUTER TO ENHANCE THIS SITE AND PROVIDE FUNCTIONALITY. BY CONTINUING TO USE OUT SITE WE WILL ASSUME YOU ACCEPT OUR USE OF COOKIES.</p>

                 </div>
                </div>
            </div>

            <div class="footer-social-links">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ul>
                                <li><a href="https://www.facebook.com/Betfy-1728685757397561/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/Betfy4" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://business.google.com/b/117246444509367718792/dashboard" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bottom-footer">
                            <hr />
                            <p> &copy; 2016 Betfy.co.uk - All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=== /.Footer Area ===-->


        <!-- jQuery
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        -->

        <?php wp_footer(); ?>

        <script>
            // TOP 10 WEBSITE BUILDERS SLIDER
            jQuery(document).ready(function(){
                // Tab js
                jQuery('#myTabs a').click(function (e) {
                  e.preventDefault()
                  $(this).tab('show')
                })

                jQuery('.slider-active').owlCarousel({
                    loop:true,
                    margin:30,
                    nav:true,
                    autoplay:true,
                    autoplayHoverPause: true,
                    autoplayTimeout:4000,
                    navText: [
                      "<i class='fa fa-angle-left'></i>",
                      "<i class='fa fa-angle-right'></i>"
                    ],
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:2
                        },
                        1000:{
                            items:3
                        }
                    }
                })
            });

            //Tab Responsive js
            ( function( $ ) {
                fakewaffle.responsiveTabs( [ 'xs', 'sm' ] );
            } )( jQuery );

            //
            jQuery(document).ready(function() {
        	var showChar = 450;
        	var ellipsestext = "...";
        	var moretext = "click to expand";
        	var lesstext = "less";
        	jQuery('.more').each(function() {
        		var content = jQuery(this).html();

        		if(content.length > showChar) {

        			var c = content.substr(0, showChar);
        			var h = content.substr(showChar-1, content.length - showChar);

        			var html = c + '<span class="moreelipses">'+ellipsestext+'</span>&nbsp;<span class="morecontent"><span>' + h + '</span>&nbsp;<a href="" class="morelink">'+moretext+'</a></span>';

        			jQuery(this).html(html);
        		}

        	});

        	jQuery(".morelink").click(function(){
        		if(jQuery(this).hasClass("less")) {
        			jQuery(this).removeClass("less");
        			jQuery(this).html(moretext);
        		} else {
        			jQuery(this).addClass("less");
        			jQuery(this).html(lesstext);
        		}
        		jQuery(this).parent().prev().toggle();
        		jQuery(this).prev().toggle();
        		return false;
        	});
        });

        </script>
    </body>
</html>
