<section id="nw-ss2" class="nw-ss2 relative">
    <div class="overlay bg-top bg-no-repeat bg-cover -z-10" style="background-color: rgb(220, 208, 194); background-image: url(&quot;<?php if ( get_field('background') ) {
               the_field('background');
            }?>&quot;);">

    </div>
    <div class="container z-10 relative">


        <!-- Solution -->
        <div class="lg:pt-12 md:pt-10 pt-8">
            <div class="flex flex-col lg:space-y-8 space-y-4">
                <div class="flex-1 fade-right">
                    <div class="grid grid-cols-5">
                        <div class="xl:col-start-4 lg:col-start-3 lg:col-span-2 col-span-full flex space-x-3">
                            <div class="flex items-center space-x-2 w-[50px] full">
                                <div class="bg-pink h-full w-1/4"></div>
                                <div class="bg-pink h-full w-1/2"></div>
                            </div>
                            <div class="text-white">
                                <h2 class="uppercase font-bold h2">
                                    Sáng tạo nội dung
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <div class="grid grid-cols-12 lg:gap-[50px] md:gap-[35px] gap-[25px] animation-wrapper">

                        <?php if ( have_rows('creative_repeater') ) : ?>

                        <?php while( have_rows('creative_repeater') ) : the_row(); ?>


                        <div class="lg:col-span-3 col-span-6">
                            <div class="flex flex-col items-center card-solution animation-item">
                                <div class="image">
                                    <?php
                                  if ( get_sub_field('image') ) {
                                    $attachment_id = get_sub_field('image');
                                    $size = "full"; // (thumbnail, medium, large, full or custom size)
                                  echo wp_get_attachment_image( $attachment_id, size,"", array( "class" => "picture-cover object-cover" ));
                                  }
                                  ?>

                                </div>
                                <div class="bg-radial-1 w-full py-4 px-2 ">
                                    <div class="title text-white uppercase font-bold">
                                        <?php the_sub_field('title'); ?>
                                    </div>
                                    <div class="description text-white">
                                        <?php the_sub_field('description'); ?>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php endwhile; ?>

                        <?php endif; ?>



                    </div>
                </div>
            </div>
        </div>



    </div>
</section>