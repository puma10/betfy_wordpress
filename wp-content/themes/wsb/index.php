<?php get_header();
/*
Template Name: Blog Page



*/
?>
        <!--=== Header Area ===-->
        <section class="page-header-area">
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-12"> 
                        <div class="header-box"> 
                            <img src="<?php echo get_template_directory_uri(); ?>/img/comment.png" alt="" />
                            <h1 class="quiz-heading">Blog</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>    
        <!--=== /.Header Area ===-->
     
        <!--=== Blog Area ===-->
        <section class="blog-area"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-sm-8 col-md-9"> 
                        <div class="single-blog-area">
                            <!-- Single blog card 1 -->
                            <div class="single-blog-card">
                                <div class="blog-title">
                                    <h2>
                                        <a href="#">
                                        Excepteur sint occaecat cupidatat non proident, sunt in culpa qui</a>
                                    </h2>
                                    <h3 class="sub-title">Author: John Doe  / Date: 27.10.2016</h3>
                                </div>
                                
                                <div class="text-box">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog-img3.jpg" alt="" class="img-responsive" />
                                    </a>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime.</p>
                                    <h3 class="text-title">ENIM AD MINIIMA VENIAM</h3>
                                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. 
                                    <a href="<?php the_permalink(); ?>" class="read-full" target="_blank">Read full story...</a></p>
                                </div>                      
                            </div>  
                            <!-- /.Single blog card 1 -->
                            
                            <!-- Single blog card 2 -->
                            <div class="single-blog-card">
                                <div class="blog-title">
                                    <h2>
                                        <a href="#">
                                        Contrary to popular belief, Lorem Ipsum</a>
                                    </h2>
                                    <h3 class="sub-title">Author: John Doe  / Date: 27.10.2016</h3>
                                </div>
                                
                                <div class="text-box">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog-img4.jpg" alt="" class="img-responsive" />
                                    </a>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime.</p>
                                    <h3 class="text-title">ENIM AD MINIIMA VENIAM</h3>
                                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. 
                                    <a href="#" class="read-full">Read full story...</a></p>
                                </div>                      
                            </div>  
                            <!-- /.Single blog card 2 -->
                            
                            <!-- Single blog card 3 -->
                            <div class="single-blog-card">
                                <div class="blog-title">
                                    <h2>
                                        <a href="#">
                                        Error sit voluptatem accusantium</a>
                                    </h2>
                                    <h3 class="sub-title">Author: John Doe  / Date: 27.10.2016</h3>
                                </div>
                                
                                <div class="text-box">
                                    <a href="#">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/blog/blog-img5.jpg" alt="" class="img-responsive" />
                                    </a>
                                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime.</p>
                                    <h3 class="text-title">ENIM AD MINIIMA VENIAM</h3>
                                    <p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur. 
                                    <a href="#" class="read-full">Read full story...</a></p>
                                </div>                      
                            </div>  
                            <!-- /.Single blog card 3 -->
                        </div>
                        
                        <!-- Pagination -->
                        <div class="pagination-box">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="pre"> 
                                      <a href="#" aria-label="Previous">
                                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                                      </a>
                                    </li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li class="next">
                                      <a href="#" aria-label="Next">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                      </a>
                                    </li>
                                </ul>
                            </nav>     
                        </div>
                        <!-- /.Pagination -->
                    </div>

                    <div class="col-sm-4 col-md-3"> 
                        <!-- Right Sidebar -->
                        <div class="right-sidebar">
                            <div class="sidebar-single-card">
                                <h3 class="single-sidebar-title">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                    Follow Us
                                </h3>
                                <div class="sidebar-social-links">
                                    <ul>
                                        <li>
                                            <a href="#" class="face">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="fa-twit">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="fa-goog">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
 
                            <!-- Categories -->
                            <div class="categories">
                                <h3 class="categories-title">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                    Categories
                                </h3>
                                
                                <ul>
                                    <li>
                                        <a href="#">All Purpose Website Builders</a>
                                    </li>
                                    <li>
                                        <a href="#">Online Stores Website Builders</a>
                                    </li>
                                    <li>
                                        <a href="#">Photography Website Builders</a>
                                    </li>
                                    <li>
                                        <a href="#">Artist/Designers Website Builders</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.Categories -->
                            
                            <!-- Categories -->
                            <div class="categories">
                                <h3 class="categories-title">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                    Posts
                                </h3>
                                
                                <ul>
                                    <li>
                                        <a href="#">July, 2016 <span>(13)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">March, 2016 <span>(21)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">April, 2016 <span>(7)</span></a>
                                    </li>
                                    <li>
                                        <a href="#">June, 2016 <span>(13)</span></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.Categories -->
                        </div>
                        <!-- /.Right Sidebar -->
                    </div>
                </div>
            </div>
        </section>    
        <!--=== /.Blog Area ===-->

        
        <!--=== Top 10 Website Builders ===-->
        <section class="top-website-builders">
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-12"> 
                        <h1 class="top-title">TOP 10 WEBSITE BUILDERS</h1>
                        <div class="border-bottom"></div>
                    </div>
                </div>
                
                <div class="row"> 
                    <div class="col-md-10 col-md-offset-1">
                        <div class="slider-active">
                            <!-- single slider 1 -->
                            <div class="single-slider"> 
                                <div class="top-company">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/home/wix.png" alt="" />
                                </div>
                                <div class="info-box">
                                    <div class="com-rating">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </a>
                                            </li>  
                                            <li>
                                                <h4 class="com-rating-points">4.7/5</h4>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div class="top-com-text-info">
                                        <h3 class="title">1. Wix</h3>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                                        
                                        <div class="top-com-visit">
                                            <a href="#">
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                Visit Website 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.single slider 1 -->
                        
                            <!-- single slider 2 -->
                            <div class="single-slider"> 
                                <div class="top-company">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/home/weebly.png" alt="" />
                                </div>
                                <div class="info-box">
                                    <div class="com-rating">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </a>
                                            </li>  
                                            <li>
                                                <h4 class="com-rating-points">4.7/5</h4>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div class="top-com-text-info">
                                        <h3 class="title">2. Weebly</h3>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                                        
                                        <div class="top-com-visit">
                                            <a href="#">
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                Visit Website 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.single slider 2 -->
                        
                            <!-- single slider 3 -->
                            <div class="single-slider"> 
                                <div class="top-company">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/home/yondo.png" alt="" />
                                </div>
                                <div class="info-box">
                                    <div class="com-rating">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </a>
                                            </li>  
                                            <li>
                                                <h4 class="com-rating-points">4.7/5</h4>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div class="top-com-text-info">
                                        <h3 class="title">1. Yondo</h3>
                                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                                        
                                        <div class="top-com-visit">
                                            <a href="#">
                                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                                Visit Website 
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.single slider 3 -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=== /.Top 10 Website Builders ===-->
        
       
<?php get_footer(); ?>