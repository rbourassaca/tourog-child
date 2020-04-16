<?php

switch(get_post_type(get_the_ID())){
    case 'audio':
        $header_bg = '/wp-content/uploads/2020/01/audio-scaled.jpg';
        $page_taxonomie = 'categories_audio';
        break;
    case 'video':
        $header_bg = '/wp-content/uploads/2020/01/video-scaled.jpg';
        $page_taxonomie = 'categories_video';
        break;
    case 'web':
        $header_bg = '/wp-content/uploads/2020/01/web-scaled.jpg';
        $page_taxonomie = 'categories_web';
        break;
    case 'client':
        $header_bg = '';
        $page_taxonomie = 'categories_clients';
        break;
}