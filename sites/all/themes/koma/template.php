<?php
/**
 * @file
 * Contains the theme's functions to manipulate Drupal's default markup.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728096
 */

function koma_is_local()
{

    if (substr($_SERVER['REMOTE_ADDR'], 0, 4) == '127.'
        || $_SERVER['REMOTE_ADDR'] == '::1'
    ) {
        return true;
    }
    return false;

}

function koma_theme_wrapper($variable)
{
    $pth = pathinfo($variable);
    echo 'theme-wrapper="' . $pth["basename"] . '"';
}


//function koma_links__locale_block(&$variables) {
//    // the global $language variable tells you what the current language is
//    global $language;
//
//// an array of list items
//    $items = array();
//    foreach($variables['links'] as $lang => $info) {
//
//        $name     = $info['language']->native;
//        $href     = isset($info['href']) ? $info['href'] : '';
//        $li_classes   = array('list-item-class');
//        // if the global language is that of this item's language, add the active class
//        if($lang === $language->language){
//            $li_classes[] = 'active';
//        }
//        $link_classes = array('link-class1', 'link-class2');
//        $options = array('attributes' => array('class'    => $link_classes),
//            'language' => $info['language'],
//            'html'     => true
//        );
//        $link = l($name, $href, $options);
//
//        // display only translated links
//        if ($href) $items[] = array('data' => $link, 'class' => $li_classes);
//    }
//
//// output
//    $attributes = array('class' => array('my-list'));
//    $output = theme_item_list(array('items' => $items,
//        'title' => '',
//        'type'  => 'ul',
//        'attributes' => $attributes
//    ));
//    return $output;
//}


//function koma_preprocess_page(&$variables) {
//    echo '<pre>'; var_dump($variables['theme_hook_suggestions']); echo '</pre>';
//}
function koma_links__locale_block(&$variables)
{
    global $language;
    $items = array();
    foreach ($variables['links'] as $lang => $info) {
        $name = $info['language']->native;
        $href = isset($info['href']) ? $info['href'] : '';
        $li_classes = array('list-item-class');
        // if the global language is that of this item's language, add the active class
        if ($lang === $language->language) {
            $li_classes[] = 'active';
        }
        $link_classes = array('link-class1', 'link-class2');
        $options = array('attributes' => array('class' => $link_classes),
            'language' => $info['language'],
            'html' => true
        );
        $link = l($name, $href, $options);
        // display only translated links
        if ($href) $items[] = array('data' => $link, 'class' => $li_classes);
    }
    $linky = '';
    foreach ($items AS $poradi => $item) {
//        if ($poradi == 1) continue;
        $linky .= '<li class="lang_' . $poradi . '">';
        $linky .= $item['data'];
        $linky .= '</li>';
    }
    return $linky;
}

function koma_menu_breadcrumb_alter(&$active_trail, $item)
{
    global $language;
    $lang_name = $language->language;
    $i = 0;
    foreach (array_keys($active_trail) as $key) {
        if ($i != 0) {
          if(isset($active_trail[$key]['mlid'])){
            $translatedValue = i18n_string_translate(array('menu', 'item', $active_trail[$key]['mlid'], 'title'), $active_trail[$key]['title'], array('langcode' => $lang_name, 'sanitize' => false));
            $active_trail[$key]['title'] = $translatedValue;
          }

        }
        $i++;
    }
}


function koma_theme()
{
    $items = array();

    $items['user_login'] = array(
        'render element' => 'form',
        'path' => drupal_get_path('theme', 'koma') . '/templates',
        'template' => 'user-login',
        'preprocess functions' => array(
            'koma_preprocess_user_login'
        ),
    );
    $items['user_register_form'] = array(
        'render element' => 'form',
        'path' => drupal_get_path('theme', 'koma') . '/templates',
        'template' => 'user-register-form',
        'preprocess functions' => array(
            'koma_preprocess_user_register_form'
        ),
    );
    $items['user_pass'] = array(
        'render element' => 'form',
        'path' => drupal_get_path('theme', 'koma') . '/templates',
        'template' => 'user-pass',
        'preprocess functions' => array(
            'koma_preprocess_user_pass'
        ),
    );
    return $items;
}

