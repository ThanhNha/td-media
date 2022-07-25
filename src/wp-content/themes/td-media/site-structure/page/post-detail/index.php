<main id="single-post" class="nw-ss2 lg:pb-[300px] md:pb-[500px] pb-[400px] relative">
    <div class="overlay bg-top bg-no-repeat bg-cover -z-10" style="background-color: rgb(220, 208, 194); background-image: url(&quot;<?php if ( get_field('background_post_detail','option') ) {
               the_field('background_post_detail','option');
            }?>&quot;);">

    </div>

    <div class="container">
        <div class="grid grid-cols-12 lg:gap-[50px] gap-[25px]">
            <div class="xl:col-span-1 col-span-full relative min-h-[35px] xl:block hidden">
                <div class="lg:sticky absolute xl:top-[128px] text-center xl:w-[86px]">
                    <div class="flex xl:flex-col xl:space-y-[24px] xl:space-x-[0px] items-center xl:justify-center">
                        <div class="text-white text-left font-medium xl:block hidden">Chia sẻ
                        </div>
                        <div class="text-white font-medium xl:hidden mr-2">Chia sẻ:</div>
                        <div
                            class="xl:border-[1px] border-gray-100 xl:p-3 flex xl:space-y-[16px] xl:flex-col xl:space-x-0 space-x-[12px]">
                            <div class="cursor-pointer"><a target="_blank"
                                    href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink()?>">
                                    <div><svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M30 15C30 6.71488 23.2851 0 15 0C6.71488 0 0 6.71488 0 15C0 22.4883 5.48438 28.6934 12.6562 29.8184V19.3359H8.84763V15H12.6562V11.6953C12.6562 7.9365 14.8946 5.85938 18.3223 5.85938C19.9629 5.85938 21.6797 6.15234 21.6797 6.15234V9.84375H19.7871C17.9238 9.84375 17.3438 11.001 17.3438 12.1875V15H21.5039L20.8389 19.3359H17.3438V29.8184C24.5156 28.6934 30 22.4883 30 15Z"
                                                fill="#3399FF"></path>
                                            <path
                                                d="M20.8389 19.3359L21.5039 15H17.3438V12.1875C17.3438 11.001 17.9238 9.84375 19.7872 9.84375H21.6797V6.15234C21.6797 6.15234 19.9629 5.85938 18.3223 5.85938C14.8946 5.85938 12.6563 7.9365 12.6563 11.6953V15H8.84766V19.3359H12.6563V29.8184C13.4209 29.9385 14.2032 30 15 30C15.7969 30 16.5792 29.9385 17.3438 29.8184V19.3359H20.8389Z"
                                                fill="white"></path>
                                        </svg>
                                    </div>
                                </a></div>
                            <div class="h-[30px] rounded-full">
                                <div data-href="<?php the_permalink(); ?>" data-oaid="579745863508352884"
                                    data-layout="3" data-color="blue" data-customize="false" class="zalo-share-button"
                                    style="position: relative; display: inline-block; width: 30px; height: 30px;">
                                    <iframe id="a43ac794-34ef-430c-8d67-66c26dc998f3"
                                        name="a43ac794-34ef-430c-8d67-66c26dc998f3" frameborder="0" allowfullscreen=""
                                        scrolling="no" width="30px" height="30px"
                                        src="https://button-share.zalo.me/share_inline?id=a43ac794-34ef-430c-8d67-66c26dc998f3&amp;layout=3&amp;color=blue&amp;customize=false&amp;width=30&amp;height=30&amp;isDesktop=false&amp;url=https%3A%2F%2Fjam-simus.onrender.com%2Fbai-viet%2F5-kinh-nghiem-quan-trong-khi-lap-dat-khoa-cua-van-tay-cho-khach-san&amp;d=eyJ1cmwiOiJodHRwczovL2phbS1zaW11cy5vbnJlbmRlci5jb20vYmFpLXZpZXQvNS1raW5oLW5naGllbS1xdWFuLXRyb25nLWtoaS1sYXAtZGF0LWtob2EtY3VhLXZhbi10YXktY2hvLWtoYWNoLXNhbiJ9&amp;shareType=0"
                                        style="position: absolute; z-index: 99; top: 0px; left: 0px;"></iframe>
                                </div>
                            </div>
                            <div class="relative">
                                <div onclick="copyLink()" class="cursor-pointer w-[30px] h-[30px]">
                                    <div><svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="30" height="30" rx="15" fill="#D8DCE7"></rect>
                                            <path
                                                d="M14.5705 10.0383L16.4851 8.12304C16.8802 7.7275 17.3492 7.4137 17.8655 7.19956C18.3818 6.98542 18.9352 6.87513 19.4942 6.875C20.0531 6.87487 20.6066 6.9849 21.123 7.1988C21.6394 7.4127 22.1086 7.72629 22.5038 8.12164C22.899 8.51699 23.2125 8.98635 23.4263 9.50293C23.6401 10.0195 23.7501 10.5732 23.75 11.1323C23.7499 11.6914 23.6396 12.245 23.4256 12.7615C23.2115 13.2779 22.8978 13.7472 22.5024 14.1423L19.7673 16.8784C19.3722 17.2736 18.9031 17.5871 18.3869 17.801C17.8707 18.0149 17.3174 18.125 16.7586 18.125C16.1999 18.125 15.6466 18.0149 15.1304 17.801C14.6141 17.5871 14.1451 17.2736 13.75 16.8784"
                                                stroke="#545866" stroke-width="1.6" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path
                                                d="M15.4295 19.9617L13.5149 21.877C13.1198 22.2725 12.6508 22.5863 12.1345 22.8004C11.6182 23.0146 11.0648 23.1249 10.5058 23.125C9.94692 23.1251 9.39345 23.0151 8.87705 22.8012C8.36064 22.5873 7.89143 22.2737 7.49622 21.8784C7.101 21.483 6.78752 21.0136 6.57369 20.4971C6.35986 19.9805 6.24987 19.4268 6.25 18.8677C6.25013 18.3086 6.36038 17.755 6.57445 17.2385C6.78852 16.7221 7.10222 16.2528 7.49762 15.8577L10.2327 13.1216C10.6278 12.7264 11.0969 12.4129 11.6131 12.199C12.1293 11.9851 12.6826 11.875 13.2414 11.875C13.8001 11.875 14.3534 11.9851 14.8696 12.199C15.3858 12.4129 15.8549 12.7264 16.25 13.1216"
                                                stroke="#545866" stroke-width="1.6" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </div> <input id="input-copy" type="hidden">
                                <div
                                    class="absolute message-copy top-[0%] bg-blue-500 text-white duration-300 py-[4px] px-[12px] w-max left-[160%] opacity-0">
                                    Đã copy link
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xl:col-span-11 col-span-full">
                <div class="wrapper-main-single">
                    <div class="title-post-detail">
                        <h1 class="h2 uppercase text-shadow text-white"><?php the_title() ;?></h1>
                        <div class="line my-4"></div>
                        <div class="post-excerpt my-4 "><?php the_excerpt() ;?></div>
                    </div>
                    <div class="prose">

                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
            <div class="col-span-full relative min-h-[35px] xl:hidden block">
                <div class="lg:sticky absolute xl:top-[128px] text-center xl:w-[86px]">
                    <div class="flex xl:flex-col xl:space-y-[24px] xl:space-x-[0px] items-center xl:justify-center">
                        <div class="text-white text-left font-medium xl:block hidden">Chia sẻ
                        </div>
                        <div class="text-white font-medium xl:hidden mr-2">Chia sẻ:</div>
                        <div
                            class="xl:border-[1px] border-gray-100 xl:p-3 flex xl:space-y-[16px] xl:flex-col xl:space-x-0 space-x-[12px]">
                            <div class="cursor-pointer"><a target="_blank"
                                    href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink()?>">
                                    <div><svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M30 15C30 6.71488 23.2851 0 15 0C6.71488 0 0 6.71488 0 15C0 22.4883 5.48438 28.6934 12.6562 29.8184V19.3359H8.84763V15H12.6562V11.6953C12.6562 7.9365 14.8946 5.85938 18.3223 5.85938C19.9629 5.85938 21.6797 6.15234 21.6797 6.15234V9.84375H19.7871C17.9238 9.84375 17.3438 11.001 17.3438 12.1875V15H21.5039L20.8389 19.3359H17.3438V29.8184C24.5156 28.6934 30 22.4883 30 15Z"
                                                fill="#3399FF"></path>
                                            <path
                                                d="M20.8389 19.3359L21.5039 15H17.3438V12.1875C17.3438 11.001 17.9238 9.84375 19.7872 9.84375H21.6797V6.15234C21.6797 6.15234 19.9629 5.85938 18.3223 5.85938C14.8946 5.85938 12.6563 7.9365 12.6563 11.6953V15H8.84766V19.3359H12.6563V29.8184C13.4209 29.9385 14.2032 30 15 30C15.7969 30 16.5792 29.9385 17.3438 29.8184V19.3359H20.8389Z"
                                                fill="white"></path>
                                        </svg>
                                    </div>
                                </a></div>
                            <div class="h-[30px] rounded-full">
                                <div data-href="<?php the_permalink(); ?>" data-oaid="579745863508352884"
                                    data-layout="3" data-color="blue" data-customize="false" class="zalo-share-button"
                                    style="position: relative; display: inline-block; width: 30px; height: 30px;">
                                    <iframe id="849722f3-1ce3-4aa9-a1a1-538f5d6215a8"
                                        name="849722f3-1ce3-4aa9-a1a1-538f5d6215a8" frameborder="0" allowfullscreen=""
                                        scrolling="no" width="30px" height="30px"
                                        src="https://button-share.zalo.me/share_inline?id=849722f3-1ce3-4aa9-a1a1-538f5d6215a8&amp;layout=3&amp;color=blue&amp;customize=false&amp;width=30&amp;height=30&amp;isDesktop=true&amp;url=https%3A%2F%2Fjam-simus.onrender.com%2Fbai-viet%2F5-kinh-nghiem-quan-trong-khi-lap-dat-khoa-cua-van-tay-cho-khach-san&amp;d=eyJ1cmwiOiJodHRwczovL2phbS1zaW11cy5vbnJlbmRlci5jb20vYmFpLXZpZXQvNS1raW5oLW5naGllbS1xdWFuLXRyb25nLWtoaS1sYXAtZGF0LWtob2EtY3VhLXZhbi10YXktY2hvLWtoYWNoLXNhbiJ9&amp;shareType=0"
                                        style="position: absolute; z-index: 99; top: 0px; left: 0px;"></iframe>
                                </div>
                            </div>
                            <div class="relative">
                                <div class="cursor-pointer w-[30px] h-[30px]">
                                    <div><svg width="30" height="30" viewBox="0 0 30 30" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <rect width="30" height="30" rx="15" fill="#D8DCE7"></rect>
                                            <path
                                                d="M14.5705 10.0383L16.4851 8.12304C16.8802 7.7275 17.3492 7.4137 17.8655 7.19956C18.3818 6.98542 18.9352 6.87513 19.4942 6.875C20.0531 6.87487 20.6066 6.9849 21.123 7.1988C21.6394 7.4127 22.1086 7.72629 22.5038 8.12164C22.899 8.51699 23.2125 8.98635 23.4263 9.50293C23.6401 10.0195 23.7501 10.5732 23.75 11.1323C23.7499 11.6914 23.6396 12.245 23.4256 12.7615C23.2115 13.2779 22.8978 13.7472 22.5024 14.1423L19.7673 16.8784C19.3722 17.2736 18.9031 17.5871 18.3869 17.801C17.8707 18.0149 17.3174 18.125 16.7586 18.125C16.1999 18.125 15.6466 18.0149 15.1304 17.801C14.6141 17.5871 14.1451 17.2736 13.75 16.8784"
                                                stroke="#545866" stroke-width="1.6" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path
                                                d="M15.4295 19.9617L13.5149 21.877C13.1198 22.2725 12.6508 22.5863 12.1345 22.8004C11.6182 23.0146 11.0648 23.1249 10.5058 23.125C9.94692 23.1251 9.39345 23.0151 8.87705 22.8012C8.36064 22.5873 7.89143 22.2737 7.49622 21.8784C7.101 21.483 6.78752 21.0136 6.57369 20.4971C6.35986 19.9805 6.24987 19.4268 6.25 18.8677C6.25013 18.3086 6.36038 17.755 6.57445 17.2385C6.78852 16.7221 7.10222 16.2528 7.49762 15.8577L10.2327 13.1216C10.6278 12.7264 11.0969 12.4129 11.6131 12.199C12.1293 11.9851 12.6826 11.875 13.2414 11.875C13.8001 11.875 14.3534 11.9851 14.8696 12.199C15.3858 12.4129 15.8549 12.7264 16.25 13.1216"
                                                stroke="#545866" stroke-width="1.6" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </div>
                                </div> <input id="input-copy" type="hidden">
                                <div
                                    class="message-copy absolute top-[0%] bg-blue-500 text-white duration-300 py-[4px] px-[12px] w-max left-[160%] opacity-0">
                                    Đã copy link
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="h-[1px] bg-gray-300 xl:my-[48px] md:my-[34px] my-[24px]">
        <section>
            <div class="wrapper-post-relate lg:my-5 mb:my-4 my-2">
                <div class="post-relate-title">
                    <h2 class="title h2 font-bold ">Bài viết liên quan</h2>
                    <div class="line"></div>
                </div>
                <div class="wrapper-blogs">
                    <?php
                $args = array(  
                    'post_status'    => 'publish',
                    'posts_per_page' => 8, 
                    'orderby'        => 'title', 
                    'order'          => 'ASC', 
                );
            $loop = new WP_Query( $args );?>
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <!-- do something -->
                    <?php
             $size = 'large';
            $image = get_post_thumbnail_id();
            $title_blog = get_the_title($loop->ID);
            ?>
                    <!-- Code html in here -->
                    <div class="card-news md:mx-4 mx-2">
                        <div class="aspect-w-3 aspect-h-2 card-news-img">
                            <a href="<?php the_permalink($loop->ID)?>" class="blog-thumb animation__image">
                                <?php 
                    if( $image ) {
                            echo wp_get_attachment_image( $image, $size, "", array( "class" => "img-fluid" ) );
                        }
                    ?>
                            </a>
                        </div>
                        <div class="blog-title">
                            <div class="py-4">
                                <a class="text-white font-bold uppercase line-clamp-2"
                                    href="<?php the_permalink($loop->ID)?>">
                                    <p><?php echo $title_blog; ?></p>
                                </a>
                            </div>

                        </div>
                    </div>
                    <?php endwhile;
            wp_reset_postdata(); ?>
                </div>
            </div>
        </section>

    </div>
    <script src="https://sp.zalo.me/plugins/sdk.js"></script>
</main>