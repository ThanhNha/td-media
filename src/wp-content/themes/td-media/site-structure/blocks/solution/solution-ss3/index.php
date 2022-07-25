<section id="nw-ss2" class="nw-ss2 lg:pb-[300px] md:pb-[240px] pb-[400px] relative">
    <div class="overlay bg-top bg-no-repeat bg-cover -z-10" style="background-color: rgb(220, 208, 194); background-image: url(&quot;<?php if ( get_field('background') ) {
               the_field('background');
            }?>&quot;);" ">

    </div>
    <div class=" container z-10 relative">


        <!-- Solution -->
        <div class="lg:pt-12 md:pt-10 pt-8">
            <div class="flex flex-col lg:space-y-8 space-y-4">
                <div class="flex-1 fade-right">
                    <div class="grid grid-cols-2">
                        <div class="lg:col-start-2 lg:col-span-1 col-span-full flex space-x-3">
                            <div class="flex items-center space-x-2 w-[50px] full">
                                <div class="bg-pink h-full w-1/4"></div>
                                <div class="bg-pink h-full w-1/2"></div>
                            </div>
                            <div class="text-white">
                                <h2 class="uppercase font-bold h2">
                                    Quà tặng doanh nghiệp
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <div class=" grid grid-cols-12 lg:gap-[50px] md:gap-[35px] gap-[25px] animation-wrapper">
                        <?php if ( have_rows('gift_repeater') ) : ?>

                        <?php while( have_rows('gift_repeater') ) : the_row(); ?>


                        <div class="lg:col-span-3 col-span-6">
                            <div class="bg-radial-1 animation-item">
                                <div class="flex lg:py-8 py-4 px-4 flex-col space-y-4 items-center">
                                    <div class="icon">
                                        <?php
                                    if ( get_sub_field('icon') ) {
                                        $attachment_id = get_sub_field('icon');
                                        $size = "full"; // (thumbnail, medium, large, full or custom size)
                                       echo wp_get_attachment_image( $attachment_id, size, "", array( "class" => "object-cover" ));
                                    }
                                    ?>

                                    </div>
                                    <div class="font-bold h3 uppercase text-white">
                                        <?php the_sub_field('name'); ?>
                                    </div>
                                    <div class="text-white"> <?php the_sub_field('description'); ?>
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

        <div class="lg:pt-[200px] md:pt-[140px] pt-[100px]">
            <div class="flex flex-col lg:space-y-8 space-y-4">
                <div class="flex-1 fade-right">
                    <div class="flex justify-center">
                        <div class="col-span-full flex space-x-3">
                            <div class="flex items-center space-x-2 w-[50px] full">
                                <div class="bg-pink h-full w-1/4"></div>
                                <div class="bg-pink h-full w-1/2"></div>
                            </div>
                            <div class="text-white">
                                <h2 class="uppercase font-bold h2">
                                    Quy trình dịch vụ
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-1">
                    <div
                        class="grid lg:grid-cols-5 grid-cols-12  lg:gap-[50px] md:gap-[35px] gap-[25px] animation-wrapper">
                        <?php if ( have_rows('procedure_repeater') ) : ?>
                        <?php $counter == 1;?>
                        <?php while( have_rows('procedure_repeater') ) : the_row(); ?>
                        <?php $counter++; ?>
                        <div class="lg:col-span-1 md:col-span-4 col-span-6">
                            <div class="flex flex-col space-y-4 items-center  animation-item">
                                <div class="relative w-[150px] h-[150px]">
                                    <div class="absolute w-full h-full">
                                        <?php
                                        if ( get_sub_field('icon') ) {
                                            $attachment_id = get_sub_field('icon');
                                            $size = "full"; // (thumbnail, medium, large, full or custom size)
                                           echo wp_get_attachment_image( $attachment_id, size, "", array( "class" => "picture-cover object-cover" ));
                                        }
                                        ?>
                                    </div>
                                    <div class="absolute top-1/2 left-1/2  -translate-x-1/2 -translate-y-1/2 ">
                                        <h2 class="p1 text-white uppercase text-center font-bold">STEP
                                            <span class="h3"><?php echo $counter;?></span>
                                        </h2>
                                    </div>
                                </div>
                                <div class="text-white h3 uppercase font-bold text-center">
                                    <?php the_sub_field('name_step'); ?>

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