<section id="sl-ss1" class="sl-ss1 bg-img">
    <div class="banner overlay bg-top bg-no-repeat bg-cover" style="background-color: rgb(220, 208, 194); background-image: url(&quot;<?php if ( get_field('background') ) {
               the_field('background');
            }?>&quot;);">

    </div>
    <div class=" z-10 w-full lg:absolute relative bottom-0 lg:translate-y-0 md:translate-y-[100%] translate-y-[30%] ">
        <div class="container">
            <div class="lg:py-8 md:py-6 py-4">
                <div class="flex flex-col lg:space-y-8 space-y-4">
                    <div class="flex-1 fade-left">
                        <div class="grid grid-cols-5">
                            <div class="col-span-full flex space-x-3">
                                <div class="flex items-center space-x-2 w-[50px] full">
                                    <div class="bg-pink h-full w-1/4"></div>
                                    <div class="bg-pink h-full w-1/2"></div>
                                </div>
                                <div class="text-white">
                                    <h2 class="uppercase font-bold h2">
                                        marketing tổng thể
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-2/3">
                        <div class="grid grid-cols-12 lg:gap-[35px] md:gap-[28px] gap-[15px] animation-wrapper">

                            <?php if ( have_rows('maketing_repeater') ) : ?>

                            <?php while( have_rows('maketing_repeater') ) : the_row(); ?>


                            <div class="lg:col-span-3 md:col-span-4 col-span-6">
                                <div class="flex flex-col space-y-4 items-center animation-item ">
                                    <div class="icon aspect-1">
                                        <?php
                                     if ( get_sub_field('icon') ) {
                                        $attachment_id = get_sub_field('icon');
                                        $size = "full"; // (thumbnail, medium, large, full or custom size)
                                        echo wp_get_attachment_image( $attachment_id, size );
                                     }
                                     ?>

                                    </div>
                                    <div class="font-bold uppercase text-center sub-heading text-white">Tu van
                                        <?php the_sub_field('name'); ?>
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