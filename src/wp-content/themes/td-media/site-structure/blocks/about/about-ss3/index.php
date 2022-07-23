<section class="ab-ss3  bg-top bg-no-repeat bg-cover" style="background-image: url(&quot;<?php if ( get_field('background') ) {
        the_field('background');
     }?>&quot;);">
    <div class="container">
        <div class="lg:py-16 md:py-8 py-4">
            <div class="lg:max-w-[640px] mx-auto">
                <div class="flex flex-col lg:space-y-8 md:space-y-6 space-y-4 ">
                    <div class="flex justify-center space-x-3 fade-left">
                        <div class="flex items-center space-x-2 w-[50px] full">
                            <div class="bg-pink h-full w-1/4"></div>
                            <div class="bg-pink h-full w-1/2"></div>
                        </div>
                        <div class="text-white ">
                            <h2 class="uppercase font-bold h3">
                                Đội ngũ nhân sự
                            </h2>
                        </div>
                    </div>

                    <div
                        class="grid grid-cols-2 lg:gap-x-[100px] md:gap-x-[50px] gap-x-[20px] gap-y-[20px] animation-wrapper">
                        <?php if ( have_rows('staff_list') ) : ?>

                        <?php while( have_rows('staff_list') ) : the_row(); ?>

                        <div class="col-span-1 flex flex-col h-full space-y-3  animation-item">
                            <div class="aspect-1 lg:max-w-[270px] bg-radial-2">
                                <?php if( get_sub_field('image') ) : ?>
                                <?php $image = get_sub_field('image'); 
                                    echo wp_get_attachment_image( $image, $size, "", array( "class" => "picture-cover object-cover" ) );
                                ?>
                                <?php endif; ?>

                            </div>
                            <div class="h3 uppercase text-white font-bold">
                                <?php the_sub_field("position")?>
                            </div>
                            <div class="sub-heading">
                                <?php the_sub_field("summary")?>
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