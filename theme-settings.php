<?php
/**
 * Implements hook_form_system_theme_settings_alter() function.
 *
 * @param $form
 *   Nested array of form elements that comprise the form.
 * @param $form_state
 *   A keyed array containing the current state of the form.
 */
function rubik_form_system_theme_settings_alter(&$form, $form_state, $form_id = NULL) {
  // Work-around for a core bug affecting admin themes. See issue #943212.
  if (isset($form_id)) {
    return;
  }

  $form['rubik'] = array(
    '#type' => 'fieldset',
    '#title' => t('Rubik'),
  );
  $form['rubik']['rubik_inline_field_descriptions'] = array(
    '#type' => 'checkbox',
    '#title' => t('Display form field descriptions inline.'),
    '#description' => t("By default, each field's description is displayed in a pop-up, which is only visible when hovering over that field. Select this option to make all field descriptions visible at all times."),
    '#default_value' => theme_get_setting('rubik_inline_field_descriptions', 'rubik'),
  );
  $form['rubik']['rubik_sidebar_field_ui'] = array(
    '#type' => 'checkbox',
    '#title' => t('Display fields in the sidebar of the node edit form.'),
    '#description' => t("By default, each field is displayed in the main content area of the node edit form. This option allows you to move fields into the sidebar to improve user experience."),
    '#default_value' => theme_get_setting('rubik_sidebar_field_ui', 'rubik'),
  );
}