<section id="contact-ss2" class="lg:pb-[300px] md:pb-[240px] pb-[400px] relative">
    <div class="absolute top-0 left-0 w-full h-full -z-10">
        <?php
     if ( get_field('background') ) {
        $attachment_id = get_field('background');
        $size = "full"; // (thumbnail, medium, large, full or custom size)
       echo wp_get_attachment_image( $attachment_id, size ,"", array( "class" => "picture-cover object-cover" ));
     }  
     ?>

    </div>
    <div class="container">
        <div class="max-w-[80%] mx-auto lg:pt-8 md:pt-6 pt-4">
            <div class="flex flex-col lg:space-y-8 md:space-y-6 space-y-4">
                <div class="p1 text-center fade-left"> <?php if ( get_field('description') ) : ?>
                    <?php echo get_field('description'); ?>
                    <?php endif; ?>
                </div>
                <div class="h2 uppercase font-bold text-white text-center fade-right">
                    <h1>Liên Hệ ngay với chúng tôi</h1>
                </div>
            </div>

        </div>
        <div class="lg:mt-20 md:mt-12 mt-10">
            <div class="grid grid-cols-12 lg:gap-[50px] md:gap-[36px] gap-[25px]">
                <div class="lg:col-span-6 col-span-12">
                    <div class="h-full min-h-[300px] map">


                        <iframe src="<?php if ( get_field('map') ) : ?>
                            <?php echo get_field('map'); ?>
                            <?php endif; ?> " width=" 600" height="450" style="border:0;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="lg:col-span-6 col-span-12">
                    <div class="flex flex-col lg:space-y-8 space-y-4">
                        <div class="flex-1">
                            <div class="flex space-x-3">
                                <div class="flex items-center space-x-2 w-[50px] full">
                                    <div class="bg-pink h-full w-1/4"></div>
                                    <div class="bg-pink h-full w-1/2"></div>
                                </div>
                                <div class="text-white">
                                    <h2 class="uppercase font-bold h3">
                                        Send us a message
                                    </h2>
                                </div>

                            </div>
                        </div>
                        <div class="flex-1">
                            <div id="form-contact" class="form-contact">
                                <?php
                $form_contact = get_field('form');
                if($form_contact){
                    echo do_shortcode($form_contact);
                }
                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lg:mt-20 md:mt-12 mt-10">
        <div class="container">
            <div class="flex flex-col space-y-4">
                <div class="h2 uppercase font-bold text-white text-center fade-left">
                    <h1>Get in touch!</h1>
                </div>
                <div class="grid grid-cols-12 lg:gap-8 md:gap-6 gap-4 animation-wrapper">
                    <?php if ( have_rows('contact_repeater') ) : ?>
                    <?php $i=0;?>
                    <?php while( have_rows('contact_repeater') ) : the_row(); ?>
                    <?php $i++;?>
                    <div
                        class="<?php if($i===3){echo "lg:col-span-4 md:col-span-12 col-span-12";}else{echo "lg:col-span-4 md:col-span-6 col-span-6";}?>">
                        <div class="animation-item flex flex-col items-center lg:space-y-8 md:space-y-6 space-y-4">
                            <div class="aspect-1 lg:w-[100px] md:w-[70px] w-[50px]">
                                <div class="w-full h-full bg-radial-1">
                                    <?php
                                    if ( get_sub_field('icon') ) {
                                        $attachment_id = get_sub_field('icon');
                                        $size = "full"; // (thumbnail, medium, large, full or custom size)
                                    echo wp_get_attachment_image( $attachment_id, size ,"", array( "class" => "picture-cover object-cover" ));
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="flex flex-col space-y-4">
                                <div class="h3 font-bold text-white uppercase text-center">
                                    <?php the_sub_field("name");?>

                                </div>
                                <div class="sub-heading">
                                    <?php the_sub_field("content");?>

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
</section>