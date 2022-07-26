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
            <div class="w-full grid grid-cols-12 lg:gap-[50px] md:gap-[35px] gap-[25px]">
                <div class="lg:col-span-7 col-span-12">
                    <div class="grid grid-cols-12 lg:gap-[50px] md:gap-[35px] gap-[25px]">
                        <div class="md:col-span-6 col-span-12">
                            <div class="aspect-1">
                                <?php
                                if ( get_field('footer_logo','option') ) {
                                    $attachment_id = get_field('footer_logo','option');
                                    $size = "full"; // (thumbnail, medium, large, full or custom size)
                                    $class = "picture-cover object-cover";
                                   echo wp_get_attachment_image( $attachment_id, $size,false , array('class' =>  $class) );
                                }
                                ?>

                            </div>
                        </div>
                        <div class="md:col-span-6 col-span-12">
                            <ul class="flex flex-col lg:space-y-[20px] space-y-[10px]">
                                <li class="">
                                    <?php if ( get_field('ft_phone','option') ) : ?>
                                    <a href="tel:<?php echo get_field('ft_phone','option'); ?>"><span
                                            class="text-white ">Phone:
                                        </span> <?php echo get_field('ft_phone','option'); ?></a>
                                    <?php endif; ?>


                                </li>
                                <li class="">
                                    <?php if ( get_field('ft_email','option') ) : ?>
                                    <a href="mailto:<?php echo get_field('ft_email','option'); ?>"><span
                                            class="text-white ">Email: </span>
                                        <?php echo get_field('ft_email','option'); ?></a>
                                    <?php endif; ?>


                                </li>
                                <li class="">
                                    <?php 
                                    $link = get_field('ft_address','option');
                                    if( $link ): 
                                        $link_url = $link['url'];
                                        $link_title = $link['title'];
                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                        ?>
                                    <a href="<?php echo esc_url( $link_url ); ?>"
                                        target="<?php echo esc_attr( $link_target ); ?>"><span class="text-white ">Địa
                                            chỉ: </span><?php echo esc_html( $link_title ); ?></a>
                                    <?php endif; ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="lg:col-span-5 col-span-12">
                    <div class="flex flex-col lg:space-y-[20px] space-y-[10px]">
                        <div class="flex flex-col">
                            <h3 class="h3 uppercase font-bold text-white">Truyền thông td </h3>
                            <span class="sub-heading uppercase">Nhà định hình phong cách thương hiệu </span>
                        </div>
                        <div class="form-footer">
                            <?php
                $form_footer = get_field('ft_form','option');
                if($form_footer){
                    echo do_shortcode($form_footer);
                }
                ?>
                        </div>
                        <ul class="flex space-x-2 items-center">
                            <li class="social-footer flex h-[50px] w-[50px]">

                                <a href="">
                                    <span class="icon-social"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                            width="22" height="22" viewBox="0 0 50 50" style=" fill:currentColor;">
                                            <path
                                                d="M41,4H9C6.243,4,4,6.243,4,9v32c0,2.757,2.243,5,5,5h32c2.757,0,5-2.243,5-5V9C46,6.243,43.757,4,41,4z M37.006,22.323 c-0.227,0.021-0.457,0.035-0.69,0.035c-2.623,0-4.928-1.349-6.269-3.388c0,5.349,0,11.435,0,11.537c0,4.709-3.818,8.527-8.527,8.527 s-8.527-3.818-8.527-8.527s3.818-8.527,8.527-8.527c0.178,0,0.352,0.016,0.527,0.027v4.202c-0.175-0.021-0.347-0.053-0.527-0.053 c-2.404,0-4.352,1.948-4.352,4.352s1.948,4.352,4.352,4.352s4.527-1.894,4.527-4.298c0-0.095,0.042-19.594,0.042-19.594h4.016 c0.378,3.591,3.277,6.425,6.901,6.685V22.323z">
                                            </path>
                                        </svg></span>
                                </a>
                            </li>
                            <li class=" social-footer flex h-[50px] w-[50px]">
                                <a href="">
                                    <span class="icon-social"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                            width="50" height="50" viewBox="0 0 50 50" style=" fill:currentColor;">
                                            <path
                                                d="M41,4H9C6.24,4,4,6.24,4,9v32c0,2.76,2.24,5,5,5h32c2.76,0,5-2.24,5-5V9C46,6.24,43.76,4,41,4z M37,19h-2c-2.14,0-3,0.5-3,2 v3h5l-1,5h-4v15h-5V29h-4v-5h4v-3c0-4,2-7,6-7c2.9,0,4,1,4,1V19z">
                                            </path>
                                        </svg></span>
                                </a>
                            </li>
                            <li class="social-footer flex h-[50px] w-[50px]">
                                <a href="">
                                    <span class="icon-social"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                            width="50" height="50" viewBox="0 0 50 50" style=" fill:currentColor;">
                                            <path
                                                d="M 9 4 C 6.2504839 4 4 6.2504839 4 9 L 4 41 C 4 43.749516 6.2504839 46 9 46 L 41 46 C 43.749516 46 46 43.749516 46 41 L 46 9 C 46 6.2504839 43.749516 4 41 4 L 9 4 z M 9 6 L 15.580078 6 C 12.00899 9.7156859 10 14.518083 10 19.5 C 10 24.66 12.110156 29.599844 15.910156 33.339844 C 16.030156 33.549844 16.129922 34.579531 15.669922 35.769531 C 15.379922 36.519531 14.799687 37.499141 13.679688 37.869141 C 13.249688 38.009141 12.97 38.430859 13 38.880859 C 13.03 39.330859 13.360781 39.710781 13.800781 39.800781 C 16.670781 40.370781 18.529297 39.510078 20.029297 38.830078 C 21.379297 38.210078 22.270625 37.789609 23.640625 38.349609 C 26.440625 39.439609 29.42 40 32.5 40 C 36.593685 40 40.531459 39.000731 44 37.113281 L 44 41 C 44 42.668484 42.668484 44 41 44 L 9 44 C 7.3315161 44 6 42.668484 6 41 L 6 9 C 6 7.3315161 7.3315161 6 9 6 z M 33 15 C 33.55 15 34 15.45 34 16 L 34 25 C 34 25.55 33.55 26 33 26 C 32.45 26 32 25.55 32 25 L 32 16 C 32 15.45 32.45 15 33 15 z M 18 16 L 23 16 C 23.36 16 23.700859 16.199531 23.880859 16.519531 C 24.050859 16.829531 24.039609 17.219297 23.849609 17.529297 L 19.800781 24 L 23 24 C 23.55 24 24 24.45 24 25 C 24 25.55 23.55 26 23 26 L 18 26 C 17.64 26 17.299141 25.800469 17.119141 25.480469 C 16.949141 25.170469 16.960391 24.780703 17.150391 24.470703 L 21.199219 18 L 18 18 C 17.45 18 17 17.55 17 17 C 17 16.45 17.45 16 18 16 z M 27.5 19 C 28.11 19 28.679453 19.169219 29.189453 19.449219 C 29.369453 19.189219 29.65 19 30 19 C 30.55 19 31 19.45 31 20 L 31 25 C 31 25.55 30.55 26 30 26 C 29.65 26 29.369453 25.810781 29.189453 25.550781 C 28.679453 25.830781 28.11 26 27.5 26 C 25.57 26 24 24.43 24 22.5 C 24 20.57 25.57 19 27.5 19 z M 38.5 19 C 40.43 19 42 20.57 42 22.5 C 42 24.43 40.43 26 38.5 26 C 36.57 26 35 24.43 35 22.5 C 35 20.57 36.57 19 38.5 19 z M 27.5 21 C 27.39625 21 27.29502 21.011309 27.197266 21.03125 C 27.001758 21.071133 26.819727 21.148164 26.660156 21.255859 C 26.500586 21.363555 26.363555 21.500586 26.255859 21.660156 C 26.148164 21.819727 26.071133 22.001758 26.03125 22.197266 C 26.011309 22.29502 26 22.39625 26 22.5 C 26 22.60375 26.011309 22.70498 26.03125 22.802734 C 26.051191 22.900488 26.079297 22.994219 26.117188 23.083984 C 26.155078 23.17375 26.202012 23.260059 26.255859 23.339844 C 26.309707 23.419629 26.371641 23.492734 26.439453 23.560547 C 26.507266 23.628359 26.580371 23.690293 26.660156 23.744141 C 26.819727 23.851836 27.001758 23.928867 27.197266 23.96875 C 27.29502 23.988691 27.39625 24 27.5 24 C 27.60375 24 27.70498 23.988691 27.802734 23.96875 C 28.487012 23.82916 29 23.22625 29 22.5 C 29 21.67 28.33 21 27.5 21 z M 38.5 21 C 38.39625 21 38.29502 21.011309 38.197266 21.03125 C 38.099512 21.051191 38.005781 21.079297 37.916016 21.117188 C 37.82625 21.155078 37.739941 21.202012 37.660156 21.255859 C 37.580371 21.309707 37.507266 21.371641 37.439453 21.439453 C 37.303828 21.575078 37.192969 21.736484 37.117188 21.916016 C 37.079297 22.005781 37.051191 22.099512 37.03125 22.197266 C 37.011309 22.29502 37 22.39625 37 22.5 C 37 22.60375 37.011309 22.70498 37.03125 22.802734 C 37.051191 22.900488 37.079297 22.994219 37.117188 23.083984 C 37.155078 23.17375 37.202012 23.260059 37.255859 23.339844 C 37.309707 23.419629 37.371641 23.492734 37.439453 23.560547 C 37.507266 23.628359 37.580371 23.690293 37.660156 23.744141 C 37.739941 23.797988 37.82625 23.844922 37.916016 23.882812 C 38.005781 23.920703 38.099512 23.948809 38.197266 23.96875 C 38.29502 23.988691 38.39625 24 38.5 24 C 38.60375 24 38.70498 23.988691 38.802734 23.96875 C 39.487012 23.82916 40 23.22625 40 22.5 C 40 21.67 39.33 21 38.5 21 z">
                                            </path>
                                        </svg></span>
                                </a>
                            </li>
                            <li class="social-footer flex h-[50px] w-[50px]">
                                <a href="">
                                    <span class="icon-social"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                            width="30" height="30" viewBox="0 0 30 30" style=" fill:currentColor;">
                                            <path
                                                d="M 9.9980469 3 C 6.1390469 3 3 6.1419531 3 10.001953 L 3 20.001953 C 3 23.860953 6.1419531 27 10.001953 27 L 20.001953 27 C 23.860953 27 27 23.858047 27 19.998047 L 27 9.9980469 C 27 6.1390469 23.858047 3 19.998047 3 L 9.9980469 3 z M 22 7 C 22.552 7 23 7.448 23 8 C 23 8.552 22.552 9 22 9 C 21.448 9 21 8.552 21 8 C 21 7.448 21.448 7 22 7 z M 15 9 C 18.309 9 21 11.691 21 15 C 21 18.309 18.309 21 15 21 C 11.691 21 9 18.309 9 15 C 9 11.691 11.691 9 15 9 z M 15 11 A 4 4 0 0 0 11 15 A 4 4 0 0 0 15 19 A 4 4 0 0 0 19 15 A 4 4 0 0 0 15 11 z">
                                            </path>
                                        </svg></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right flex flex-col text-center space-y-6 lg:py-[30px] md:py-[20px] py-[15px] ">
            <div class="line bg-gray-300 h-[2px]"></div>
            <span class="sub-heading uppercase">@ Copyright By TD MEdia</span>
        </div>
        <a id="backtop" class="backtop js-scroll-trigger" href="#top">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="64" height="64" viewBox="0 0 172 172"
                style=" fill:#26e07f;">
                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                    stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                    font-family="none" font-weight="none" font-size="none" text-anchor="none"
                    style="mix-blend-mode: normal">
                    <path d="M0,172v-172h172v172z" fill="none"></path>
                    <g fill="#1fb141">
                        <path
                            d="M21.5,21.5v129h64.5v-32.25v-64.5v-32.25zM86,53.75c0,17.7805 14.4695,32.25 32.25,32.25c17.7805,0 32.25,-14.4695 32.25,-32.25c0,-17.7805 -14.4695,-32.25 -32.25,-32.25c-17.7805,0 -32.25,14.4695 -32.25,32.25zM118.25,86c-17.7805,0 -32.25,14.4695 -32.25,32.25c0,17.7805 14.4695,32.25 32.25,32.25c17.7805,0 32.25,-14.4695 32.25,-32.25c0,-17.7805 -14.4695,-32.25 -32.25,-32.25z">
                        </path>
                    </g>
                </g>
            </svg>
        </a>
    </div>

</footer>