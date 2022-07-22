<!-- footer Start -->
<footer class="flex flex-col items-end">

    <div class="container">
        <div class="overlay bg-top bg-no-repeat bg-cover -z-10 pointer-events-none" style="background-image: url(&quot;<?php
            if ( get_field('ft_background','option') ) {
               the_field('ft_background','option');
            }
            ?>&quot;);">
        </div>
        <div class="main-footer">
            <div class=" grid grid-cols-12 lg:gap-[50px] md:gap-[35px] gap-[25px]">
                <div class="lg:col-span-7 col-span-12">
                    <div class="grid grid-cols-12 lg:gap-[50px] md:gap-[35px] gap-[25px]">
                        <div class="md:col-span-6 col-span-12">
                            <div class="aspect-1">
                                <?php
                                if ( get_field('footer_logo','option') ) {
                                    $attachment_id = get_field('footer_logo','option');
                                    $size = "full"; // (thumbnail, medium, large, full or custom size)
                                    $class = "picture-cover object-contain";
                                   echo wp_get_attachment_image( $attachment_id, $size,false , array('class' =>  $class) );
                                }
                                ?>

                            </div>
                        </div>
                        <div class="md:col-span-6 col-span-12">
                            <ul class="flex flex-col lg:space-y-[20px] space-y-[10px]">
                                <li class="">
                                    <a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit,
                                        nulla.</a>
                                </li>
                                <li class="">
                                    <a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit,
                                        nulla.</a>
                                </li>
                                <li class="">
                                    <a href="#">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit,
                                        nulla.</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-5 col-span-12">
                    <div class="flex flex-col lg:space-y-[20px] space-y-[10px]">
                        <div class="flex flex-col">
                            <h3 class="h3 uppercase font-bold text-white">Lorem ipsum dolor sit amet. </h3>
                            <span class="sub-heading uppercase">Lorem ipsum dolor sit amet. </span>
                        </div>
                        <div class="form-footer">
                            <input type="text" class="form-input p1">
                            <input type="submit" class="btn-submit btn-main btn-hover " value="Submit">
                        </div>
                        <ul class="flex space-x-2 items-center">

                            <li class="bg-radial-2 flex h-[50px] w-[50px]">
                                <a href=""></a>
                            </li>
                            <li class="bg-radial-2 flex h-[50px] w-[50px]">
                                <a href=""></a>
                            </li>
                            <li class="bg-radial-2 flex h-[50px] w-[50px]">
                                <a href=""></a>
                            </li>
                            <li class="bg-radial-2 flex h-[50px] w-[50px]">
                                <a href=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right flex flex-col text-center space-y-2 lg:py-[30px] md:py-[20px] py-[15px] ">
            <div class="line bg-gray-300 h-[2px]"></div>
            <span class="sub-heading uppercase">@ Copyright By TD MEdia</span>
        </div>
    </div>

</footer>