<?php get_header(); ?>
<main>
    <div class="white_wall news_white_wall">
        <section id="cat_news">
            <h1 class="caveat display-3 text-center">NEWS</h1>
        </section>
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
        <section class="news_content mx-auto">
            <?php while($the_query->have_posts()): $the_query->the_post(); ?>
            <?php $classes = ['news','row','mx-0','wow','fadeIn']; ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class($classes); ?> data-wow-duration="1s"
                data-wow-delay="0.2s">
                <a href="<?php the_permalink(); ?>" class="news_img_link col-12 col-sm-3 px-5 p-sm-0">
                    <figure class="news_img m-0">
                        <?php if(has_post_thumbnail()):
                        the_post_thumbnail();
                        else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/square_logo.jpg">
                        <?php endif; ?>
                    </figure>
                </a>
                <div class="postinfo col-12 col-sm-9 text-center text-sm-left p-3">
                    <div>
                        <p class="date">
                            <time datatime="<?php the_time('Y-m-d'); ?>">
                                <?php echo get_post_time('Y/m/d,l'); ?>
                            </time>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="post_a">
                            <p><?php the_title(); ?></p>
                        </a>
                        <div class="postinfo_content">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                </div>
            </article>
            <?php endwhile; ?>
        </section>
        <?php else: ?>
        <div class="text-center my-5">
            <p>記事はありません。</p>
        </div>
        <?php endif; ?>
        <div class="wp-pagenavi mx-auto overflow-hidden">
            <span class="nav-previous w-50 text-center float-left">
                <a href="" class="wp-pagenavi_link_prev y-center">
                    <span class="link_arrow_left"><i class="fas fa-arrow-left"></i></span>
                    PREV PAGE
                </a>
            </span>
            <span class="nav-next w-50 text-center float-right">
                <a href="" class="wp-pagenavi_link_next y-center">
                    NEXT PAGE
                    <span class="link_arrow_right"><i class="fas fa-arrow-right"></i></span>
                </a>
            </span>
        </div>
        <div id="php_page_navi" class="d-none">
            <?php
            $page_arg = array(
                'current' => max( 1, $paged ),
                'total' => $the_query->max_num_pages,
            );
            echo paginate_links($page_arg);
            ?>
        </div>
    </div>
</main>
<div id="scroll_top" class="text-center">
    <a href="#" class="y-center">
        <div><i class="fas fa-arrow-up"></i></div>
    </a>
</div>
<?php get_footer(); ?>