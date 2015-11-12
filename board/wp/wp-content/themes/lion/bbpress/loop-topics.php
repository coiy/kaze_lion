<?php

/**
 * Topics Loop
 *
 * @package bbPress
 * @subpackage Theme
 */

?>
<?php do_action( 'bbp_template_before_topics_loop' ); ?>

<!-- Modifed by WordCracker (http://www.thewordcracker.com/ ) -->



<div class="mycustom_new_topic_table">
	<table width='100%' cellspacing='0' cellpadding='0'>
    <thead>
        <tr>
            <!-- first line ID -->
            <th width="40" text-align:center;"  class="hide_on_mobile_version"><?php echo "ID"; ?></th>
        <!-- second line title -->
			<th style="text-align:center;">タイトル</th>

			<!-- <li class="bbp-topic-voice-count"><?php _e( 'Voices', 'bbpress' ); ?></li> -->
			<!-- third line writer -->
				<th width="100" style="text-align:center;">投稿者</th>

			<!-- fourth line recent updates -->
					<th width="120" style="text-align:center;" class="hide_on_mobile_version">投稿日</th>
		    <!-- fifth line - Views -->		 		<th width="40" border-right:1px solid #eee;text-align:center;" class="hide_on_mobile_version">閲覧</th>
		 	</tr>
    </thead>
    <tbody>

<?php while ( bbp_topics() ) : bbp_the_topic(); ?>

<?php bbp_get_template_part( 'loop', 'single-topic' ); ?>

<?php endwhile; ?>

</tbody> </table> </div><!-- #bbp-forum-<?php bbp_forum_id(); ?> -->

<?php do_action( 'bbp_template_after_topics_loop' ); ?>
