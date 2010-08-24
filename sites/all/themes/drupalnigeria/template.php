<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function _phptemplate_variables($hook, $vars) {
  $vars = array();

  return $vars;
}

/**
 * Override or insert PHPTemplate variables into the templates.
 */
function drupalnigeria_preprocess_page(&$vars) {
    if (isset($vars['node'])) {
    $body_classes[] = ($vars['node']) ? 'full-node' : '';                                                   // Page is one full node
    $body_classes[] = (($vars['node']->type == 'forum') || (arg(0) == 'forum')) ? 'forum' : '';             // Page is Forum page
    $body_classes[] = ($vars['node']->type) ? 'node-type-'. $vars['node']->type : '';                       // Page has node-type-x, e.g., node-type-page
    
}
  else {
    $body_classes[] = (arg(0) == 'forum') ? 'forum' : '';                                                   // Page is Forum page
  }

   global $user;
  // Add multiple suggestions.
  if (!empty($user->roles)) {
    foreach ($user->roles as $role) {
      $filter = '![^abcdefghijklmnopqrstuvwxyz0-9-_]+!s';
      $string_clean = preg_replace($filter, '-', drupal_strtolower($role));
      $vars['template_files'][] =  'page-'. $string_clean;
    }
    if(arg(1) == 'add' && arg(2) == 'registration'){
        $vars['title'] = 'DrupalCamp Lagos Registration';
    }
    if(arg(1) == 'add' && arg(2) == 'session'){
        $vars['title'] = 'DrupalCamp Lagos Session Paper Submission';
    }
  }
    
}
