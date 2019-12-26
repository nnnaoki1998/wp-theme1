<?php
function outputMenu($menu_category) {
    ?>
<tbody>
    <?php
    if (have_posts()):
        while (have_posts()):the_post();
            if (get_field('menu_category') == $menu_category):
    ?>
    <tr>
        <td><?php the_field('menu_name'); ?></td>
        <td><?php the_field('menu_price'); ?>YEN</td>
    </tr>
    <?php
                endif;
            endwhile;
        endif;
    ?>
</tbody>
<?php
}
?>

<?php get_header(); ?>
<main>
    <div id="content" style="padding-top: 60px;">
        <div class="bg_menu">
            <section id="menubook" class="px-md-70 px-lg-140">
                <h1 class="caveat display-3 text-center pt-5 pb-4">MENU</h1>
                <ul class="text-center row m-0 list-unstyled">
                    <li id="appetizer_nav" class="menu_nav_item col-1-5 active_nav">
                        APPETIZER
                    </li>
                    <li id="lunch_nav" class="menu_nav_item col-1-5">
                        LUNCH
                    </li>
                    <li id="dinner_nav" class="menu_nav_item col-1-5">
                        DINNER
                    </li>
                    <li id="drink_nav" class="menu_nav_item col-1-5">
                        DRINK
                    </li>
                    <li id="dessert_nav" class="menu_nav_item col-1-5">
                        DESSERT
                    </li>
                </ul>
                <div class="nav_content">
                    <div id="appetizer_content" class="menu_content active_content">
                        <div id="appetizer_bar_and_box" class="menu_bar_and_box">
                            <div id="appetizer_bar" class="menu_bar">
                                <p class="m-0">
                                    APPETIZER
                                    <i id="appetizer_arrow" class="fas fa-chevron-up menu_arrow float-right"></i>
                                </p>
                            </div>
                            <div id="appetizer_box" class="menu_box">
                                <div id="appetizer_menuslider" class="menuslider"></div>
                                <section class="list_box">
                                    <table>
                                        <?php outputMenu('appetizer'); ?>
                                    </table>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div id="lunch_content" class="menu_content">
                        <div id="salad_bar_and_box" class="menu_bar_and_box">
                            <div id="salad_bar" class="menu_bar">
                                <p class="m-0">
                                    SALAD
                                    <i id="salad_arrow" class="fas fa-chevron-up menu_arrow float-right"></i>
                                </p>
                            </div>
                            <div id="salad_box" class="menu_box" style="background-image: 'img/salad.jpg';">
                                <div id="salad_img" class="menu_img"></div>
                                <section class="list_box">
                                    <table>
                                        <?php outputMenu('salad'); ?>
                                    </table>
                                </section>
                            </div>
                        </div>
                        <div id="side_menu_bar_and_box" class="menu_bar_and_box">
                            <div id="side_menu_bar" class="menu_bar">
                                <p class="m-0">
                                    SIDE MENU
                                    <i id="side_menu_arrow" class="fas fa-chevron-up menu_arrow float-right"></i>
                                </p>
                            </div>
                            <div id="side_menu_box" class="menu_box" style="background-image: 'img/salad.jpg';">
                                <div id="side_menu_img" class="menu_img"></div>
                                <section class="list_box">
                                    <table>
                                        <?php outputMenu('side menu'); ?>
                                    </table>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div id="dinner_content" class="menu_content">
                        <div id="dinner_bar_and_box" class="menu_bar_and_box">
                            <div id="dinner_bar" class="menu_bar">
                                <p class="m-0">
                                    DINNER
                                    <i id="dinner_arrow" class="fas fa-chevron-up menu_arrow float-right"></i>
                                </p>
                            </div>
                            <div id="dinner_box" class="menu_box" style="background-image: 'img/salad.jpg';">
                                <div id="dinner_img" class="menu_img"></div>
                                <section class="list_box">
                                    <table>
                                        <?php outputMenu('dinner'); ?>
                                    </table>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div id="drink_content" class="menu_content">
                        <div id="drink_bar_and_box" class="menu_bar_and_box">
                            <div id="drink_bar" class="menu_bar">
                                <p class="m-0">
                                    DRINK
                                    <i id="drink_arrow" class="fas fa-chevron-up menu_arrow float-right"></i>
                                </p>
                            </div>
                            <div id="drink_box" class="menu_box" style="background-image: 'img/salad.jpg';">
                                <div id="drink_img" class="menu_img"></div>
                                <section class="list_box">
                                    <h5>ALCOHOL</h5>
                                    <table>
                                        <?php outputMenu('alcohol'); ?>
                                    </table>
                                    <p></p>
                                    <h5>SOFT DRINK</h5>
                                    <table>
                                        <?php outputMenu('soft drink'); ?>
                                    </table>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div id="dessert_content" class="menu_content">
                        <div id="dessert_bar_and_box" class="menu_bar_and_box">
                            <div id="dessert_bar" class="menu_bar">
                                <p class="m-0">
                                    DESSERT
                                    <i id="dessert_arrow" class="fas fa-chevron-up menu_arrow float-right"></i>
                                </p>
                            </div>
                            <div id="dessert_box" class="menu_box" style="background-image: 'img/salad.jpg';">
                                <div id="dessert_img" class="menu_img"></div>
                                <section class="list_box">
                                    <table>
                                        <?php outputMenu('dessert'); ?>
                                    </table>
                                </section>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </div>
</main>
<div id="scroll_top" class="text-center">
    <a href="#" class="y-center">
        <div><i class="fas fa-arrow-up"></i></div>
    </a>
</div>
<?php get_footer(); ?>