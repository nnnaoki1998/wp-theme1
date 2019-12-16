<?php get_header(); ?>
<main>
    <div class="white_wall news_white_wall">
        <section id="cat_news">
            <h1 class="caveat display-3 text-center">NEWS</h1>
        </section>
        <?php
        if(have_posts()):
            while(have_posts()): the_post();
        ?>
        <section class="single_news row mx-0 my-5">
            <div class="information col-sm-3 text-center text-sm-left p-0 pl-sm-2 mb-4">
                <p class="m-0 d-inline d-sm-block">UPDATE</p>
                <p class="m-0 d-inline d-sm-block">
                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y/m/d'); ?></time>
                </p>
                <span class="d-sm-none">,</span>
                <p class=" d-inline d-sm-block"><?php echo get_post_time('l'); ?></p>
                <hr color="#000000" class="information_line ml-0">
                <div class="social d-none d-sm-block">
                    <p class="share"><i class="fas fa-share-alt" style="font-size: 200%;"></i></p>
                    <p class="mr-1 m-sm-0">
                        <a href="http://www.facebook.com/share.php?u=<?php echo get_current_link();?>" target="_blank"
                            class="share_link text-center mb-2">
                            share on facebook
                        </a>
                    </p>
                    <p class="ml-1 m-sm-0">
                        <a href="http://twitter.com/share?url=<?php echo get_current_link();?>" target="_blank"
                            class="share_link text-center">
                            share on twitter
                        </a>
                    </p>
                </div>
            </div>
            <div class="entry_area col-sm-9">
                <div class="titlebox">
                    <p><?php the_title(); ?></p>
                </div>
                <div class="m-0">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="d-sm-none w-100 text-center mt-4">
                <hr color="#000000" class="information_line ml-0">
                <div class="social">
                    <p class="share"><i class="fas fa-share-alt" style="font-size: 200%;"></i></p>
                    <p class="d-inline mr-1 m-sm-0">
                        <a href="" class="share_link text-center">
                            share on facebook
                        </a>
                    </p>
                    <p class="d-inline ml-1 m-sm-0">
                        <a href="" class="share_link text-center">
                            share on twitter
                        </a>
                    </p>
                </div>
            </div>
        </section>
        <?php
            endwhile;
        endif;
        ?>
        <div class="single-navi">
            <ul class="single-menu list-unstyled row m-0 text-center">
                <li class="single-nav-previous col-4 p-0">
                    <a href="">
                        <i class="fas fa-arrow-left left-icon"></i>
                        <span class="d-none d-sm-inline">PREV ENTRY</span>
                    </a>
                </li>
                <li class="single-back_list col-4 p-0">
                    <a href="<?php echo home_url(); ?>/news">
                        <span class="d-none d-sm-inline">ALL ENTRY</span>
                        <i class="fas fa-bars right-icon"></i>
                    </a>
                </li>
                <li class="single-nav-next col-4 p-0">
                    <a href="">
                        <span class="d-none d-sm-inline">NEXT ENTRY</span>
                        <i class="fas fa-arrow-right right-icon"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div id="php_single_navigation" class="d-none">
            <div id="prev_single_navigation"><?php previous_post_link(); ?></div>
            <div id="next_single_navigation"><?php next_post_link(); ?></div>
        </div>
        <?php
        $paged = (int) get_query_var('paged');
        $args = array(
            'posts_per_page' => get_option('posts_per_page'),
            'paged' => $paged,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_type' => 'post',
            'post_status' => 'publish'
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if($the_query->have_posts()): ?>
        <section id="recent" class="px-sm-5 my-5 y-center">
            <div id="recent_inner">
                <h1 class="caveat display-3 text-center text-md-left">RECENT</h1>
                <ul class="news_list list-unstyled row m-0 mx-3 mx-xl-5 text-center">
                    <?php $i = 0; ?>
                    <?php while($the_query->have_posts()): $the_query->the_post(); ?>
                    <?php
                    $i++;
                    if($i>4) {break;}
                    $classes = ['news','col-6','col-md-3','wow','fadeIn'];
                    $postNum = 'post'.$i;
                    array_push($classes,$postNum);
                    switch($i) {
                        case 1: $delay = 0.4; break;
                        case 2: $delay = 0.2; break;
                        case 3: $delay = 0.3; break;
                        case 4: $delay = 0.5; break;
                    }
                    ?>
                    <li id="post-<?php the_ID(); ?>" <?php post_class($classes); ?> data-wow-duration="1s"
                        data-wow-delay="<?php print $delay; ?>s">
                        <a href="<?php the_permalink(); ?>" class="post_link">
                            <figure class="post_img mb-0">
                                <?php if(has_post_thumbnail()):
                                the_post_thumbnail();
                                else: ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/square_logo.jpg">
                                <?php endif; ?>
                            </figure>
                            <div class="post_info">
                                <p class="m-0">
                                    <time datatime="<?php the_time('Y-m-d'); ?>">
                                        <?php echo get_post_time('Y/m/d'); ?>
                                    </time>
                                </p>
                                <p><?php the_title(); ?></p>
                            </div>
                        </a>
                    </li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </section>
        <?php endif; ?>
    </div>
</main>
<div id="scroll_top" class="text-center">
    <a href="#" class="y-center">
        <div><i class="fas fa-arrow-up"></i></div>
    </a>
</div>
<?php get_footer(); ?>