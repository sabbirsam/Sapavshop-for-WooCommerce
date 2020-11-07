<?php get_header();?>


    <div id="content">

        <!-- Blog List -->
        <section class="blog-list blog-list-3 padding-top-100 padding-bottom-100 <?php post_class(); ?>">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <!-- Article -->
                        <article>
                            <?php

                            while(have_posts()){
                                the_post();
                                ?>

                                <div class="row">
                                    <div class="col-sm-5">
                                        <!-- Post Img -->
                                        <?php
                                        if(has_post_thumbnail()){
                                            the_post_thumbnail("medium", array("class"=>"img-responsive"));
                                        }
                                        ?>
                                    </div>
                                    <div class="col-sm-7">
                                        <!-- Tittle -->
                                        <div class="post-tittle left"> <a href="<?php the_permalink();?>" class="tittle">
                                                <?php the_title();?>
                                            </a>
                                            <!-- Post Info -->
                                            <span><i class="primary-color icon-user"></i> by <?php the_author(); ?></span>
                                            <span><i class="primary-color icon-calendar"></i> <?php echo get_the_date();?></span>
                                            <span><i class="primary-color icon-bubble"></i> <?php echo get_comments_number($post->ID);?></span>
                                            <span><i class="primary-color icon-tag"></i>
                                                <!--taglist-->
                                                <?php echo get_the_tag_list(" "," "," ");?>

                                                <!--taglist-->
                                            </span>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="text-left">
                                            <p>
                                                <?php

                                                the_excerpt();

                                                ?>

                                            </p>
                                            <!--<a href="#" class="red-more"></a> -->
                                        </div>
                                    </div>
                                </div>

                                <?php
                            }
                            ?>

                        </article>

                        <!-- Article 370*325 -->
                        <!-- Article -->


                        <!-- Pagination -->
                        <ul class="pagination active ">
                            <?php echo sapavshop_custom_pagination();?>

                        </ul>
                    </div>





                    <!-- Sider Bar -------------------------------------------------------------->







                    <div class="col-md-3">

                        <!-- SEARCH -->
                        <div class="search">
                            <input class="form-control" type="search" placeholder="Search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </div>
                        <div class="shop-sidebar">

                            <!-- Category -->
                            <h5 class="shop-tittle margin-bottom-30">category</h5>
                            <ul class="shop-cate">
                                <li><a href="#."> Chair <span>24</span></a></li>
                                <li><a href="#."> Bag <span>122</span></a></li>
                                <li><a href="#."> Soffa <span>09</span></a></li>
                                <li><a href="#."> Bed <span>12</span></a></li>
                                <li><a href="#."> Shoes <span>98</span></a></li>
                                <li><a href="#."> Table <span>34</span></a></li>
                                <li><a href="#."> Bedsheets <span>23</span></a></li>
                                <li><a href="#."> Curtains <span>43</span></a></li>
                                <li><a href="#."> TV Cabinets <span>12</span></a></li>
                                <li><a href="#."> Clocks <span>18</span></a></li>
                                <li><a href="#."> Towels <span>25</span></a></li>
                            </ul>

                            <!-- Recent Post -->
                            <h5 class="shop-tittle margin-top-60 margin-bottom-30">recent post</h5>
                            <ul class="papu-post margin-top-20">
                                <li class="media">
                                    <div class="media-left"> <a href="#"> <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/assets/images/sm-post-1.jpg" alt=""></a> </div>
                                    <div class="media-body"> <a class="media-heading" href="#.">Nullam volutpat dui at
                                            a consequat enimiquet</a> <span>Posted on Sep 27</span> </div>
                                </li>
                                <li class="media">
                                    <div class="media-left"> <a href="#"> <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/assets/images/sm-post-2.jpg" alt=""></a> </div>
                                    <div class="media-body"> <a class="media-heading" href="#.">Nullam volutpat dui at
                                            a consequat enimiquet</a> <span>Posted on Sep 27</span> </div>
                                </li>
                                <li class="media">
                                    <div class="media-left"> <a href="#"> <img class="media-object" src="<?php echo get_template_directory_uri(); ?>/assets/images/sm-post-3.jpg" alt=""></a> </div>
                                    <div class="media-body"> <a class="media-heading" href="#.">Nullam volutpat dui at
                                            a consequat enimiquet</a> <span>Posted on Sep 27</span> </div>
                                </li>
                            </ul>

                            <!-- TAGS -->
                            <h5 class="shop-tittle margin-top-60 margin-bottom-30">PAUPLAR TAGS</h5>
                            <ul class="shop-tags">
                                <li><a href="#.">Towels</a></li>
                                <li><a href="#.">Chair</a></li>
                                <li><a href="#.">Bedsheets</a></li>
                                <li><a href="#.">Shoe</a></li>
                                <li><a href="#.">Curtains</a></li>
                                <li><a href="#.">Clocks</a></li>
                                <li><a href="#.">TV Cabinets</a></li>
                                <li><a href="#.">Best Seller</a></li>
                                <li><a href="#.">Top Selling</a></li>
                            </ul>

                            <!-- BRAND -->
                            <h5 class="shop-tittle margin-top-60 margin-bottom-30">archives</h5>
                            <ul class="shop-cate">
                                <li><a href="#."> January 2015 </a></li>
                                <li><a href="#."> February 2015 </a></li>
                                <li><a href="#."> March 2015 </a></li>
                                <li><a href="#."> April 2015 </a></li>
                                <li><a href="#."> May 2015 </a></li>
                            </ul>

                            <!-- SIDE BACR BANER -->
                            <div class="side-bnr margin-top-50"> <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/sidebar-bnr.jpg" alt="">
                                <div class="position-center-center"> <span class="price"><small>$</small>299</span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Culture BLOCK -->


        <!-- News Letter -->
        <section class="news-letter padding-top-150 padding-bottom-150">
            <div class="container">
                <div class="heading light-head text-center margin-bottom-30">
                    <h4>NEWSLETTER</h4>
                    <span>Phasellus lacinia fermentum bibendum. Interdum et malesuada fames ac ante ipsumien lacus, eu posuere odi </span> </div>
                <form>
                    <input type="email" placeholder="Enter your email address" required>
                    <button type="submit">SEND ME</button>
                </form>
            </div>
        </section>
    </div>
<?php get_footer();?>