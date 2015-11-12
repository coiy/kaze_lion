<?php
function lion_load_style() {
  wp_enqueue_style('style-lion', get_stylesheet_uri());
  wp_enqueue_script('jquery1113', get_template_directory_uri() . '/js/jquery-1.11.3.min.js');
  wp_enqueue_script('bxslider', get_template_directory_uri() . '/js/jquery.bxslider.min.js');
  wp_enqueue_script('function', get_template_directory_uri() . '/js/function.js');
  wp_enqueue_script('getdata', get_template_directory_uri() . '/js/getdata.js');
}
add_action('wp_enqueue_scripts', 'lion_load_style');

function lion_support_thumbnail() {
  add_theme_support('post-thumbnails');
  add_image_size('small-thumbnail', 160, 100);
}
add_action('after_setup_theme', 'lion_support_thumbnail');

// bbpress 함수

// BBpress View Counter function
if( !function_exists('get_wpbbp_post_view') ) :
// get bbpress topic view counter

function get_wpbbp_post_view($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
        return "0";
    }
    return $count;
}
function set_wpbbp_post_view($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if( $count == '' ){
        add_post_meta($postID, $count_key, '1');
    } else {
        $new_count = $count + 1;
        update_post_meta($postID, $count_key, $new_count);
    }
}
endif;

if( !function_exists('add_wpbbp_topic_counter') ) :
// init the view counter in bbpress single topic
function add_wpbbp_topic_counter() {
global $wp_query;
$bbp = bbpress();
$active_topic = $bbp->current_topic_id;
set_wpbbp_post_view( $active_topic );
}
add_action('bbp_template_after_single_topic', 'add_wpbbp_topic_counter');
endif;


/* bbPress 사진 업로드 버튼 */
add_filter( 'bbp_after_get_the_content_parse_args', 'bavotasan_bbpress_upload_media' );
/**
 * Allow upload media in bbPress
 *
 * This function is attached to the 'bbp_after_get_the_content_parse_args' filter hook.
 */
function bavotasan_bbpress_upload_media( $args ) {
  $args['media_buttons'] = true;

  return $args;
}


add_image_size( 'blog_featured_image_size', 30, 30, false); //Featured Image for Blog



// bbpress 업데이트 시간 포맷 변경
 function wpse_77441_change_time_format( $anchor, $forum_id )
 {
    $last_active = get_post_meta( $forum_id, '_bbp_last_active_time', true );

    if ( empty( $last_active ) ) {
        $reply_id = bbp_get_forum_last_reply_id( $forum_id );

        if ( !empty( $reply_id ) ) {
            $last_active = get_post_field( 'post_date', $reply_id );
        } else {
            $topic_id = bbp_get_forum_last_topic_id( $forum_id );

            if ( !empty( $topic_id ) ) {
                $last_active = bbp_get_topic_last_active_time( $topic_id );
            }
        }
    }

      $date   = get_post_time( get_option( 'date_format' ), $gmt, $reply_id, true );
      $time   = get_post_time( get_option( 'time_format' ), $gmt, $reply_id, true );
      $dt = sprintf( _x( '%1$s', 'date at time', 'bbpress' ), $date, $time );
// %1$s at %2$s에서 뒷부분 삭제 http://wordpress.stackexchange.com/questions/77441/how-to-edit-bbp-forum-freshness-link-format

    $time_since = bbp_get_forum_last_active_time( $forum_id );


    return str_replace( "$time_since</a>", "$dt</a>", $anchor );
}
add_filter( 'bbp_get_forum_freshness_link', 'wpse_77441_change_time_format', 10, 2 );
add_filter( 'bbp_get_topic_freshness_link', 'wpse_77441_change_time_format', 10, 2 );


// For displaying "New" Label for topics less than 3 days
function mycustom_new_label_bbp($now, $last_active) {
  $now = new DateTime($new);
  $last_active = new dateTime($last_active);
  $interval = $last_active->diff($now);
  $difference = $interval->format('%R%a days');
  if($difference < 3) {
    echo '<span class="mycustom_new_label">';
    echo "New";
    echo '</span>';
  }
}

add_filter( 'bbp_no_breadcrumb', '__return_true' );
add_filter( 'avatar_defaults', 'default_avatar' );
function default_avatar ($default_avatar) {
    $newavatar = get_stylesheet_directory_uri() . '/default_user.png';
    $default_avatar[$newavatar] = "Custom Avatar Name";
    return $default_avatar;
}

function bbp_enable_visual_editor( $args = array() ) {
    $args['tinymce'] = true;
    return $args;
}
add_filter( 'bbp_after_get_the_content_parse_args', 'bbp_enable_visual_editor' );
