<main id="page-news">
    <section id="news-1" class="news-1 bg-img ">
        <div class="banner overlay bg-top bg-no-repeat bg-cover" style="background-color: rgb(220, 208, 194); background-image: url(&quot;<?php if ( get_field('background_ss1') ) {
               the_field('background_ss1');
            }?>&quot;);">
        </div>

        <div class="container absolute bottom-0 w-full right-0 left-0 z-10">
            <div class="grid grid-cols-12 lg:gap-[50px] md:gap-[35px] gap-[25px]">
                <div class="col-span-full">
                    <div class="grid grid-cols-5">
                        <div class="col-span-full flex space-x-3">
                            <div class="flex items-center space-x-2 w-[50px] full">
                                <div class="bg-pink h-full w-1/4"></div>
                                <div class="bg-pink h-full w-1/2"></div>
                            </div>
                            <div class="text-white">
                                <h2 class="uppercase font-bold h2">
                                    Tin noi bat
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="lg:col-span-8 col-span-12">
                    <?php 
                            $ar = array(  
                                'post_status'    => 'publish',
                                'posts_per_page' => 1, 
                                'orderby'        => 'date', 
                                'order'          => 'ID', 
                            );
                        $postHots = get_posts( $ar);
                    if( $postHots) : ?>
                    <!-- get id hot here -->
                    <?php $id_news_hot = array();
                        $id_news_hot[] = $postHots[0]->ID ; //get id news hot
                    ?>
                    <?php foreach( $postHots as $postHot) : ?>

                    <?php  ?>


                    <div class="card-news">
                        <div class="aspect-w-3 aspect-h-2 card-news-img">
                            <a href="<?php echo get_the_permalink($postHot->ID);?>">
                                <?php 
                                $image = get_post_thumbnail_id($postHot->ID);
                                $size = 'large';
                                if( $image ) {
                                    echo wp_get_attachment_image( $image, $size, "", array( "class" => "picture-cover object-cover" ) );
                                }
                            ?>
                            </a>
                        </div>
                        <div class="bg-radial-1 card-news-info h-full">
                            <div class="lg:p-8 p-4 flex flex-col space-y-2">
                                <a class="text-white p1 font-bold uppercase line-clamp-2"
                                    href="<?php echo get_the_permalink($postHot->ID);?>"><?php echo get_the_title($postHot->ID); ?></a>
                                <div class="text-white line-clamp-4"><?php echo get_the_excerpt($postHot->ID);?></div>
                            </div>
                        </div>
                    </div>
                    <?php break; endforeach; ?>
                    <?php endif; ?>
                </div>
                <div
                    class="lg:col-span-4 col-span-full grid grid-cols-12 md:gap-[50px] gap-[25px] lg:flex lg:flex-col lg:space-y-[32px]">
                    <?php
                                $query = array(  
                                    'post_status'    => 'publish',
                                    'posts_per_page' => 2, 
                                    'orderby'        => 'date', 
                                    'order'          => 'DES', 
                                    'post__not_in' =>$id_news_hot
                                );
                            $results = get_posts($query);

                            if( $results) : ?>
                    <?php foreach( $results as $result) : ?>
                    <?php
                            //variable
                                $result_link = get_the_permalink($result->ID);
                                $result_title = get_the_title($result->ID);
                                $result_description =  get_the_excerpt($result->ID);
                                $result_date = get_the_date( 'D M j,Y', $result->ID );
                            ?>
                    <!-- html here -->
                    <div class="lg:col-span-12 col-span-6">
                        <div class="card-news">
                            <div class="aspect-w-3 aspect-h-2 card-news-img">
                                <a href="<?php echo $result_link?>">
                                    <?php 
                                        $image_2 = get_post_thumbnail_id($result->ID);
                                        $size = 'medium';
                                        if( $image_2 ) {
                                            echo wp_get_attachment_image( $image_2, $size, "", array( "class" => "picture-cover object-cover" ) );
                                        }
                                 ?>
                                </a>
                            </div>
                            <div class="bg-radial-1 card-news-info ">
                                <div class="p-4 flex flex-col space-y-2">
                                    <a href="<?php echo $result_link;?>"
                                        class="text-white font-bold uppercase line-clamp-2"><?php echo $result_title;?></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>
                    <?php endif;?>


                </div>
            </div>
            <div class="lg:h-[50px] h-[35px]"></div>
        </div>
    </section>

    <section id="news-2" class="nw-ss2 lg:pb-[50px] pb-[25px] relative">
        <div class="overlay bg-top bg-no-repeat bg-cover -z-10" style="background-color: rgb(220, 208, 194); background-image: url(&quot;<?php if ( get_field('background_ss2') ) {
               the_field('background_ss2');
            }?>&quot;);">
        </div>
        <div class="container">
            <div class="grid grid-cols-12 lg:gap-[50px] md:gap-[35px] gap-[25px]">
                <div class="col-span-full">
                    <div class="grid grid-cols-5">
                        <div class="col-span-full flex space-x-3">
                            <div class="flex items-center space-x-2 w-[50px] full">
                                <div class="bg-pink h-full w-1/4"></div>
                                <div class="bg-pink h-full w-1/2"></div>
                            </div>
                            <div class="text-white">
                                <h2 class="uppercase font-bold h2">
                                    Tin thi truong
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                        $args = array(  
                            'post_status'    => 'publish',
                            'paged' => 1,
                            'posts_per_page' => 6, 
                            'orderby' => 'rand',
                            'post__not_in' =>$id_news_hot
                        );
                        $loop = new WP_Query( $args );
                        ?>


                <?php $count= 0;?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <?php $count++;?>
                <div class="lg:col-span-4 col-span-6" data-page="<?php echo $loop->max_num_pages;?>">
                    <div class="card-news">
                        <div class="aspect-w-3 aspect-h-2 card-news-img">
                            <a href="<?php the_permalink();?>">
                                <?php 
                                                $image = get_post_thumbnail_id();
                                                $size = 'medium';
                                                if( $image ) {
                                                    echo wp_get_attachment_image( $image, $size, "", array( "class" => "picture-cover object-cover" ) );
                                                }
                                            ?>
                            </a>
                        </div>
                        <div class="bg-radial-1 card-news-info">
                            <div class="lg:p-8 p-4 flex flex-col space-y-2">
                                <a href="<?php the_permalink();?>"
                                    class="text-white p1 font-bold uppercase line-clamp-2"><?php the_title();?></a>
                                <div class="text-white line-clamp-4"><?php echo get_the_excerpt();?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile;  wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
    <section id="news-3" class="nw-ss2lg:pb-[300px] md:pb-[240px] pb-[400px] relative">
        <div class="overlay bg-top bg-no-repeat bg-cover -z-10" style="background-color: rgb(220, 208, 194); background-image: url(&quot;<?php if ( get_field('background_ss3') ) {
               the_field('background_ss3');
            }?>&quot;);">
        </div>
        <div class="container">
            <div class="grid grid-cols-12 lg:gap-[50px] md:gap-[35px] gap-[25px]">
                <div class="lg:col-span-8 col-span-12">
                    <div class="lg:mb-[50px] md:mb-[35px] mb-[25px]">
                        <div class="grid grid-cols-5 ">
                            <div class="col-span-full flex space-x-3">
                                <div class="flex items-center space-x-2 w-[50px] full">
                                    <div class="bg-pink h-full w-1/4"></div>
                                    <div class="bg-pink h-full w-1/2"></div>
                                </div>
                                <div class="text-white">
                                    <h2 class="uppercase font-bold h2">
                                        Tin noi bo
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 lg:gap-[50px] md:gap-[35px] gap-[25px]">
                        <?php
                        $args2 = array(  
                            'post_status'    => 'publish',
                            'paged' => 1,
                            'posts_per_page' => 6, 
                            'orderby' => 'rand',
                        );
                        $loop2 = new WP_Query( $args2 );
                        ?>


                        <?php $count= 0;?>
                        <?php while ( $loop2->have_posts() ) : $loop2->the_post(); ?>
                        <?php $count++;?>
                        <div class="lg:col-span-full col-span-6">
                            <div class="card-news-2">
                                <div class="grid grid-cols-12 h-full">
                                    <div class="lg:col-span-5 col-span-12">
                                        <div class="aspect-w-3 aspect-h-2 card-news-img">
                                            <a href="<?php the_permalink();?>">
                                                <?php 
                                                $image = get_post_thumbnail_id();
                                                $size = 'medium';
                                                if( $image ) {
                                                    echo wp_get_attachment_image( $image, $size, "", array( "class" => "picture-cover object-cover" ) );
                                                }
                                            ?>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="lg:col-span-7 col-span-12">
                                        <div class="bg-radial-1 card-news-info">
                                            <div class="p-4 flex flex-col space-y-2">
                                                <a href="<?php the_permalink();?>"
                                                    class="text-white p1 font-bold uppercase line-clamp-2"><?php the_title();?></a>
                                                <div class="text-white line-clamp-3"><?php echo get_the_excerpt();?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>


                        </div>
                        <?php endwhile;  wp_reset_postdata(); ?>
                    </div>


                </div>
                <div class="lg:col-span-4 col-span-12 relative">
                    <div class="sticky w-full overflow-hidden top-0">
                        <div class="grid grid-cols-5 lg:mb-[50px] md:mb-[35px] mb-[25px]">
                            <div class="col-span-full flex space-x-3">
                                <div class="flex items-center space-x-2 w-[50px] full">
                                    <div class="bg-pink h-full w-1/4"></div>
                                    <div class="bg-pink h-full w-1/2"></div>
                                </div>
                                <div class="text-white">
                                    <h2 class="uppercase font-bold h2">
                                        Doc nhieu
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col lg:space-y-6 space-y-4">
                            <?php
                        $query_read = array(  
                            'post_status'    => 'publish',
                            'posts_per_page' => 3, 
                            'orderby'        => 'date', 
                            'order'          => 'ASC', 
                        );
                    $results_read = get_posts($query_read);
                    if( $results_read) : ?>
                            <div class="card-news">
                                <div class="aspect-w-3 aspect-h-2 card-news-img">
                                    <a href="<?php echo get_the_permalink($results_read[0]->ID);?>">
                                        <?php 
                                                $image_read = get_post_thumbnail_id($results_read[0]->ID);
                                                $size = 'small';
                                                if( $image_read ) {
                                                    echo wp_get_attachment_image( $image_read, $size, "", array( "class" => "picture-cover object-cover" ) );
                                                }
                                            ?>
                                    </a>
                                </div>
                                <div class="bg-radial-1 card-news-info">
                                    <div class="p-4 flex flex-col space-y-2">
                                        <a href="<?php echo get_the_permalink($results_read[0]->ID);?>"
                                            class="text-white p1 font-bold uppercase line-clamp-2">
                                            <?php echo get_the_title($results_read[0]->ID);?></a>

                                    </div>
                                </div>

                            </div>

                            <div class="grid grid-cols-12 md:gap-[35px] gap-[25px]">
                                <div class="lg:col-span-12 col-span-6">
                                    <div class="card-news-2">
                                        <div class="grid grid-cols-12 h-full">
                                            <div class="lg:col-span-5 col-span-12">
                                                <div class="aspect-w-3 aspect-h-2 card-news-img">
                                                    <a href="<?php echo get_the_permalink($results_read[1]->ID);?>">
                                                        <?php 
                                                $image_read = get_post_thumbnail_id($results_read[1]->ID);
                                                $size = 'large';
                                                if( $image_read ) {
                                                    echo wp_get_attachment_image( $image_read, $size, "", array( "class" => "picture-cover object-cover" ) );
                                                }
                                                ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="lg:col-span-7 col-span-12">
                                                <div class="bg-radial-1 card-news-info">
                                                    <div class="p-4 flex flex-col space-y-2">
                                                        <a href="<?php echo get_the_permalink($results_read[1]->ID);?>"
                                                            class="text-white font-bold uppercase line-clamp-2">
                                                            <?php echo get_the_title($results_read[1]->ID);?></a>

                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="lg:col-span-12 col-span-6">
                                    <div class="card-news-2">
                                        <div class="grid grid-cols-12 h-full">
                                            <div class="lg:col-span-5 col-span-12">
                                                <div class="aspect-w-3 aspect-h-2 card-news-img">
                                                    <a href="<?php echo get_the_permalink($results_read[2]->ID);?>">
                                                        <?php 
                                                $image_read = get_post_thumbnail_id($results_read[2]->ID);
                                                $size = 'large';
                                                if( $image_read ) {
                                                    echo wp_get_attachment_image( $image_read, $size, "", array( "class" => "picture-cover object-cover" ) );
                                                }
                                                ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="lg:col-span-7 col-span-12">
                                                <div class="bg-radial-1 card-news-info">
                                                    <div class="p-4 flex flex-col space-y-2">
                                                        <a href="<?php echo get_the_permalink($results_read[2]->ID);?>"
                                                            class="text-white font-bold uppercase line-clamp-2">
                                                            <?php echo get_the_title($results_read[1]->ID);?></a>

                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                            </div>
                            <?php endif;?>
                        </div>

                    </div>
                </div>



    </section>
</main>