<?php

/**
 * @file
 * Implement hooks to modify this theme's settings.
 */

use \Drupal\Core\Form\FormStateInterface;

/**
 * Add expanded form elements for site name and site slogan.
 *
 * The site design requires the site slogan (and possibly the site name) to be
 * broken up with <span> tags, so we're adding form elements to this theme's
 * settings that accept multiline html content.
 *
 * Implements theme_form_system_theme_settings_alter().
 */
function riancallahan_com_neato_form_system_theme_settings_alter(&$form, FormStateInterface &$form_state, $form_id = NULL) {
  // Work-around for a core bug affecting admin themes. See issue #943212.
  if (isset($form_id)) {
    return;
  }

  $form['theme_site_name'] = array(
    '#type'          => 'textarea',
    '#title'         => t('Site Name (multiline)'),
    '#format'        => 'full_html',
    '#default_value' => theme_get_setting('theme_site_name'),
    '#description'   => t('This theme uses a multiline Site Name instead of the one defined at Configuration > System > Basic site settings.'),
  );

  $form['theme_site_slogan'] = array(
    '#type'          => 'textarea',
    '#title'         => t('Site Slogan (multiline)'),
    '#format'        => 'full_html',
    '#default_value' => theme_get_setting('theme_site_slogan'),
    '#description'   => t('This theme uses a multiline Site Slogan instead of the one defined at Configuration > System > Basic site settings.'),
  );
}
