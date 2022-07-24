<section id="recruit-3" class="nw-ss2 lg:pb-[300px] md:pb-[800px] pb-[600px] relative">
    <div class="overlay bg-top bg-no-repeat bg-cover -z-10" style="background-color: rgb(220, 208, 194); background-image: url(&quot;<?php if ( get_field('background') ) {
               the_field('background');
            }?>&quot;);">
    </div>
    <div class="container">
        <div class="uppercase text-center h2 text-shadow text-white">Co hoi viec lam</div>
        <div class="wrapper-table overflow-x-auto mt-[25px]">
            <table class="table mx-auto">
                <thead>
                    <tr class="">
                        <th class="title-job">
                            <div class="bg-radial-1 p-[15px]">Vi tri ung tuyen </div>
                        </th>
                        <th>
                            <div class="bg-radial-1 p-[15px]">Dang tuyen</div>
                        </th>
                        <th>
                            <div class="bg-radial-1 p-[15px]">ngay het han</div>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    <?php if ( have_rows('recruit_table') ) : ?>

                    <?php while( have_rows('recruit_table') ) : the_row(); ?>


                    <tr class="table-row">
                        <td class="name-job">
                            <div class="bg-blue-900 p-[15px]"><?php the_sub_field('position'); ?></div>
                        </td>
                        <td>
                            <div class="bg-blue-900 p-[15px]">
                                <div class="btn-main">
                                    <?php if ( get_sub_field('link') ) : ?>
                                    <a class="uppercase" href="<?php echo get_sub_field('link'); ?>">Ứng tuyển</a>
                                    <?php endif; ?>

                                </div>
                            </div>

                        </td>
                        <td>
                            <div class="bg-blue-900 p-[15px]">
                                <?php if ( get_sub_field('date') ): ?>
                                <?php echo get_sub_field('date'); ?>
                                <?php endif; ?>
                            </div>
                        </td>
                    </tr>

                    <?php endwhile; ?>

                    <?php endif; ?>






                </tbody>
            </table>
        </div>
    </div>

</section>