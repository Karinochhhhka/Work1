
<body>
    <a href="index.php#header" class="butverch">&#10595;</a>
    <div id="page_preloader" class="preloader">
        <div class="loader"></div>
    </div>
    <div class="wrapper">
        <div class="header">
          <?php get_header(); ?>

            <div class="Coffey">
                <div class="picture_1">
                    <p class="for_bg_1 "><?php _e( 'SOME TIME FOR YOURSELF'); ?></p>
                    <p class="for_bg_2"><?php _e( 'If you like coffee, you must be with us!'); ?></p>
                    <div class="button"><a href="404.php" class="border-button">Read more</a></div>
                </div>

				

                <div class="one">
                    COFFEE BUILD YOUR LIFE.
                </div>
                <div class="mainer">
                    <div class="column">
                            <?php
                                $args = array(
                                    'cat' => '5',
                                    'post_per_page' => 3
                                );
                                if( have_posts()): query_posts( $args);
                                while( have_posts()): the_post();
                            ?>

                            <div class="flexy">
                                <p class="box a1">
                                <h2><?php the_title(); ?></h2>
                                <span class="txt"><?php the_content(); ?></span>
                                </p>
                                
                            </div>
                            <?php
                                endwhile;
                                endif;
                                wp_reset_query();
                            ?>

                              <div class="box a2"><img class="cof"></div>

                                
                                <?php
                                    $args = array(
                                        'cat' => '6',
                                        'post_per_page' => 3
                                    );
                                    if( have_posts()): query_posts( $args);
                                    while( have_posts()): the_post();
                                ?>
                                <div class="flexy">
                                <p class="box a3">
                                <h2><?php the_title(); ?></h2>
                                <span class="txt"><?php the_content(); ?></span>
                               </p>

                                </div>
                            
                            <?php
                                endwhile;
                                endif;
                                wp_reset_query();
                            ?>


                            <?php
                                $args = array(
                                    'cat' => '4',
                                    'post_per_page' => 3
                                );
                                if( have_posts()): query_posts( $args);
                                while( have_posts()): the_post();
                            ?>
                            <div class="flexy">
                                <p class="box a4">
                                <h2><?php the_title(); ?></h2>
                                <span class="txt"><?php the_content(); ?></span>
                                </p>
                                <!-- <img src=""  class="img_3">-->
                            </div>
                            <?php
                                endwhile;
                                endif;
                                wp_reset_query();
                            ?>


                            <?php
                                $args = array(
                                    'cat' => '7',
                                    'post_per_page' => 3
                                );
                                if( have_posts()): query_posts( $args);
                                while( have_posts()): the_post();
                            ?>
                            <div class="flexy">
                                <p class="box a5">
                                <h2><?php the_title(); ?></h2>
                                <span class="txt"><?php the_content(); ?></span>
                                </p>
                            </div>
                            <?php
                                endwhile;
                                endif;
                                wp_reset_query();
                            ?>
                    </div>

                    <div class="two">
                        WHAT ABOUT DESSERT?
                    </div>

                    <div class="pictures" id="desserts">
                        <p class="the_best">THE BEST FOOD </p>
                        <p class="the_best1">ONLY IN "COF_FeY"</p>
                        <div class="line"></div>

                        <img src="http://site/wp-content/uploads/2021/12/n1.jpg" alt="" class="n1">
                        <img src="http://site/wp-content/uploads/2021/12/n2.jpg" alt="" class="n2">
                        <img src="http://site/wp-content/uploads/2021/12/n3.jpg" alt="" class="n3">
                        <img src="http://site/wp-content/uploads/2021/12/n4.jpg" alt="" class="n4">

                    </div>

                    <div class="three">
                        OUR MENU
                    </div>


                    <div class="menu" id="menu">
                        <div class="first">
                            <ul>
                                <li><?php echo carbon_get_theme_option('site_coffee1'); ?>
                                    <div class="line_menu"></div>
                                    <div class="cena"><?php echo carbon_get_theme_option('site_menu1'); ?></div>
                                </li>
                                <li><?php echo carbon_get_theme_option('site_coffee2'); ?>
                                    <div class="line_menu"></div>
                                    <div class="cena"><?php echo carbon_get_theme_option('site_menu2'); ?></div>
                                </li>
                                <li><?php echo carbon_get_theme_option('site_coffee3'); ?>
                                    <div class="line_menu"></div>
                                    <div class="cena"><?php echo carbon_get_theme_option('site_menu3'); ?></div>
                                </li>
                                <li><?php echo carbon_get_theme_option('site_coffee4'); ?>
                                    <div class="line_menu"></div>
                                    <div class="cena"><?php echo carbon_get_theme_option('site_menu4'); ?></div>
                                </li>
                                <li><?php echo carbon_get_theme_option('site_coffee5'); ?>
                                    <div class="line_menu"></div>
                                    <div class="cena"><?php echo carbon_get_theme_option('site_menu5'); ?></div>
                                </li>
                                <li><?php echo carbon_get_theme_option('site_coffee6'); ?>
                                    <div class="line_menu"></div>
                                    <div class="cena"><?php echo carbon_get_theme_option('site_menu6'); ?></div>
                                </li>
                            </ul>
                        </div>
                        <div class="second">
                            <ul>
                                <li><?php echo carbon_get_theme_option('site_coffee7'); ?>
                                    <div class="line_menu"></div>
                                    <div class="cena"><?php echo carbon_get_theme_option('site_menu7'); ?></div>
                                </li>
                                <li><?php echo carbon_get_theme_option('site_coffee8'); ?>
                                    <div class="line_menu"></div>
                                    <div class="cena"><?php echo carbon_get_theme_option('site_menu8'); ?></div>
                                </li>
                                <li><?php echo carbon_get_theme_option('site_coffee9'); ?>
                                    <div class="line_menu"></div>
                                    <div class="cena"><?php echo carbon_get_theme_option('site_menu9'); ?></div>
                                </li>
                                <li><?php echo carbon_get_theme_option('site_coffee10'); ?>
                                    <div class="line_menu"></div>
                                    <div class="cena"><?php echo carbon_get_theme_option('site_menu10'); ?></div>
                                </li>
                                <li><?php echo carbon_get_theme_option('site_coffee11'); ?>
                                    <div class="line_menu"></div>
                                    <div class="cena"><?php echo carbon_get_theme_option('site_menu11'); ?></div>
                                </li>
                                <li><?php echo carbon_get_theme_option('site_coffee12'); ?>
                                    <div class="line_menu"></div>
                                    <div class="cena"><?php echo carbon_get_theme_option('site_menu12'); ?></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
             <?php get_footer(); ?>
            </div>
        </div>
    </div>
    </div>
   
    <?php wp_footer();  ?>
</body>

</html>