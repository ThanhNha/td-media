<section id="nw-ss2" class=" nw-ss2 lg:pb-[300px] md:pb-[240px] pb-[400px] relative">
    <div class="overlay bg-top bg-no-repeat bg-cover -z-10" style="background-color: rgb(220, 208, 194); background-image: url(&quot;<?php if ( get_field('background') ) {
               the_field('background');
            }?>&quot;);">

    </div>
    <div class="container z-10 relative">
        <div class="lg:pt-8 md:pt-6 pt-4">
            <div class="flex flex-col lg:space-y-8 space-y-4 overflow-hidden">
                <div class="flex-1 fade-left">
                    <div class="grid grid-cols-5">
                        <div class="col-start-2 col-span-3 flex space-x-3">
                            <div class="flex items-center space-x-2 w-[50px] full">
                                <div class="bg-pink h-full w-1/4"></div>
                                <div class="bg-pink h-full w-1/2"></div>
                            </div>
                            <div class="text-white">
                                <h2 class="uppercase font-bold h2">
                                    <?php if ( get_field('content_name_1') ) : ?>
                                    <?php echo get_field('content_name_1'); ?>
                                    <?php endif; ?>

                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-1 fade-right">
                    <div class="grid grid-cols-12 lg:gap-[50px] md:gap-[35px] gap-[25px]">
                        <div class="lg:col-span-6 col-span-full">
                            <div class="aspect-w-2 aspect-h-1">
                                <?php
                            if ( get_field('content_image_1') ) {
                                $attachment_id = get_field('content_image_1');
                                $size = "full"; // (thumbnail, medium, large, full or custom size)
                               echo wp_get_attachment_image(  $attachment_id, size , "", array( "class" => "picture-cover object-cover"));
                            }
                            ?>
                            </div>
                        </div>
                        <div class="lg:col-span-4 col-span-full">
                            <div class="flex flex-col md:space-y-3 space-y-2 ">
                                <div class="description text-white">
                                    <?php if ( get_field('content_description_1') ) : ?>
                                    <?php echo get_field('content_description_1'); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="">
                                    <?php if ( get_field('content_link_1') ) : ?>
                                    <a class="btn btn-lg uppercase font-bold btn-main btn-hover"
                                        href="<?php echo get_field('content_link_1'); ?>"> <span>xem thêm</span></a>
                                    <?php endif; ?>


                                </div>
                            </div>

                        </div>
                        <div class="col-span-2 lg:block hidden"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Network 2 -->
        <div class="lg:pt-8 md:pt-6 pt-4">
            <div class="flex flex-col lg:space-y-8 space-y-4 overflow-hidden">
                <div class="flex-1 fade-right">
                    <div class="grid grid-cols-5">
                        <div
                            class="xl:col-start-4 xl:col-span-1 lg:col-start-3 lg:col-span-2 col-start-2 col-span-full flex space-x-3">
                            <div class="flex items-center space-x-2 w-[50px] full">
                                <div class="bg-pink h-full w-1/4"></div>
                                <div class="bg-pink h-full w-1/2"></div>
                            </div>
                            <div class="text-white">
                                <h2 class="uppercase font-bold h2">
                                    <?php if ( get_field('content_name_2') ) : ?>
                                    <?php echo get_field('content_name_2'); ?>
                                    <?php endif; ?>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-1 fade-left">
                    <div class="grid grid-cols-12 lg:gap-[50px] md:gap-[35px] gap-[25px]">
                        <div class="col-span-2 lg:block hidden"></div>
                        <div class="lg:col-span-4 col-span-full">
                            <div class="flex flex-col md:space-y-3 space-y-2">
                                <div class="description text-white">
                                    <?php if ( get_field('content_description_2') ) : ?>
                                    <?php echo get_field('content_description_2'); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="">
                                    <?php if ( get_field('content_link_2') ) : ?>
                                    <a class="btn btn-lg uppercase font-bold btn-main btn-hover"
                                        href="<?php echo get_field('content_link_2'); ?>"> <span>xem thêm</span></a>
                                    <?php endif; ?>
                                </div>
                            </div>

                        </div>
                        <div class="lg:col-span-6 col-span-full">
                            <div class="aspect-w-2 aspect-h-1">
                                <?php
                            if ( get_field('content_image_2') ) {
                                $attachment_id = get_field('content_image_2');
                                $size = "full"; // (thumbnail, medium, large, full or custom size)
                               echo wp_get_attachment_image(  $attachment_id, size , "", array( "class" => "picture-cover object-cover"));
                            }
                            ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Network 3 -->
        <div class="lg:pt-8 md:pt-6 pt-4">
            <div class="flex flex-col lg:space-y-8 space-y-4 overflow-hidden">
                <div class="flex-1 fade-left">
                    <div class="grid grid-cols-5">
                        <div class="col-start-2 col-span-3 flex space-x-3">
                            <div class="flex items-center space-x-2 w-[50px] full">
                                <div class="bg-pink h-full w-1/4"></div>
                                <div class="bg-pink h-full w-1/2"></div>
                            </div>
                            <div class="text-white">
                                <h2 class="uppercase font-bold h2">
                                    <?php if ( get_field('content_name_3') ) : ?>
                                    <?php echo get_field('content_name_3'); ?>
                                    <?php endif; ?>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex-1 fade-right">
                    <div class="grid grid-cols-12 lg:gap-[50px] md:gap-[35px] gap-[25px]">
                        <div class="lg:col-span-6 col-span-full">
                            <div class="aspect-w-2 aspect-h-1">
                                <?php
                            if ( get_field('content_image_3') ) {
                                $attachment_id = get_field('content_image_3');
                                $size = "full"; // (thumbnail, medium, large, full or custom size)
                               echo wp_get_attachment_image(  $attachment_id, size , "", array( "class" => "picture-cover object-cover"));
                            }
                            ?>

                            </div>
                        </div>
                        <div class="lg:col-span-4 col-span-full">
                            <div class="flex flex-col md:space-y-3 space-y-2">
                                <div class="description text-white">
                                    <?php if ( get_field('content_description_3') ) : ?>
                                    <?php echo get_field('content_description_3'); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="">
                                    <?php if ( get_field('content_link_3') ) : ?>
                                    <a class="btn btn-lg uppercase font-bold btn-main btn-hover"
                                        href="<?php echo get_field('content_link_3'); ?>"> <span>xem thêm</span></a>
                                    <?php endif; ?>
                                </div>
                            </div>

                        </div>
                        <div class="col-span-2 lg:block hidden"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>