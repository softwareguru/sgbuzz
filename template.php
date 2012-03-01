<?php

/**
 * @file
 * This file is empty by default because the base theme chain (Alpha & Omega) provides
 * all the basic functionality. However, in case you wish to customize the output that Drupal
 * generates through Alpha & Omega this file is a good place to do so.
 * 
 * Alpha comes with a neat solution for keeping this file as clean as possible while the code
 * for your subtheme grows. Please read the README.txt in the /preprocess and /process subfolders
 * for more information on this topic.
 */

function sgbuzz_form_alter(&$form, &$form_state, $form_id) {
  if ($form_id == 'search_block_form') {
/*
    $form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
*/
    $form['search_block_form']['#size'] = 20;  // define size of the textfield
    $form['search_block_form']['#default_value'] = t('Buscar'); // Set a default value for the textfield
/*
    $form['actions']['submit']['#value'] = t('GO!'); // Change the text on the submit button
*/
/*
    $form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/images/search-button.png');
*/

// Add extra attributes to the text box
    $form['search_block_form']['#attributes']['onblur'] = "if (this.value == '') {this.value = 'Buscar';}";
    $form['search_block_form']['#attributes']['onfocus'] = "if (this.value == 'Buscar') {this.value = '';}";
  }
}
?>
