<?php
// アイキャッチ画像を使用可能にする
add_theme_support('post-thumbnails');
set_post_thumbnail_size(500, 500, true );

function get_current_link() {
 return (is_ssl() ? 'https' : 'http') . '://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
}