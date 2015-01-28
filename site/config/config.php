<?php

// These settings are the defaults used by shariff plugin

// Required by Shariff
c::set('language', 'en');                       // set locale code if page is not multilingual
c::set('page.uses_jquery', false);              // set true, if the page uses jquery (will be included otherwise)
c::set('page.uses_fa', false);                  // set true, if the page uses fontawesome (will be included otherwise)

// Shariff Config

c::set('shariff.url', 'assets/plugins/shariff');// path to shariff files
c::set('shariff.use_backend', true);
c::set('shariff.orientation', 'horizontal');    // horizontal, vertical
c::set('shariff.referrer_check', '');           // String to append to the shared url
// used service plugins: twitter, facebook, googleplus, whatsapp, mail, info
c::set('shariff.services', array('twitter', 'facebook', 'googleplus', 'info'));
c::set('shariff.theme', 'standard');            // standard, dark
//c::set('shariff.info', 'shariff');            // Information page about shariff. default: c't article about shariff
                                                // If set, it will be resolved using url(), so you can set it
                                                // to any kirby-internal page with own content

