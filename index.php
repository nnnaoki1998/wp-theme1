<?php get_header(); ?>
<main>
    <section id="index_top_img" class="top_image text-center y-center slider">
        <div id="index_top_img_inner" class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h1 class="text-white">居酒屋</h1>
            <p class="text-white px-3">アットホームな雰囲気の中で自慢の料理をお楽しみください</p>
        </div>
    </section>
    <div class="white_wall">
        <section id="about" class="scroll_to row m-0">
            <div class="lead_area col-1-1 col-md-3-5 y-center text-center">
                <div id="about_lead_area">
                    <div class="lead_area_inner mb-5 px-3">
                        <h1 class="caveat display-3">ABOUT</h1>
                        <div class="about_img inner_img d-md-none mx-auto mb-3 wow fadeIn" data-wow-duration="1s"
                            data-wow-delay="0.2s"></div>
                        <p>居酒屋について</p>
                        <div class="is-divider mx-auto mb-3"></div>
                        <p>居酒屋は長崎の新鮮な魚を中心としたお店。</p>
                        <div class="is-divider mx-auto mb-3"></div>
                        <p>長崎の美味しいお魚を多くの人に食べていただきたいという思いからXX年にお店をオープン。</p>
                    </div>
                    <a href="<?php echo home_url(); ?>/about" class="link_botton px-5 py-3">
                        <span class="link_botton_text px-5 mx-4">ABOUT</span>
                        <span class="link_botton_arrow"><i class="fas fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
            <div class="about_img col-0-1 col-md-2-5 d-none d-md-block wow fadeIn" data-wow-duration="1s"
                data-wow-delay="0.2s"></div>
        </section>
        <section id="food_menu" class="row m-0">
            <div class="food_img col-0-1 col-md-2-5 d-none d-md-block wow fadeIn" data-wow-duration="1s"
                data-wow-delay="0.2s"></div>
            <div class="lead_area col-1-1 col-md-3-5 y-center text-center">
                <div id="food_menu_lead_area">
                    <div class="lead_area_inner mb-5 px-3">
                        <h1 class="caveat display-3">MENU</h1>
                        <div class="food_img inner_img d-md-none mx-auto mb-3 wow fadeIn" data-wow-duration="1s"
                            data-wow-delay="0.2s"></div>
                        <p>メニューのご紹介</p>
                        <div class="is-divider mx-auto mb-3"></div>
                        <p>季節ごとに変わるメニューをお楽しみください。</p>
                        <div class="is-divider mx-auto mb-3"></div>
                        <p>肉や野菜などの魚料理以外のものも多く準備しております。</p>
                    </div>
                    <a href="<?php echo home_url(); ?>/menu" class="link_botton px-5 py-3">
                        <span class="link_botton_text px-5 mx-4">MENU</span>
                        <span class="link_botton_arrow"><i class="fas fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
        </section>
        <?php if(have_posts()): ?>
        <section id="news" class="px-sm-5 y-center">
            <div id="news_inner">
                <h1 class="caveat display-3 text-center text-md-left">NEWS</h1>
                <ul class="news_list list-unstyled row m-0 mx-3 mx-xl-5 text-center">
                    <?php $i = 0; ?>
                    <?php while(have_posts()): the_post(); ?>
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
                <div class="text-center mt-4">
                    <a href="<?php echo home_url(); ?>/news" class="link_botton px-5 py-3">
                        <span class="link_botton_text px-5 mx-4">
                            <span class="d-none d-sm-inline">ALL</span>
                            NEWS
                        </span>
                        <span class="link_botton_arrow"><i class="fas fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
        </section>
        <?php endif; ?>
    </div>
</main>
<div id="scroll_dir" class="text-center">
    <a href=".scroll_to" class="text-white">
        <p class="quicksand m-0">SCROLL</p>
        <i class="fas fa-long-arrow-alt-down m-0"></i>
    </a>
</div>
<div id="scroll_top" class="text-center">
    <a href="#" class="y-center">
        <div><i class="fas fa-arrow-up"></i></div>
    </a>
</div>
<?php get_footer(); ?>