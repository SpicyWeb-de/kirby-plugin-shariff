# Shariff plugin

A plugin for [Kirby CMS](http://getkirby.com) to include [Shariff social media buttons](http://ct.de/-2467514) with ease.

Shariff enables website users to share their favorite content without compromising their privacy.

**NOTE: In the current release from c't shariff supports only 3 Languages: en, de, es.**

## Installation

* Download the complete source code
* Copy assets/plugins/shariff to your pages asset directory
  * If you use another path, make shure to change the config variable shariff.url
* Copy site/plugins/shariff to your pages plugin directory
* Copy the content of site/config/config.php to your config file and adjust them as you like

### Config Variables

#### Shariff Frontend

Default configuration for the shariff frontend is set as shown in site/config/config.php. There is no need to configure
any settings as long as you don't want to change them.

* **language** [en]: set locale code of your page if page is not multilingual (available: en, de, es)
* **page.uses_jquery**: set true, if your page already uses jquery. Otherwise it will be included.
* **page.uses_fa**: set true, if your page already uses fontawesome. Otherwise it will be included.
* **shariff.url**: path to shariff asset files
* **shariff.use_backend**: true, if you want to use the shariff backend to show the count of shares for your pages
* **shariff.orientation**: horizontal or vertical
* **shariff.referrer_check**: String to append to the shared urls
* **shariff.services**: array of used service plugins (available: twitter, facebook, googleplus, whatsapp, mail, info)
* **shariff.theme**: standard or dark
* **shariff.info**: Information page about shariff. default: c't article about shariff. If set, it will be resolved using url(), so you can set it to any kirby-internal page with own content
* 
#### Shariff Backend

**Required configuration!**

Set **domain** in assets/plugins/shariff/backend/shariff.json to the main domain of your webpage. The shariff backend accepts only count requests for this domain.

Furthermore you can adjust the TTL of caching for the counts and requested services.

## How to use it

* Include the shariff-stylesheet in your pages head:
`<?php echo css(shariff_css()) ?>`
* Include the shariff-stylesheet at the end of your page, anywhere before </body>
`<?php echo js(shariff_js()) ?>`
* Use the buttons in your templates wherever you like
`<?php echo shariff_buttons() ?>`

## Author

Michael Fürmann @ [Spicy Web](https://spicyweb.de)