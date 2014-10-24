<?php
$_['heading_title'] = 'Page Cache';
$_['text_module'] = 'Modules';
$_['text_installed'] = 'Page cache is now installed under Extensions -> Page Cache';
$_['pc_not_exist']='does not exist of is not a file';
$_['pc_not_readable']='is not readable (permissions)';
$_['pc_readable']='is readable';
$_['pc_not_writeable']='is not writeable (permissions)';
$_['pc_writeable']='is writeable';
$_['pc_php_compat']='supported (PHP 5.4 or greater)';
$_['pc_php_not_compat']='unsupported (PHP 5.4 or greater recommended)';
$_['pc_sapi_mod_php']='supported (pagecache tested with mod_php)';
$_['pc_sapi_fcgi']='supported (pagecache tested with fastcgi under PHP 5.4 or greater)';
$_['pc_sapi_fcgi_oldphp']='unsupported (known issues with fastcgi with PHP version < 5.4)';
$_['pc_sapi_litespeed']='supported (we work around broken http_response_code() in litespeed)';
$_['pc_sapi_not_tested']='unsupported (pagecache has not been tested with this SAPI)';
$_['pc_text_status']='Status';
$_['pc_err_topmarker']='Cannot find needed marker in index.php: [// Install]';
$_['pc_err_bottommarker']='Cannot find needed marker in index.php: [$response->output()]';
$_['pc_pagecache_disabled']='Pagecache is disabled in index.php';
$_['pc_pagecache_enabled']='Pagecache is enabled in index.php';
$_['pc_count_error']='Count of pagecache related lines is %s,should be %s. Edit %s  manually and fix!';
$_['pc_already_enabled']='Pagecache is already enabled';
$_['pc_enable_error']='Can\'t enable, status: ';
$_['pc_already_disabled']='Pagecache is already disabled';
$_['pc_disable_error']='Can\'t disable, status: ';
$_['pc_purged']='Purged %s files';
$_['pc_wait']='wait...';
$_['pc_label_compat']='Compatibility:';
$_['pc_label_status']='Status:';
$_['pc_header_cachestat']='Cached File Statistics';
$_['pc_td_cf']='Cached Files';
$_['pc_td_total']='Total # of Files';
$_['pc_td_space']='Space Used';
$_['pc_td_valid']='Valid';
$_['pc_td_expired']='Expired';
$_['pc_td_total']='Total';
$_['pc_btn_refresh']='Refresh Stats';
$_['pc_btn_purge']='Clear Entire Cache';
$_['pc_btn_purgeexp']='Clear Expired Files Only';
$_['pc_header_ops']='Operations';
$_['pc_header_settings']='Current Settings';
$_['pc_settings_note']='Note: Settings for reference only, changes must be made manually';
$_['pc_td_setting']='Setting';
$_['pc_td_value']='Value';
$_['pc_td_detail']='Detail';
$_['pc_expire_note']='expire time, in seconds';
$_['pc_lang_note']='default language';
$_['pc_currency_note']='default currency';
$_['pc_addcomment_note']='Whether to add an html comment to the bottom of the cached file.';
$_['pc_wrapcomment_note']='Whether to wrap the html comment so it isn\'t stripped by an html minifier, like CloudFlare\'s.';
$_['pc_end_flush_note']='If true, we call ob_end_flush() in a loop before serving a cached page.  Improves performance, but creates issues in some environments';
$_['pc_skipurls_note']='A list of url patterns that should not be cached.';
$_['pc_enable_warn']='<b>Warning</b>: Enabling and disabling the cache modifies your main index.php file. <em>Have a backup copy of your main index.php for safety.</em><br><span>See <a target="_blank" href="http://github.com/budgetneon/pagecache">the documentation</a> for more info.</span>';
$_['pc_btn_disable']='Disable Cache';
$_['pc_btn_enable']='Enable Cache';
?>
