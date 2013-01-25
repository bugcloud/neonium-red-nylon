<div class="clear"></div>
</div>
</div>
<!-- ending main -->








<!-- calling boxes -->
	<div id="boxWrapper">
	<div id="box">
			<div id="boxLeft">
				<?php if ( !is_active_sidebar( 'Box Left' ) ) : ?>
<!-- calling random posts -->
		<div class="boxWrapper">
			<div class="box">
				<h5 title="Random Posts">Random Posts</h5>
				<?php rednylon_randomPosts(); ?>
			</div>
		</div>
<!-- ending random posts -->
				<?php else: dynamic_sidebar('Box Left'); ?>
				<?php endif; ?>
			</div>

			<div id="boxCenter">
				<?php if ( !is_active_sidebar( 'Box Center' ) ) : ?>
<!-- calling sample -->
		<div class="boxWrapper">
			<div class="box">
				<h5 title="Sample">Sample</h5>
					<p>
					These areas are widgets and can be controlled through
					<a href="<?php echo home_url(); ?>/wp-admin/widgets.php">the admin page</a>.
					</p>
			</div>
		</div>
<!-- ending sample -->

<!-- calling latest posts -->
		<div class="boxWrapper">
		        <div class="box">
				<h5 title="Latest Posts">Latest Posts</h5>
					<ul>
						<?php wp_get_archives('title_li=&limit=5&type=postbypost'); ?>
					</ul>
			</div>
		</div>
<!-- ending latest posts -->
				<?php else: dynamic_sidebar('Box Center'); ?>
				<?php endif; ?>
			</div>

			<div id="boxRight">
				<?php if ( !is_active_sidebar( 'Box Right' ) ) : ?>
<!-- calling tags -->
		<div class="boxWrapper">
		        <div class="box>
				<h5 title="Tags">Tags</h5>
				<?php wp_tag_cloud('smallest=8&largest=22&orderby=name&order=ASC'); ?>
			</div>
		</div>
<!-- ending tags -->
				<?php else: dynamic_sidebar('Box Right'); ?>
				<?php endif; ?>
			</div>

		<div class="clear"></div>
	</div>
	</div>
<!-- ending boxes -->







<!-- calling footer -->
<div id="footerWrapper">
	<div id="footer">

<a id="scroll" href="#wrapper" title="Go back to top">Go back to top</a>
<a id="wordpress" href="http://wordpress.org" title="Proudly powered by WordPress">Proudly powered by WordPress</a>
<a id="feed" href="<?php bloginfo('rss2_url'); ?>" title="RSS Feed">RSS Feed</a>


		<div id="copyright">
			<a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a> All Rights Reserved.<br />
			Theme Designed &amp; Developed by <a href="http://carla-izumi-bamford.com" title="carla-izumi-bamford.com">Carla Izumi Bamford</a>
			&amp; Customed by <a href="http://bugcloud.com/" title="bugcloud.com">bugcloud</a><br />
		</div>

		<div class="clear"></div>


	</div>
</div>
<!-- ending footer -->


</div>
<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
<?php /* "Just what do you think you're doing Dave?" */ ?>
<?php wp_footer(); ?>
</body>
</html>
