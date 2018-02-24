<?php

/**
 * @file
 * Settings file for local development environments.
 *
 * Use this to store local database credentials, API keys, and debugging
 * settings. This file should never be committed to version control.
 */

$brand_name = 'eonline';// <--- This should match the folder name under sites

$databases['default'] = [
  'default' =>
    [
      'database' => $brand_name,
      'username' => 'root',
      'password' => 'password',
      'host' => 'mariadb',
      'port' => '3306',
      'driver' => 'mysql',
      'prefix' => '',
    ],
];

$conf['file_temporary_path'] = 'sites/default/files/tmp';