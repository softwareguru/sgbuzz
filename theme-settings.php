<?php

function sgbuzz_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['#attached']['library'][] = 'sgbuzz/theme-settings';

  $form['mtt_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('MtT Theme Settings'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );

  $form['mtt_settings']['tabs'] = array(
    '#type' => 'vertical_tabs',
    '#default_tab' => 'basic_tab',
  );

  $form['mtt_settings']['basic_tab']['basic_settings'] = array(
    '#type' => 'details',
    '#title' => t('Basic Settings'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['mtt_settings']['basic_tab']['basic_settings']['header'] = array(
   '#type' => 'item',
   '#markup' => '<div class="theme-settings-title">'.t("Header positioning").'</div>',
  );

  $form['mtt_settings']['basic_tab']['basic_settings']['fixed_header'] = array(
    '#type' => 'checkbox',
    '#title' => t('Fixed position'),
    '#description'   => t('Use the checkbox to apply fixed position to the header.'),
    '#default_value' => theme_get_setting('fixed_header', 'sgbuzz'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['basic_tab']['basic_settings']['scrolltop'] = array(
    '#type' => 'item',
    '#markup' => '<div class="theme-settings-title">'.t("Scroll to top").'</div>',
  );

  $form['mtt_settings']['basic_tab']['basic_settings']['scrolltop_display'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show scroll-to-top button'),
    '#description'   => t('Use the checkbox to enable or disable scroll-to-top button.'),
    '#default_value' => theme_get_setting('scrolltop_display', 'sgbuzz'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );

  $form['mtt_settings']['bootstrap_tab']['bootstrap'] = array(
    '#type' => 'details',
    '#title' => t('Bootstrap'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
    '#group' => 'tabs',
  );

  $form['mtt_settings']['bootstrap_tab']['bootstrap']['bootstrap_remote_type'] = array(
    '#type' => 'select',
    '#title' => t('Select the remote type'),
    '#description'   => t('From the drop down select box, select how to load the Bootstrap library. If you select "Local" make sure that you download and place Bootstrap folder into the root theme folder (sgbuzz/bootstrap).'),
    '#default_value' => theme_get_setting('bootstrap_remote_type', 'sgbuzz'),
    '#options' => array(
    'local' => t('Local / No remote'),
    'cdn' => t('CDN'),
    ),
  );


}
