<?php

/**
 * @file
 * Settings file for local development environments.
 *
 * Use this to store local database credentials, API keys, and debugging
 * settings. This file should never be committed to version control.
 */

$brand_name = 'eonline';// <--- This should match the folder name under sites

$conf['pub_site_shortname'] = $brand_name;

ini_set('error_reporting', E_ALL);
ini_set('memory_limit','512M');

// Define the current environment.
$_ENV['AH_SITE_ENVIRONMENT'] = 'local';

$conf['file_private_path'] = "sites/$brand_name/files/files-private";
$conf['file_temporary_path'] = "sites/$brand_name/files/tmp";

$conf['cache_backends'][] = 'profiles/publisher/modules/contrib/memcache/memcache.inc';
$conf['cache_default_class'] = 'MemCacheDrupal';
$conf['cache_class_cache_form'] = 'DrupalDatabaseCache';
$conf['memcache_key_prefix'] = $brand_name;
$conf['memcache_servers'] = [
  'memcache:11211' => 'default',
];

$conf['aws_sqs_aws_key'] = '';
$conf['aws_sqs_aws_secret'] = '';
$conf['content_registry_api_key'] = '';
$conf['content_registry_environment_url'] = '';

$databases['default'] = [
  'default' =>
    [
      'database' => 'eonline',
      'username' => 'root',
      'password' => 'password',
      'host' => 'mariadb',
      'port' => '3306',
      'driver' => 'mysql',
      'prefix' => '',
    ],
];
