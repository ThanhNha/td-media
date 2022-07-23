<section class="ab-ss4  relative lg:h-[1700px] md:h-[1200px] h-[900px]">
    <div class="w-full h-full relative md:absolute top-0 left-0 -z-10">
        <?php
       if ( get_field('background') ) {
        $attachment_id = get_field('background');
        $size = "full"; // (thumbnail, medium, large, full or custom size)
       echo wp_get_attachment_image( $attachment_id, size , "", array( "class" => "picture-cover object-cover" ));
       }
       ?>

    </div>
    <div class="absolute top-0 left-0 w-full h-full z-10">
        <div class="container">
            <div class=" mx-auto lg:max-w-[540px]">
                <div class="flex flex-col lg:space-y-6 space-y-4 ">
                    <div class="flex justify-center space-x-3 lg:pt-16 pt-8 fade-left">
                        <div class="flex items-center space-x-2 w-[50px] full">
                            <div class="bg-pink h-full w-1/4"></div>
                            <div class="bg-pink h-full w-1/2"></div>
                        </div>
                        <div class="text-white ">
                            <h2 class="uppercase font-bold h3 ">
                                Thành tựu nổi bậc
                            </h2>
                        </div>
                    </div>
                    <div class="subheading uppercase text-justify pb-[40px] fade-right">
                        <?php if ( get_field('sub_title') ) : ?>
                        <?php echo get_field('sub_title'); ?>
                        <?php endif; ?>

                    </div>
                </div>

            </div>
            <div class="mt-[90px] relative lg:w-[620px] lg:h-[650px] md:h-[500px] h-[400px] mx-auto animation-wrapper">
                <?php if ( have_rows('value_repeater') ) : ?>
                <?php
            
            $i = 1; ?>
                <?php while( have_rows('value_repeater') ) : the_row(); ?>

                <?php $i++; ?>


                <div class="flex flex-col space-y-4 items-center absolute <?php if($i==1){echo 'left-0 top-0';};
                     if($i==2){echo 'right-0 top-0';};
                     if($i== 3 ){echo 'right-1/2 bottom-0 translate-x-1/2';};
                   ?> z-10  animation-item ">
                    <div class="relative w-[150px] h-[150px]">
                        <div class="absolute w-full h-full">
                            <?php
                           if ( get_field('icon') ) {
                            $attachment_id = get_field('icon');
                            $size = "full"; // (thumbnail, medium, large, full or custom size)
                          echo  wp_get_attachment_image( $attachment_id, size,"", array( "class" => "picture-cover object-cover" ));
                           }
                           ?>

                        </div>
                        <div class="absolute top-1/2 left-1/2  -translate-x-1/2 -translate-y-1/2 ">
                            <h2 class="counter p1 text-white uppercase font-bold"> <?php the_sub_field('value'); ?>
                            </h2>
                        </div>
                    </div>
                    <div class="text-white h3 uppercase font-bold">
                        <?php the_sub_field('name_value'); ?>
                    </div>
                </div>
                <?php endwhile; ?>

                <?php endif; ?>



                <!-- <div
                    class="flex flex-col space-y-4 items-center absolute right-1/2 bottom-0 translate-x-1/2 z-10 animation-item">
                    <div class="relative w-[150px] h-[150px]">
                        <div class="absolute w-full h-full">
                            <img src="./images/about/hinhtron.png" alt="" class="object-cover picture-cover">
                        </div>
                        <div class="absolute top-1/2 left-1/2  -translate-x-1/2 -translate-y-1/2 ">
                            <h2 class="counter p1 text-white uppercase font-bold"> 300</h2>
                        </div>
                    </div>
                    <div class="text-white h3 uppercase font-bold">
                        Clients
                    </div>
                </div> -->

            </div>

        </div>
    </div>




</section>