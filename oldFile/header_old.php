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
        <!-- Main Quote -->
        <div class="quote font-white bg-orangeRed">
            <div class="quote-content quote-zh font-zh margin-vertical">
                <p><?php the_field('main-quote-zh');?></p>
            </div>
            <div class="quote-content quote-en font-en margin-vertical">
                <p><?php the_field('main-quote-en');?></p>
            </div>
            <div class="quote-speaker">
                <p><?php the_field('quote-speaker');?></p>
            </div>
        </div>
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
<!-- Section Quote -->
<section id="quote-list" class="quote-list bg-orangeRed">
    <!-- <header class="section-title">
        <h2>Voice</h2>
    </header> -->
    <div class="grid">
        
        <div class="quote-box padding-vertical">
            <div class="quote font-dark bg-orangeRed" style="background:gray;">
                <div class="quote-content quote-zh font-zh margin-vertical">
                    <p>「成大生不再單單僅有團結這個優點」</p>
                </div>
                <div class="quote-content quote-en font-en margin-vertical">
                    <p>“Students of NCKU won't have only the virtue of sticking together”</p>
                </div>
                <div class="quote-speaker">
                    <p>——共同創辦人陳勁宇</p>
                </div>
            </div>
        </div>
        
        <div class="quote-box padding-vertical">
            <div class="quote font-dark bg-orangeRed" style="background:gray;">
                <div class="quote-content quote-zh font-zh margin-vertical">
                    <p>「成大生不再單單僅有團結這個優點」</p>
                </div>
                <div class="quote-content quote-en font-en margin-vertical">
                    <p>“Students of NCKU won't have only the virtue of sticking together”</p>
                </div>
                <div class="quote-speaker">
                    <p>——共同創辦人陳勁宇</p>
                </div>
            </div>
        </div>
        
        <div class="quote-box padding-vertical">
            <div class="quote font-dark bg-orangeRed" style="background:gray;">
                <div class="quote-content quote-zh font-zh margin-vertical">
                    <p>「成大生不再單單僅有團結這個優點」</p>
                </div>
                <div class="quote-content quote-en font-en margin-vertical">
                    <p>“Students of NCKU won't have only the virtue of sticking together”</p>
                </div>
                <div class="quote-speaker">
                    <p>——共同創辦人陳勁宇</p>
                </div>
            </div>
        </div>
        
        <div class="quote-box padding-vertical">
            <div class="quote font-dark bg-orangeRed" style="background:gray;">
                <div class="quote-content quote-zh font-zh margin-vertical">
                    <p>「成大生不再單單僅有團結這個優點」</p>
                </div>
                <div class="quote-content quote-en font-en margin-vertical">
                    <p>“Students of NCKU won't have only the virtue of sticking together”</p>
                </div>
                <div class="quote-speaker">
                    <p>——共同創辦人陳勁宇</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section Project-list -->
