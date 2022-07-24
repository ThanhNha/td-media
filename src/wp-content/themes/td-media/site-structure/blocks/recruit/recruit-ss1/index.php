<section id="recruit-1" class="recruit-1 z-10 ">
    <div class="w-full ">
        <?php
       if ( get_field('background') ) {
        $attachment_id = get_field('background');
        $size = "full"; // (thumbnail, medium, large, full or custom size)
        echo   wp_get_attachment_image( $attachment_id, size, "", array( "class" => "picture-cover object-cover"));
       }
       ?>

    </div>
</section>