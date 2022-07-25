<div id="overlay" class="overlay"></div>
<header id="header" class="header">
    <div class="wrapper w-full flex flex-col justify-between">
        <div class="nav flex justify-between items-center">
            <!-- logo here -->
            <div class="w-[35%]">
                <a href="#"><span class="p1 font-bold text-gray-200">TD</span></a>
            </div>
            <!-- hamburger here -->
            <div class=" relative overflow-hidden lg:w-[45px] lg:h-[45px] md:w-[40px] md:h-[40px] w-[35px] h-[35px] ">
                <div class="w-full h-full rounded-full border-[2px] border-white flex items-center justify-center">
                    <div class="hamburger-menu lg:w-[70%] md:w-[90%] w-[80%]" id="hamburger-menu">
                        <div class="menu-bar1"></div>
                        <div class="menu-bar2"></div>
                        <div class="menu-bar3"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="line absolute bottom-0 w-[90%] left-auto right-auto"></div>

</header>
<!-- sidebar here -->
<div id="sidebar" class="sidebar">
    <div class="sidebar-main relative lg:px-10 md:px-7 px-5 h-full flex flex-col items-start justify-center z-10">
        <div class="h-[70%] flex items-end ">
            <ul class="menu-items w-full overflow-hidden flex flex-col">
                <?php if ( have_rows('menu_main','option') ) : ?>
                <?php while( have_rows('menu_main','option') ) : the_row();
                $menu_name = get_sub_field('menu_name');
                $menu_link = get_sub_field('menu_link');
                ?>
                <li
                    class="group flex items-center relative overflow-hidden  <?php if(get_permalink()== $menu_link){echo 'active';}  if( have_rows('sub_menu' ,'option') ){echo 'has-sub';} ?>">
                    <div class="icon-menu lg:h-[35px] h-[30px] flex space-x-2 duration-500">
                        <div class="icon-1 w-[7px] h-full bg-pink"></div>
                        <div class="icon-1 w-[15px] h-full bg-pink"></div>
                    </div>
                    <a class=" group-hover:pl-[35px] block h2 uppercase font-bold group-hover:text-white duration-500"
                        href="<?php echo $menu_link;?>"> <?php echo $menu_name;?></a>
                </li>

                <?php endwhile; ?>

                <?php endif; ?>
            </ul>
        </div>
        <!-- menu bottom here -->
        <div class="h-[30%] w-full overflow-hidden relative">
            <!-- sub menu -->
            <?php if( have_rows('sub_menu' ,'option') ): ?>

            <div class="sub-menu-wrapper ">
                <div class="flex flex-col space-y-4 justify-end items-end lg:w-[90%] md:w-[85%] w-full">
                    <span class="h2 font-bold uppercase">Service</span>
                    <ul class="sub-menu w-full overflow-hidden flex flex-col items-end lg:space-y-4 space-y-2">
                        <?php while( have_rows('sub_menu','option') ): the_row(); 
                        $sub_name = get_sub_field('sub_name');
                        $sub_link = get_sub_field('sub_link');
                    ?>
                        <li class="group flex items-center relative overflow-hidden active">
                            <a class="group-hover:pr-[35px] block h3 uppercase font-bold group-hover:text-white duration-500"
                                href="<?php echo  $sub_link?>">
                                <?php echo   $sub_name?>
                            </a>
                            <div class="icon-menu lg:h-[30px] h-[25px] flex space-x-2 duration-500">
                                <div class="icon-1 w-[7px] h-full bg-pink"></div>
                                <div class="icon-1 w-[15px] h-full bg-pink"></div>
                            </div>
                        </li>
                        <?php endwhile;?>
                    </ul>
                </div>
            </div>

            <?php endif; ?>
            <div class="copyright absolute left-[0%] bottom-[15%]">
                <div class="flex flex-col space-x-2">
                    <span class="p1">Text here</span>
                    <span class="p1">&copy; 2022 </span>
                </div>
            </div>

        </div>
    </div>
    <!-- Background transition animation  -->
    <div class="absolute top-0 left-0 bottom-0 w-full h-full pointer-events-none flex flex-col items-start ">
        <div class="opacity-[80%] bg-blur-1 w-full flex-1"></div>
        <div class="opacity-[80%] bg-blur-2 w-full flex-1"></div>
        <div class="opacity-[80%] bg-blur-3 w-full flex-1"></div>
    </div>
</div>