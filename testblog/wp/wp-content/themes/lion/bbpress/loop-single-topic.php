<?php

/**
 * Topics Loop - Single
 *
 * @package bbPress
 * @subpackage Theme
 */

?>
<tr>
<!-- first line Topics ID -->
<td class="hide_on_mobile_version"><?php echo bbp_get_topic_id(); ?></td>

<!--- seconde line Name -->
<td style="text-align: left!important;">


	<!-- For outputting "New" label -->
<?php $now = date("Y-m-d");
	if ( !empty( $reply_id ) ) {
    $last_active = get_post_field( 'post_date', $reply_id );
    }
                         else {
    $last_active = get_post_field( 'post_date', $topic_id );
    }
?>
<?php mycustom_new_label_bbp($now, $last_active); ?>
  	  <!-- End of New Label -->
<?php do_action( 'bbp_theme_before_topic_title' ); ?>

<a class="bbp-topic-permalink" href="<?php bbp_topic_permalink(); ?>">

	<?php if (strlen($post->post_title) > 32) {
echo mb_strimwidth(the_title($before = '', $after = '', FALSE), 0, 32, '...', 'utf-8'); } else {
the_title();
} ?>

<?php //bbp_topic_title(); ?></a><!--added --><span class="mycustom_topic_replies">(<?php $bbpcommentcount = bbp_get_topic_reply_count();
echo $bbpcommentcount; ?>)
	<!-- <?php echo "  ("; ?><?php bbp_show_lead_topic() ? bbp_topic_reply_count() : bbp_topic_post_count(); ?><?php echo ")"; ?> --></span><!-- 추가됨 끝 -->

<?php do_action( 'bbp_theme_after_topic_title' ); ?>

<?php bbp_topic_pagination(); ?>

</td>
<!-- <li class="bbp-topic-voice-count"><?php bbp_topic_voice_count(); ?></li> -->
<!--- Third Writer -->
<td style="text-align:center;">
<?php printf( __( '%1$s', 'bbpress' ), bbp_get_topic_author_link( array( 'size' => '14' ) ) ); ?>
</td>

<!-- fourth line -- recent update -->
<td  class="hide_on_mobile_version" style="text-align:center;">
<?php do_action( 'bbp_theme_before_topic_freshness_link' ); ?>

<?php bbp_topic_freshness_link(); ?>

<?php do_action( 'bbp_theme_after_topic_freshness_link' ); ?>

</td>

<!-- fifth -- user custom --->
<td  class="hide_on_mobile_version" style="text-align:center;">
<?php echo get_wpbbp_post_view( bbp_get_topic_id() ); ?>
</td>

<!--- -->
<?php if ( bbp_is_user_home() ) : ?>

<?php if ( bbp_is_favorites() ) : ?>

<td>
<?php do_action( 'bbp_theme_before_topic_favorites_action' ); ?>

<?php bbp_topic_favorite_link( array( 'before' => '', 'favorite' => '+', 'favorited' => '&times;' ) ); ?>

<?php do_action( 'bbp_theme_after_topic_favorites_action' ); ?>

</td>

<?php elseif ( bbp_is_subscriptions() ) : ?>

<td>
<?php do_action( 'bbp_theme_before_topic_subscription_action' ); ?>

<?php bbp_topic_subscription_link( array( 'before' => '', 'subscribe' => '+', 'unsubscribe' => '&times;' ) ); ?>

<?php do_action( 'bbp_theme_after_topic_subscription_action' ); ?>

</td>

<?php endif; ?>

<?php endif; ?>

</tr>
<!-- #bbp-topic-<?php bbp_topic_id(); ?> -->
