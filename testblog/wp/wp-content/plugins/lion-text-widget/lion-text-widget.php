<?php
/*
* Theme Name: lion
* Theme URI: http://lion.or.jp
* Author: Linkazia
* Author URI: http://Linkazia.co.jp
* Description: Theme for lion
* Version: 1.0
* License: GNU General Public License v2 or later
* License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

require_once 'lion-text-widget-class.php';

fuction register_lion_text_widget(){
  register_widget('lion_text_widget');
}

add_action('widgets_init','register_lion_text_widget');
