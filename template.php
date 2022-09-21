<?php

/**
 * @file
 * easyOPAC theme for mobile app.
 */

/**
 * Implements hook_preprocess_HOOK().
 */
function easyopac_app_theme_preprocess_pane_header(&$variables) {
  // Set base site logo.
  $theme_settings = variable_get('theme_ddbasic_settings', []);
  $logo = file_create_url($theme_settings['logo_path']);
  $variables['logo'] = $logo;
}

/**
 * Implements hook_js_alter().
 */
function easyopac_app_theme_js_alter(&$javascript) {
  $domain = domain_get_domain();
  if ($domain['machine_name'] === 'easyopac_app') {
    unset($javascript['profiles/ding2/modules/ding_app_smartbanner/js/ding_app_smartbanner.js']);
    unset($javascript['profiles/ding2/modules/contrib/eu_cookie_compliance/js/jquery.cookie-1.4.1.min.js']);
    unset($javascript['profiles/ding2/modules/contrib/eu_cookie_compliance/js/eu_cookie_compliance.js']);
    unset($javascript['profiles/ding2/modules/contrib/ask_vopros/js/ask_vopros.js']);
  }
}

/**
 * Implements hook_preprocess_HOOK().
 */
function easyopac_app_theme_preprocess_ting_object_cover(&$variables) {
  $variables['data']['material-id'] = $variables['object']->id;
}
