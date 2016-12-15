<?php
/*Main Template File */
    get_header();


 ?>

<section class="main-content">
    <?php
        // Start the loop
        if (have_posts()) :
            while (have_posts()) :
                the_post();
                        the_content();
            endwhile;
        endif;
    ?>


 </section>


 <?php  get_footer(); ?>