function koma_preprocess_user_login(&$vars)
{
    $vars['intro_text'] = t('This is my awesome login form');
}

function koma_preprocess_user_register_form(&$vars)
{
    $vars['intro_text'] = t('This is my super awesome reg form');
}

function koma_preprocess_user_pass(&$vars)
{
    $vars['intro_text'] = t('This is my super awesome request new password form');
}

function koma_menu_local_tasks(&$variables)
{
    $output = '';

    // Add theme hook suggestions for tab type.
    foreach (array('primary', 'secondary') as $type) {
        if (!empty($variables[$type])) {
            foreach (array_keys($variables[$type]) as $key) {
                if (isset($variables[$type][$key]['#theme']) && ($variables[$type][$key]['#theme'] == 'menu_local_task' || is_array($variables[$type][$key]['#theme']) && in_array('menu_local_task', $variables[$type][$key]['#theme']))) {
                    $variables[$type][$key]['#theme'] = array('menu_local_task__' . $type, 'menu_local_task');
                }
            }
        }
    }

    if (!empty($variables['primary'])) {
        $variables['primary']['#prefix'] = '<div class="tabs_wrap">';
        $variables['primary']['#prefix'] .= '<ul class="tabs-primary tabs primary">';
        $variables['primary']['#suffix'] = '</ul><span class="fa fa-cogs"></span></div>';
        $output .= drupal_render($variables['primary']);
    }

    return $output;
}

/**
 * Override or insert variables into the maintenance page template.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("maintenance_page" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_maintenance_page(&$variables, $hook) {
  // When a variable is manipulated or added in preprocess_html or
  // preprocess_page, that same work is probably needed for the maintenance page
  // as well, so we can just re-use those functions to do that work here.
  STARTERKIT_preprocess_html($variables, $hook);
  STARTERKIT_preprocess_page($variables, $hook);
}
// */

/**
 * Override or insert variables into the html templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("html" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_html(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // The body tag's classes are controlled by the $classes_array variable. To
  // remove a class from $classes_array, use array_diff().
  //$variables['classes_array'] = array_diff($variables['classes_array'], array('class-to-remove'));
}
// */

/**
 * Override or insert variables into the page templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("page" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_page(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the node templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("node" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_node(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');

  // Optionally, run node-type-specific preprocess functions, like
  // STARTERKIT_preprocess_node_page() or STARTERKIT_preprocess_node_story().
  $function = __FUNCTION__ . '_' . $variables['node']->type;
  if (function_exists($function)) {
    $function($variables, $hook);
  }
}
// */

/**
 * Override or insert variables into the comment templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("comment" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_comment(&$variables, $hook) {
  $variables['sample_variable'] = t('Lorem ipsum.');
}
// */

/**
 * Override or insert variables into the region templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("region" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_region(&$variables, $hook) {
  // Don't use Zen's region--sidebar.tpl.php template for sidebars.
  //if (strpos($variables['region'], 'sidebar_') === 0) {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('region__sidebar'));
  //}
}
// */

/**
 * Override or insert variables into the block templates.
 *
 * @param $variables
 *   An array of variables to pass to the theme template.
 * @param $hook
 *   The name of the template being rendered ("block" in this case.)
 */
/* -- Delete this line if you want to use this function
function STARTERKIT_preprocess_block(&$variables, $hook) {
  // Add a count to all the blocks in the region.
  // $variables['classes_array'][] = 'count-' . $variables['block_id'];

  // By default, Zen will use the block--no-wrapper.tpl.php for the main
  // content. This optional bit of code undoes that:
  //if ($variables['block_html_id'] == 'block-system-main') {
  //  $variables['theme_hook_suggestions'] = array_diff($variables['theme_hook_suggestions'], array('block__no_wrapper'));
  //}
}
// */
