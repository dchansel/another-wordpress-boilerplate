<?php
/**
 * Setup environments
 * 
 * Set environment based on the current server hostname, this is stored
 * in the $hostname variable
 * 
 * You can define the current environment via: 
 *     define('WP_ENV', 'production');
 * 
 * @package    Studio 24 WordPress Multi-Environment Config
 * @version    1.0
 * @author     Studio 24 Ltd  <info@studio24.net>
 */


/*
 * Set environment based on hostname
 *
 * If you just use localhost for your local test environment then in place of:
 *   case 'domain.dev':
 *
 * Just use:
 *   case 'localhost':
 *
 */

preg_match("/[a-z0-9\-]{1,63}\.[a-z\.]{2,6}$/", $hostname, $domain);
$sld = substr($domain[0], 0, strpos($domain[0], '.'));
$tld = substr($domain[0], strpos($domain[0], '.'));
$hostComponents = explode('.', $hostname);

if ( $hostComponents[0] != 'www' && $hostComponents[0] != $sld ) {
    $prefixe = $hostComponents[0];
} elseif($hostComponents[0] == 'www'){
    $prefixe = $hostComponents[0];
} // TODO et si prefixe = staging ????

switch ($hostname) {
    case 'domain.dev':
    case 'www.domain.dev':
    case $sld . '.dev':
    case $prefixe . '.' . $sld . '.dev':
        define('WP_ENV', 'development');
        break;
    
    case 'staging.domain.com':
    case 'staging.' . $sld . $tld . '.com':
        define('WP_ENV', 'staging');
        break;

    case 'www.domain.com':
    case 'domain.com':
    case $prefixe . '.' . $sld . $tld:
    default: 
        define('WP_ENV', 'production');
}