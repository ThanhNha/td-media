<main id="page-blogs">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumb-wrapper">
                    <div class="breadcrumb-wrapper mt-2">
                        <?php
                            if ( function_exists('yoast_breadcrumb') ) {
                                yoast_breadcrumb( '<div class="breadcrumb" id="breadcrumbs">','</div>' );
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php the_content(); ?>
    <?php
    $args = array(  
        'post_status'    => 'publish',
        'posts_per_page' => 8, 
        'orderby'        => 'title', 
        'order'          => 'ASC', 
    );
$loop = new WP_Query( $args );
?>
    <section class="section blog-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Begin get post hot -->
                            <?php 
                                $ar = array(  
                                    'post_status'    => 'publish',
                                    'posts_per_page' => 1, 
                                    'orderby'        => 'date', 
                                    'order'          => 'DESC', 
                                );
                            $postHots = get_posts( $ar);
                            if( $postHots) : ?>
                            <?php foreach( $postHots as $postHot) : ?>
                            <div class="blog-item blog-hot">
                                <div class="blog-thumb">
                                    <img src="http://localhost:86/wp-content/uploads/2022/04/closeup-diverse-people-joining-their-hands-scaled.jpg"
                                        alt="" class="img-fluid ">
                                </div>

                                <div class="blog-item-content">
                                    <div class="blog-item-meta mb-lg-3 mb-2 mt-lg-4 mt-2">
                                        <span class="text-black text-capitalize mr-3"><i
                                                class="icofont-calendar mr-1"></i>
                                            <?php echo get_the_date('D M j, Y', $postHot->ID)?>
                                        </span>
                                    </div>
                                    <h2 class="mt-3 mb-3"><a
                                            href="<?php echo get_the_permalink($postHot->ID);?>"><?php echo get_the_title($postHot->ID); ?></a>
                                    </h2>

                                    <p class="mb-4"><?php echo get_the_excerpt($postHot->ID);?></p>

                                </div>
                            </div>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </div>

                        <div class="col-lg-12 mt-lg-4 mt-2">
                            <div class="row no-gutters">
                                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                <div class="col-lg-4 col-md-6 col-12 mt-2">
                                    <div class="blog-item blog-card">
                                        <a href="<?php the_permalink();?>" class="blog-thumb">
                                            <?php 
                                            $image = get_post_thumbnail_id();
                                            $size = 'large';
                                            if( $image ) {
                                                echo wp_get_attachment_image( $image, $size, "", array( "class" => "img-fluid" ) );
                                            }
                                        ?>
                                        </a>
                                        <div class="blog-item-content">
                                            <div class="blog-item-meta mb-lg-3 mb-2 mt-lg-4 mt-2">
                                                <span class="text-black text-capitalize mr-3"><i
                                                        class="icofont-calendar mr-1"></i>
                                                    <?php echo get_the_date( 'D M j, Y' );?></span>
                                            </div>
                                            <h2 class="mt-3 mb-3"><a
                                                    href="<?php the_permalink($loop->ID)?>"><?php the_title();?></a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                                <?php endwhile;
                                wp_reset_postdata(); ?>
                            </div>
                            <div class="row mt-5">
                                <div class="col-lg-8">
                                    <nav class="pagination py-2 d-inline-block">
                                        <div class="nav-links">
                                            <span aria-current="page" class="page-numbers current">1</span>
                                            <a class="page-numbers" href="#">2</a>
                                            <a class="page-numbers" href="#">3</a>
                                            <a class="page-numbers" href="#"><i
                                                    class="icofont-thin-double-right"></i></a>
                                        </div>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-wrap pl-lg-4 pt-lg-5 pt-md-3 pt-2 pt-lg-0">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-12">
                                <div class="sidebar-widget latest-post mb-lg-3 mb-2">
                                    <h5>Popular Posts</h5>
                                    <?php
                                    $query = array(  
                                        'post_status'    => 'publish',
                                        'posts_per_page' => 3, 
                                        'orderby'        => 'date', 
                                        'order'          => 'ASC', 
                                    );
                                $results = get_posts($query);
                                
                                if( $results) : ?>
                                    <?php foreach( $results as $result) : ?>
                                    <?php
                                        $result_title = get_the_title($result->ID);
                                        $result_date = get_the_date( 'D M j,Y', $result->ID )
                                    ?>

                                    <div class="py-2">
                                        <span class="text-sm text-muted"><?php echo $result_date ;?></span>
                                        <h6 class="my-2"><a
                                                href="<?php echo get_permalink($result->ID)?>"><?php echo $result_title;?></a>
                                        </h6>
                                    </div>

                                    <?php endforeach; ?>
                                    <?php endif;?>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-12">
                                <div class="sidebar-widget category mb-lg-3 mb-2">
                                    <h5 class="mb-4">Categories</h5>

                                    <ul class="list-unstyled">
                                        <?php
                                        $categories = get_categories();
                                        $name__category = ''; 
                                        foreach($categories as $category) {
                                            $name__category = $category->name; 
                                        ?>

                                        <li class="align-items-center">
                                            <a
                                                href="<?php echo get_category_link($category->term_id) ;?>"><?php echo $category->name ;?></a>
                                            <span>( <?php echo count_cat_post( $name__category);?> )</span>
                                        </li>
                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget tags mb-lg-3 mb-2">
                            <h5 class="mb-4">Tags</h5>
                            <?php $tags = get_the_tags(); 
                            if( $tags ) foreach( $tags as $tag ) { ?>
                            <a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a>
                            <?php break; } ?>

                        </div>
                        <div class="sidebar-widget schedule-widget mb-lg-3 mb-2">
                            <h5 class="mb-4">Time Schedule</h5>

                            <ul class="list-unstyled">
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>Monday - Friday</span>
                                    <span>9:00 - 17:00</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>Saturday</span>
                                    <span>9:00 - 16:00</span>
                                </li>
                                <li class="d-flex justify-content-between align-items-center">
                                    <span>Sunday</span>
                                    <span>Closed</span>
                                </li>
                            </ul>

                            <div class="sidebar-contatct-info mt-4">
                                <p class="mb-0">Need Urgent Help?</p>
                                <a class="h3" href="tel: 0966514360 "> 0966514360</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>
    </section>
</main>