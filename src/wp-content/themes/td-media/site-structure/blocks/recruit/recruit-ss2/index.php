<section id="recruit-2" class="recruit-2 relative z-20 -mt-[20px] lg:py-[50px] md:py-[35px] py-[25px] min-h-[500px]">
    <div class="overlay bg-top bg-no-repeat bg-cover -z-10" style="background-color: rgb(220, 208, 194); background-image: url(&quot;<?php if ( get_field('background') ) {
               the_field('background');
            }?>&quot;);">
    </div>
    <div class="container">


        <div class="lg:w-[70%] md:w-[80%]  mx-auto">
            <div class="flex flex-col space-y-6">
                <h1 class="h2 text-shadow text-white font-bold uppercase text-center fade-left">
                    <?php if ( get_field('title') ) : ?>
                    <p><?php echo get_field('title'); ?></p>
                    <?php endif; ?>

                </h1>
                <h2 class="uppercase text-center fade-right"> <?php if ( get_field('sub_title') ) : ?>
                    <?php echo get_field('sub_title'); ?>
                    <?php endif; ?></h2>

            </div>
            <div class="lg:mt-[50px] md:mt-[35px] mt-[25px]">
                <div class="grid grid-cols-12 lg:gap-[50px] md:gap-[35px] gap-[25px] animation-wrapper">
                    <?php if ( have_rows('content_repeater') ) : ?>

                    <?php while( have_rows('content_repeater') ) : the_row(); ?>

                    <div class="col-span-6">
                        <div class="bg-radial-2 flex flex-col space-y-4 items-center aspect-1 p-4 animation-item">
                            <div class="icon aspect-1">
                                <?php
                              if ( get_sub_field('icon') ) {
                                $attachment_id = get_sub_field('icon');
                                $size = "full"; // (thumbnail, medium, large, full or custom size)
                               echo wp_get_attachment_image( $attachment_id, size, "", array( "class" => "picture-cover object-cover" ));
                              }
                              ?>

                            </div>
                            <h2 class="uppercase p1 text-white text-center font-bold">
                                <?php the_sub_field('name'); ?>

                            </h2>
                            <div class=" text-white text-center">
                                <?php the_sub_field('description'); ?>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; ?>

                    <?php endif; ?>




                </div>
            </div>

        </div>
    </div>
</section>