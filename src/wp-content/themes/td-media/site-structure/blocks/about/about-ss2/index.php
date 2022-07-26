<section class="ab-ss2 relative w-full lg:pb-[100px] md:pb-[70px] pb-[50px] bg-top bg-no-repeat bg-cover" style="background-image: url(&quot;<?php
    if ( get_field('background') ) {
        the_field('background');
     }
   ?>&quot;);">


    <div class="container">
        <div class="lg:pt-12 md:pt-8 pt-4">
            <div class="grid grid-cols-10 lg:gap-y-[50px] md:gap-y-[35px] gap-y-[25px]">

                <div class="lg:col-span-4 col-span-full">
                    <div class="flex flex-col md:space-y-5 space-y-3 overflow-x-hidden">
                        <div class="flex-1 fade-left">
                            <div class="flex space-x-3">
                                <div class="flex items-center space-x-2 w-[50px] full">
                                    <div class="bg-pink h-full w-1/4"></div>
                                    <div class="bg-pink h-full w-1/2"></div>
                                </div>
                                <div class="text-white">
                                    <h2 class="uppercase font-bold h2">
                                        <?php if ( get_field('title_1') ) : ?>
                                        <?php echo get_field('title_1'); ?>
                                        <?php endif; ?>

                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="description flex-1 text-white fade-left">
                            <?php if ( get_field('description_1') ) : ?>
                            <p><?php echo get_field('description_1'); ?></p>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
                <div class="lg:col-span-6 col-span-full">
                    <div class=" aspect-w-2 aspect-h-1">
                        <?php 
                       if ( get_field('image_1') ) {
                        $attachment_id = get_field('image_1');
                        $size = "full"; // (thumbnail, medium, large, full or custom size)
                        echo wp_get_attachment_image( $attachment_id, size,"", array( "class" => "picture-cover object-cover" ));
                    }
                      ?>

                    </div>
                </div>
            </div>

        </div>
        <div class="lg:pt-16 md:pt-8 pt-4">
            <div class="grid grid-cols-10 lg:gap-y-[50px] md:gap-y-[35px] gap-y-[25px]">
                <div class="lg:col-span-6 col-span-full">
                    <div class=" aspect-w-2 aspect-h-1">
                        <?php
                        if ( get_field('image_2') ) {
                            $attachment_id = get_field('image_2');
                            $size = "full"; // (thumbnail, medium, large, full or custom size)
                            echo wp_get_attachment_image( $attachment_id, size,"", array( "class" => "picture-cover object-cover" ));
                        }
                        ?>

                    </div>
                </div>
                <div class="lg:col-span-4 col-span-full">
                    <div class="flex flex-col md:space-y-5 space-y-3 overflow-x-hidden">
                        <div class="flex-1 fade-right">
                            <div class="flex space-x-3">
                                <div class="flex items-center space-x-2 w-[50px] full">
                                    <div class="bg-pink h-full w-1/4"></div>
                                    <div class="bg-pink h-full w-1/2"></div>
                                </div>
                                <div class="text-white">
                                    <h2 class="uppercase font-bold h2">
                                        <?php if ( get_field('title_2') ) : ?>
                                        <?php echo get_field('title_2'); ?>
                                        <?php endif; ?>
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="description flex-1 text-white fade-right">
                            <?php if ( get_field('description_2') ) : ?>
                            <p><?php echo get_field('description_2'); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>