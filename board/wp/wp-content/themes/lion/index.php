<?php get_header(); ?>
<!-- Main Images/ -->
    <div id="main_images">
      <div class="slide_all pc">
        <div class="slide_wrap">
          <div class="slide_body">
            <div class="slide"><a href="/news/no151021.html"><img src="http://lion.or.jp/testblog/images/slide2.png"></a></div>
            <!-- <div class="slide"><a href=""><img src="/images/slide1.png"></a></div>
            <div class="slide"><a href=""><img src="/images/slide1.png"></a></div> -->
          </div>
        </div>
      </div>
      <!-- <div class="control">
        <span id="slider-prev"></span>
        <span id="slider-next"></span>
      </div> -->
      <ul class="sp">
        <li><a href="/news/no151021.html"><img src="http://lion.or.jp/testblog/images/slide2.png"></a></li>
        <!-- <li><a href="/fashion/article.html"><img src="/images/slide1.png"></a></li> -->
        <!-- <li><a href="/fashion/article.html"><img src="/images/slide1.png"></a></li> -->
      </ul>
    </div>
    <!-- /Main Images -->
		<!-- Contents/ -->
		<div id="contents">
			<!-- Main Contents/ -->
			<div id="main_contents">
				<?php
				if(have_posts()) {
					while(have_posts()) {
							the_post();
							

							?>
<!--							<h3><a href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a></h3>-->
									<?php the_post_thumbnail(small-thumbnail); ?>
									<?php the_content(); ?>
				<?php
					}
				}
				?>
				<!-- Content_wrap/ -->
				<div id="content_wrap">

			</div><!-- Content_wrap -->
			</div>
			<!-- /Main Contents -->
			<!-- Side menu/ -->
			<div id="side_menu">
				<!-- Menu List/ -->
				<div class="main_list pc">
					<?php get_sidebar(); ?>
				</div>
				<!-- /Menu List -->
				<!-- Pr space/ -->
				<!-- <div class="pr_space">
					<ul>
						<li><a href=""><img src=""></a></li>
					</ul>
				</div> -->
				<!-- /Pr space -->
				<!-- Facebook Box/ -->
				<div class="facebook_box">
					<div class="fb-page" data-href="https://www.facebook.com/%E4%B8%80%E8%88%AC%E8%B2%A1%E5%9B%A3%E6%B3%95%E4%BA%BA-%E9%A2%A8%E3%81%AB%E7%AB%8B%E3%81%A4%E3%83%A9%E3%82%A4%E3%82%AA%E3%83%B3%E5%9F%BA%E9%87%91-1131646966864149/timeline/" data-width="260" data-height="630" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"></div>
				</div>
				<div id="fb-root"></div>
				<div id="fb-root"></div>
				<script>(function(d, s, id) {
						var js, fjs = d.getElementsByTagName(s)[0];
						if (d.getElementById(id)) return;
						js = d.createElement(s); js.id = id;
						js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.4";
						fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));
				</script>
				<!-- /Facebook Box -->
				<div class="pr_space">
					<a href="http://www.nagasakips.com/"><img src="http://lion.or.jp/testblog/images/banner1.png" alt=""/></a>
				</div>
			</div>
			<!-- /Side menu -->
		</div>
		<!-- /Contents -->









<?php get_footer(); ?>