<section id="project-list" class="project-list">
    <div class="container" style="width:70%;">
        <header class="section-title text-center">
            <h2>專案類型<br>Project Categories</h2>
        </header>
        <div class="row">
            <?php
            $args = array( 'post_type' => 'setup','tag' => 'project-categories' );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="col-md-4">
                <a href="#">
                    <div class="project-box" style="background-image:url(<?php the_field('fund');?>);">
                        <div class="project" style="height:200px;">
                            <p>Fund/Scholarship
                            <br>基金/獎學金</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="project-box" style="background-image:url(<?php the_field('students');?>); ">
                        <div class="project" style="height:200px;">
                            <p>Student Initiative <br>學生發起</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="project-box" style="background-image:url(<?php the_field('public');?>); ">
                        <div class="project" style="height:200px;">
                            <p>Public Interest <br>公共議題</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="project-box" style="background-image:url(<?php the_field('culture');?>);">
                        <div class="project" style="height:200px;">
                            <p>Public Interest <br>文化與傳統</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="project-box" style="background-image:url(<?php the_field('movement');?>); ">
                        <div class="project" style="height:200px;">
                            <p>Movement <br>思潮</p>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="#">
                    <div class="project-box" style="background-image:url(<?php the_field('others');?>); ">
                        <div class="project" style="height:200px;">
                            <p>Others <br>其他</p>
                        </div>
                    </div>
                </a>
            </div>
            <?php endwhile; ?>
        </div>
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
<section id="project-procedure" class="project-procedure font-white">
    <div class="mask">
        <div class="container">
            <header class="section-title text-center">
                <h2>身為成大校園一部分的你，要怎麼去參與跟提案? <br>
                How to run a project in NCKU? Take the tour.</h2>
            </header>
                <?php
                $args = array( 'post_type' => 'setup','tag' => 'run-a-project' );
                $loop = new WP_Query( $args );
                $procedure_bg = array();
                while ( $loop->have_posts() ) : $loop->the_post(); 
                    for( $i=1 ; $i<8 ; $i++){
                        $field_name = 'slider-'.$i;
                        $bg_item = get_field($field_name);
                        array_push($procedure_bg, $bg_item );
                    }
               endwhile; ?>
            <div class="procedure-list">
                <ul>
                    <li>
                        <div class="procedure-list-item procedure-list-item-active" data-slide="<?php echo $procedure_bg[0]; ?>">
                            <p>
                                1 一個有益於公眾的好點子 <br>
                                An idea for public good.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="procedure-list-item" data-slide="<?php echo $procedure_bg[1]; ?>">
                            <p>
                                2 組織團隊 <br> 
                                A team / A person
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="procedure-list-item" data-slide="<?php echo $procedure_bg[2]; ?>">
                            <p>
                                3 企劃書 <br>
                                One page proposal.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="procedure-list-item" data-slide="<?php echo $procedure_bg[3]; ?>">
                            <p>
                                4 工作營 <br>
                                Workshop ×3.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="procedure-list-item" data-slide="<?php echo $procedure_bg[4]; ?>">
                            <p>
                                5 導師 <br>
                                A mentor.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="procedure-list-item" data-slide="<?php echo $procedure_bg[5]; ?>">
                            <p>
                                6 評量 <br>
                                A final evaluation
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="procedure-list-item" data-slide="<?php echo $procedure_bg[6]; ?>">
                            <p>
                                7 募資上線 <br>
                                Go online on WeBacker.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            <footer class="procedure-action margin-vertical">
                <p>
                    你有任何想要改變的事？ <br>
                    你有任何想要發起的事？ <br>
                    你有任何想幫成功大學做的事？ <br>
                    你現在正在做一些事，但是明年你不知道要怎麼延續？ <br>
                    你代表著一群學生的意見，要幫大家找出路？ <br>
                    你是年輕校友，也有想要參與成大行動的意願？ <br>
                    現在就是時候把你的好點子公諸於世！ <br>
                </p>
            </footer>
        </div>
    </div>
</section>
<!-- Section Project-online -->
<section id="project-online" class="project-online">
    <div class="container" style="width:70%;">
        <div class="section-title text-center">
            <h2>已上線專案<br>Pojects on WeBacker:</h2>
        </div>
        <div class="row">
            <?php
            $args = array( 'post_type' => 'projects-online', 'posts_per_page' => 10 );
            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <?php $imglink = get_field('background-image'); ?>
            <div class="col-md-4">
                <a href="<?php the_field('link');?>">
                    <div class="project-box" style="background-image:url('<?php echo $imglink; ?>')">
                        <div class="project" style="height:200px;">
                            <!-- <p><?php the_title(); ?></p> -->
                        </div>
                    </div>
                </a>
            </div>
            <?php endwhile;  ?>
        </div>
    </div>
</section>
<section id="rally" class="rally padding-vertical">
    <img src="<?php bloginfo('template_directory') ?>/assets/image/rally.png" alt=""> 
</section>
<?php get_footer(); ?>