<section id="ab-ss1" class="ab-ss1 relative">
    <div class="w-full">
        <?php
        if ( get_field('background') ) {
            $attachment_id = get_field('background');
            $size = "full"; // (thumbnail, medium, large, full or custom size)
            echo wp_get_attachment_image( $attachment_id, size , "", array( "class" => "w-full" ));
        }
        ?>

    </div>
    <div class="absolute bottom-10 lg:w-1/2 md:w-2/3 w-full left-1/2 -translate-x-1/2">
        <div class="flex flex-col lg:space-y-4 md:space-y-3 space-y-2 text-center">
            <h3 class="block h3 fade-left"><?php if ( get_field('description') ) : ?>
                <?php echo get_field('description'); ?>
                <?php endif; ?>
            </h3>

        </div>

    </div>
</section>