<?php 

/**
 * Implements hook_element_info().
 */
function bootstrap_element_info() {
  $elements['table']['#process'] = array('bootstrap_custom_table');
  $elements['textfield']['#process'] = array('bootstrap_custom_textfield');
  $elements['select']['#process'] = array('bootstrap_custom_select');
  //$elements['submit']['#process'] = array('bootstrap_button');
  return $elements;
}

function bootstrap_table($variables){
  $variables['attributes']['class'][]='table';
  $variables['attributes']['class'][]='table-striped';

  return theme_table($variables);
}

function bootstrap_textfield($variables){
  $variables['element']['#attributes']['class'][] = 'form-control';
  return theme_textfield($variables);
}

function bootstrap_select($variables){
  $variables['element']['#attributes']['class'][] = 'form-control';
  return theme_select($variables);
}

function bootstrap_button($variables){
  $attributes=array();
  $attributes['class'][] = 'btn';
  $attributes['class'][] = 'btn-sm';

  if($variables['element']['#value']=='Delete'){
    $attributes['class'][] = 'btn-danger';
  }else{
    $attributes['class'][] = 'btn-default';
  }
  $variables['element']['#attributes'] = $attributes;
  return theme_button($variables);
}

/**
 * Implements hook_menu_local_tasks().
 */
function bootstrap_menu_local_tasks() {
  $output = '';
  if ($primary = menu_primary_local_tasks()) {
    $output .= "<ul class=\"nav nav-tabs\">\n".render($primary)."</ul>\n";
  }
  if ($secondary = menu_secondary_local_tasks()) {
    $output .= "<ul class=\"nav nav-tabs\">\n".render($secondary)."</ul>\n";
  }
  return $output;
}

/**
 * Implements hook_status_messages().
 */
function bootstrap_status_messages($variables) {
  $display = $variables['display'];
  $output = '';
  $class='alert alert-info';

  $status_heading = array(
    'status' => t('Status message'),
    'error' => t('Error message'),
    'warning' => t('Warning message'),
  );
  foreach (drupal_get_messages($display) as $type => $messages) {
    switch ($type){
      case 'status':
        $class='alert alert-success';
        break;
      case 'warning':
        $class='alert';
        break;
      case 'error':
        $class='alert alert-danger';
        break;
      default:
        $class='alert alert-info';
    }
    $output .= "<div class=\"messages $class\">";
    if (!empty($status_heading[$type])) {
      $output .= '<h2 class="element-invisible">' . $status_heading[$type] . "</h2>\n";
    }
    if (count($messages) > 1) {
      $output .= " <ul>\n";
      foreach ($messages as $message) {
        $output .= '  <li>' . $message . "</li>\n";
      }
      $output .= " </ul>\n";
    }
    else {
      $output .= $messages[0];
    }
    $output .= "</div>\n";
  }
  return $output;
}

?>