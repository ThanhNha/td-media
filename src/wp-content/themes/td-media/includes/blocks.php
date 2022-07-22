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
    }
}