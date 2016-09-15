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

<section id="fund-list" class="fund-list padding-vertical">
    <div class="container" style="width:70%;">
        <header class="fund-list-title font-white">
            <h3>成大行動向誰募資 <br>Who to fund?</h3>
        </header>
        <div class="row fund font-white font-zh">
            <div class="col-md-6">
                <ul>
                <?php
                $args = array( 'post_type' => 'setup','tag' => 'fund-percent' );
                $loop = new WP_Query( $args );
                $procedure_bg = array();
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <li data-percent = "<?php the_field('student-percent');?>" ><p>1 <br> 在校學生 <br> Students</p></li>
                    <li data-percent = "<?php the_field('alumni-percent');?>" ><p>2 <br> 畢業校友 <br> Alumni</p></li>
                    <li data-percent = "<?php the_field('teacher-percent');?>" ><p>3 <br> 老師 <br> Teachers</p></li>
                    <li data-percent = "<?php the_field('staffs-percent');?>" ><p>4 <br> 行政人員 <br> Staffs</p></li>
                    <li data-percent = "<?php the_field('community-percent');?>" ><p>5 <br> 校外人士 <br> Community</p></li>
                </ul>
                <?php endwhile; ?>
            </div>
            <div class="col-md-6">
                <div id="pieChart" class="text-center"></div>
            </div>
        </div>
    </div>
</section>

<section id="rally" class="rally padding-vertical">
    <img src="<?php bloginfo('template_directory') ?>/assets/image/rally_v2.png" alt=""> 
</section>
<?php get_footer(); ?>