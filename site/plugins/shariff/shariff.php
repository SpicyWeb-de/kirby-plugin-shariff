<?php
function shariff_css(){
    return c::get('shariff.url', 'assets/plugins/shariff').'/'.r(c::get('page.uses_jquery', false), 'shariff.min.css', 'shariff.complete.css');
}
function shariff_js(){
    return c::get('shariff.url', 'assets/plugins/shariff').'/'.r(c::get('page.uses_jquery', false), 'shariff.min.js', 'shariff.complete.js');
}
function shariff_buttons(){
    if(site()->multilang()==true)
        $lang = site()->language()->code();
    else
        $lang = c::get('language', 'en');

    return html::tag('div', array(
        'class'                 =>'shariff',
        'data-backend-url'      => r(c::get('shariff.use_backend', false), url(c::get('shariff.url', 'assets/plugins/shariff').'/backend/'), null),
        'data-lang'             => $lang,
        'data-orientation'      => c::get('shariff.orientation', 'horizontal'),
        'data-referrer-check'   => c::get('shariff.referrer_check', null),
        'data-services'         => htmlentities(json_encode(c::get('shariff.services', array('facebook', 'twitter', 'googleplus', 'mail', 'info')))),
        'data-theme'            => c::get('shariff.theme', 'standard'),
        'data-info-url'         => r(c::get('shariff.info', false), url(c::get('shariff.info'), null))
    ));
}