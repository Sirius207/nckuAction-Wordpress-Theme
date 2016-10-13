<?php get_header(); ?>
<section id="banner" class="banner">
    <?php the_widget('Carousel' ); ?>
</section>
<!-- Section About -->
<section id="about" class="about">
    <div class="container">
        <div class="video text-center padding-vertical">
            <iframe src="https://www.youtube.com/embed/sxjko5VZrxw" frameborder="0" allowfullscreen></iframe>
        </div>
        <?php
            $args = array( 'post_type' => 'setup','tag' => 'about-us' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
        <div class="description">
            <div class="description-content description-zh font-zh margin-vertical">
                <p>
                    <?php the_field('description-zh');?>
                </p>
            </div>  
            <div class="description-content description-en font-en margin-vertical">
                <p>
                    <?php the_field('description-en');?>
                </p>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</section>

<section id="rally" class="rally padding-vertical text-center">
    <img src="<?php bloginfo('template_directory') ?>/assets/image/rally_v2.png" alt=""> 
</section>
<?php get_footer(); ?>