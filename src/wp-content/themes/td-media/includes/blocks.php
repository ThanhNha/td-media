<?php
/*
 * Create blocks for site
 */
add_filter('block_categories_all', 'shin_block_category', 10, 2);
function shin_block_category($categories, $post)
{
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'shin-blocks',
                'title' => __('The Natives Blocks', 'shin-blocks'),
            ),
        )
    );
}


add_action('acf/init', 'shin_acf_init_block_types');
function shin_acf_init_block_types()
{
    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        acf_register_block_type(array(
            'name'              => 'Spacing',
            'title'             => __('Spacing'),
            'description'       => __('A custom Spacing block.'),
            'render_template'   => 'site-structure/blocks/spacing/index.php',
            'category'          => 'shin-blocks',
            'icon'              => 'admin-customizer',
            'keywords'          => array('core', 'space', 'spacing'),
            'mode'              => 'edit', // auto, preview, edit
        ));
            // Home page block
            acf_register_block_type(array(
                'name'              => 'homepage',
                'title'             => __('homepage'),
                'description'       => __('A custom homepage block.'),
                'render_template'   => 'site-structure/blocks/homepage/blockOne/index.php',
                'category'          => 'shin-blocks',
                'icon'              => 'admin-customizer',
                'keywords'          => array('core', 'space', 'homepage'),
                'mode'              => 'edit', // auto, preview, edit
            ));

            // About page block
            acf_register_block_type(array(
                'name'              => 'About section banner',
                'title'             => __('about section 1'),
                'description'       => __('A custom about block.'),
                'render_template'   => 'site-structure/blocks/about/about-ss1/index.php',
                'category'          => 'shin-blocks',
                'icon'              => 'admin-customizer',
                'keywords'          => array('core', 'space', 'about'),
                'mode'              => 'edit', // auto, preview, edit
            ));
            acf_register_block_type(array(
                'name'              => 'About section 2',
                'title'             => __('about section 2'),
                'description'       => __('A custom about block.'),
                'render_template'   => 'site-structure/blocks/about/about-ss2/index.php',
                'category'          => 'shin-blocks',
                'icon'              => 'admin-customizer',
                'keywords'          => array('core', 'space', 'about'),
                'mode'              => 'edit', // auto, preview, edit
            ));
            acf_register_block_type(array(
                'name'              => 'About section 3',
                'title'             => __('about section 3'),
                'description'       => __('A custom about block.'),
                'render_template'   => 'site-structure/blocks/about/about-ss3/index.php',
                'category'          => 'shin-blocks',
                'icon'              => 'admin-customizer',
                'keywords'          => array('core', 'space', 'about'),
                'mode'              => 'edit', // auto, preview, edit
            ));
            acf_register_block_type(array(
                'name'              => 'About section 4',
                'title'             => __('about section 4'),
                'description'       => __('A custom about block.'),
                'render_template'   => 'site-structure/blocks/about/about-ss4/index.php',
                'category'          => 'shin-blocks',
                'icon'              => 'admin-customizer',
                'keywords'          => array('core', 'space', 'about'),
                'mode'              => 'edit', // auto, preview, edit
            ));

              // Network page block

              acf_register_block_type(array(
                'name'              => 'Network section 1',
                'title'             => __('network section 1'),
                'description'       => __('A custom network block.'),
                'render_template'   => 'site-structure/blocks/network/network-ss1/index.php',
                'category'          => 'shin-blocks',
                'icon'              => 'admin-customizer',
                'keywords'          => array('core', 'space', 'network'),
                'mode'              => 'edit', // auto, preview, edit
            ));
              acf_register_block_type(array(
                'name'              => 'Network section 2',
                'title'             => __('network section 2'),
                'description'       => __('A custom network block.'),
                'render_template'   => 'site-structure/blocks/network/network-ss2/index.php',
                'category'          => 'shin-blocks',
                'icon'              => 'admin-customizer',
                'keywords'          => array('core', 'space', 'network'),
                'mode'              => 'edit', // auto, preview, edit
            ));

            
              // Solution page block

              acf_register_block_type(array(
                'name'              => 'Solution section 1',
                'title'             => __('solution section 1'),
                'description'       => __('A custom solution block.'),
                'render_template'   => 'site-structure/blocks/solution/solution-ss1/index.php',
                'category'          => 'shin-blocks',
                'icon'              => 'admin-customizer',
                'keywords'          => array('core', 'space', 'solution'),
                'mode'              => 'edit', // auto, preview, edit
            ));
            acf_register_block_type(array(
                'name'              => 'Solution section 2',
                'title'             => __('solution section 2'),
                'description'       => __('A custom solution block.'),
                'render_template'   => 'site-structure/blocks/solution/solution-ss2/index.php',
                'category'          => 'shin-blocks',
                'icon'              => 'admin-customizer',
                'keywords'          => array('core', 'space', 'solution'),
                'mode'              => 'edit', // auto, preview, edit
            ));
            acf_register_block_type(array(
                'name'              => 'Solution section 3',
                'title'             => __('solution section 3'),
                'description'       => __('A custom solution block.'),
                'render_template'   => 'site-structure/blocks/solution/solution-ss3/index.php',
                'category'          => 'shin-blocks',
                'icon'              => 'admin-customizer',
                'keywords'          => array('core', 'space', 'solution'),
                'mode'              => 'edit', // auto, preview, edit
            ));

                // Contact page block

                acf_register_block_type(array(
                    'name'              => 'Contact section 1',
                    'title'             => __('contact section 1'),
                    'description'       => __('A custom contact block.'),
                    'render_template'   => 'site-structure/blocks/contact/contact-ss1/index.php',
                    'category'          => 'shin-blocks',
                    'icon'              => 'admin-customizer',
                    'keywords'          => array('core', 'space', 'contact'),
                    'mode'              => 'edit', // auto, preview, edit
                ));
                acf_register_block_type(array(
                    'name'              => 'Contact section 2',
                    'title'             => __('contact section 2'),
                    'description'       => __('A custom contact block.'),
                    'render_template'   => 'site-structure/blocks/contact/contact-ss2/index.php',
                    'category'          => 'shin-blocks',
                    'icon'              => 'admin-customizer',
                    'keywords'          => array('core', 'space', 'contact'),
                    'mode'              => 'edit', // auto, preview, edit
                ));

                // Recruit page block
                acf_register_block_type(array(
                    'name'              => 'Recruit section 1',
                    'title'             => __('recruit section 1'),
                    'description'       => __('A custom recruit block.'),
                    'render_template'   => 'site-structure/blocks/recruit/recruit-ss1/index.php',
                    'category'          => 'shin-blocks',
                    'icon'              => 'admin-customizer',
                    'keywords'          => array('core', 'space', 'recruit'),
                    'mode'              => 'edit', // auto, preview, edit
                ));
                acf_register_block_type(array(
                    'name'              => 'Recruit section 2',
                    'title'             => __('recruit section 2'),
                    'description'       => __('A custom recruit block.'),
                    'render_template'   => 'site-structure/blocks/recruit/recruit-ss2/index.php',
                    'category'          => 'shin-blocks',
                    'icon'              => 'admin-customizer',
                    'keywords'          => array('core', 'space', 'recruit'),
                    'mode'              => 'edit', // auto, preview, edit
                ));
                acf_register_block_type(array(
                    'name'              => 'Recruit section 3',
                    'title'             => __('recruit section 3'),
                    'description'       => __('A custom recruit block.'),
                    'render_template'   => 'site-structure/blocks/recruit/recruit-ss3/index.php',
                    'category'          => 'shin-blocks',
                    'icon'              => 'admin-customizer',
                    'keywords'          => array('core', 'space', 'recruit'),
                    'mode'              => 'edit', // auto, preview, edit
                ));
    }
}