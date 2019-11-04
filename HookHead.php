<?php
defined('is_running') or die('Not an entry point...');

global $addonRelativeData, $addonRelativeCode, $page;
$page->head_js[] = $addonRelativeCode . '/static/jquery.details.min.js';

$url = common::GetUrl('Special_Blog_Feed');
$page->head .= '<link rel="alternate" type="application/atom+xml" href="'.$url.'" />';

