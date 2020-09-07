<?php

/**
 * @file
 * Lagoon Drupal 8 all environment configuration file.
 *
 * This file should contain all settings.php configurations that are needed by all environments.
 *
 * It contains some defaults that the Lagoon team suggests, please edit them as required.
 */

/**
 * Defines where the sync folder of your configuration lives. In this case it's
 * outside the web folder for an advanced security measure: '../config/sync'.
 */
$settings['config_sync_directory'] = '../config/sync';

/**
 * The default list of directories that will be ignored by Drupal's file API.
 *
 * By default ignore node_modules and bower_components folders to avoid issues
 * with common frontend tools and recursive scanning of directories looking for
 * extensions.
 *
 * @see file_scan_directory()
 * @see \Drupal\Core\Extension\ExtensionDiscovery::scanDirectory()
 */
$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];
