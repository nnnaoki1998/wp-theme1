<?php get_header(); ?>
<main>
    <div class="white_wall" style="padding-top: 60px;">
        <section class="opening_hours_area row m-0 px-0 px-lg-5 pt-5 mt-5">
            <div class="opening_hours_left_area col-12 col-lg-6">
                <h1 class="caveat display-3 text-center">OPENING HOURS</h1>
            </div>
            <div class="opening_hours_right_area col-12 col-lg-6 px-3 pl-lg-5">
                <table class="opening_hours_table text-center mx-auto mb-3 ml-lg-0">
                    <tbody>
                        <tr class="week">
                            <td><strong>SUN</strong></td>
                            <td><strong>MON</strong></td>
                            <td><strong>TUE</strong></td>
                            <td><strong>WED</strong></td>
                            <td><strong>THU</strong></td>
                            <td><strong>FRI</strong></td>
                            <td><strong>SAT</strong></td>
                        </tr>
                        <tr>
                            <td>11:00<br>-<br>20:00</td>
                            <td>CLOSE</td>
                            <td>11:00<br>-<br>23:00</td>
                            <td>11:00<br>-<br>23:00</td>
                            <td>11:00<br>-<br>23:00</td>
                            <td>11:00<br>-<br>23:00</td>
                            <td>11:00<br>-<br>23:00</td>
                        </tr>
                    </tbody>
                </table>
                <p class="text-center text-lg-left">＊L.O：TUE - SAT 22:30 / SUN 19:30<br>＊CLOSE on MONDAY</p>
            </div>
        </section>
        <section class="access_area overflow-hidden m-0 px-3 px-md-5 pt-5 mt-5">
            <div class="access_right_area">
                <h1 class="caveat display-3 text-center">ACCESS</h1>
                <div class="y-center">
                    <div class="access_info pl-lg-5">
                        <div class="mb-3">
                            <p>〒643-0000 ～～県～～市～～～～～～～～～～～～</p>
                            <p>TEL/FAX:012-345-678</p>
                        </div>
                        <div class="mb-3">
                            <p>総席数：14席</p>
                            <p>禁煙・喫煙：火〜金/カウンター席のみ喫煙可</p>
                            <p>（土日祝/15時迄全面禁煙）・15時以降全席喫煙可</p>
                        </div>
                        <div class="mb-3">
                            <p>交通・アクセス</p>
                            <p>・～～～～線「～～～～駅」下車徒歩50m</p>
                            <p>*お車でお越しの方は近隣のコインパーキングをご利用ください。</p>
                        </div>
                        <div class="mb-3 d-none d-lg-block">
                            <a href="https://www.google.com/maps/search/%E6%9D%B1%E4%BA%AC%E9%A7%85/@35.6809413,139.7664409,16.75z"
                                class="access_map_link" target="_blank">
                                +Googlemaps
                                <i class="fas fa-map-marker-alt google_maps_icon"></i>
                            </a>
                            <p class="small">＊大きな地図で見る</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="access_left_area pl-lg-5">
                <div id="google_maps"></div>
                <div class="my-3 d-block d-lg-none text-center">
                    <a href="https://www.google.com/maps/search/%E6%9D%B1%E4%BA%AC%E9%A7%85/@35.6809413,139.7664409,16.75z"
                        class="access_map_link">
                        +Googlemaps
                        <i class="fas fa-map-marker-alt google_maps_icon"></i>
                    </a>
                    <p class="small">＊大きな地図で見る</p>
                </div>
            </div>
        </section>
        <div class="store_reserve text-center py-5 px-3">
            <p>ご予約はお電話にて</p>
            <h5 class="store_reserve_tel">0123-456-789</h5>
        </div>
    </div>
</main>
</div>
<div id="scroll_top" class="text-center">
    <a href="#" class="y-center">
        <div><i class="fas fa-arrow-up"></i></div>
    </a>
</div>
<!-- Googlemaps -->
<script
    src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyAdtxao9b-udTRYu7yWgKAxm42DbW4R7ds&callback=initMap&libraries=places"
    async defer></script>
<script>
function initMap() {
    'use strict';

    var target = document.getElementById("google_maps");
    var map;
    var marker;
    var spot = {
        lat: 35.681167,
        lng: 139.767052
    };

    map = new google.maps.Map(target, {
        center: spot,
        zoom: 15,
        disableDefaultUI: true,
        zoomControl: true,
        clickableIcons: false
    });

    marker = new google.maps.Marker({
        position: spot,
        map: map,
        title: '東京',
    });
}
</script>
<?php get_footer(); ?>