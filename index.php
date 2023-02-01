<!-- header部分を　get_header()に置き換える -->
<?php get_header(); ?>


		<div id="fh5co-main">
			<aside id="fh5co-hero" class="js-fullheight">
				<div class="flexslider js-fullheight">
					<ul class="slides">
				   	<li style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/img_bg_1.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<h1>旭川のハンドメイド作家 KINARI WORKS</h1>
					   					<h2>オリジナル布小物を作っています</h2>
											<p><a class="btn btn-primary btn-demo popup-vimeo" href="https://vimeo.com/channels/staffpicks/93951774"> <i class="fas fa-chevron-left"></i> TO GALLARY</a> <a class="btn btn-primary btn-learn">お問い合わせ<i class="fas fa-chevron-right"></i></a></p>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/img_bg_2.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<h1>旭川のハンドメイド作家 KINARI WORKS</h1>
											<h2>オリジナル布小物を作っています</h2>
											<p><a class="btn btn-primary btn-demo popup-vimeo" href="https://vimeo.com/channels/staffpicks/93951774"> <i class="fas fa-chevron-left"></i> TO GALLARY</a> <a class="btn btn-primary btn-learn">お問い合わせ<i class="fas fa-chevron-right"></i></a></p>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/img_bg_3.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
					   				<div class="slider-text-inner">
					   					<h1>旭川のハンドメイド作家 KINARI WORKS</h1>
											<h2>オリジナル布小物を作っています</h2>
											<p><a class="btn btn-primary btn-demo popup-vimeo" href="https://vimeo.com/channels/staffpicks/93951774"> <i class="fas fa-chevron-left"></i> TO GALLARY</a> <a class="btn btn-primary btn-learn">お問い合わせ<i class="fas fa-chevron-right"></i></a></p>
					   				</div>
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				  	</ul>
			  	</div>
			</aside>

			<!-- About Me -->
			<div class="fh5co-narrow-content">
				<div class="row row-bottom-padded-md">
					<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
						<img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/images/2.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co">
					</div>
					<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
						<h2 class="fh5co-heading">About Me</h2>
						<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
						<p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
					</div>
				</div>
			</div>
			<!-- recent blog -->
			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">最新記事</h2>
					<?php
					//記事があればentriesブロック以下を表示
					if (have_posts() ) : ?>
				<!-- blog-row -->
				<div class="row row-bottom-padded-md">
				<?php
				//最新４記事ぶんループ
				for ($count = 0; $count < 4; $count++) :
				the_post(); ?>
				
				<!-- blog entry -->
				<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="<?php the_permalink(); //記事のリンクを表示 ?>" class="blog-img">
								<?php
								if (has_post_thumbnail() ) {
								// アイキャッチ画像が設定されてれば大サイズで表示
								the_post_thumbnail('large');
								} else {
								// なければnoimage画像をデフォルトで表示
								echo '<img class="wp-post-image" src="' . esc_url(get_template_directory_uri()) . '/images/noimg.png" alt="">';
								}
								?>
							</a>
							<div class="desc">
								<h3><a href="<?php the_permalink(); //記事のリンクを表示 ?>"><?php the_title(); //タイトルを表示 ?></a></h3>
								<span> <time class="entry-item-published" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time><br><!-- /entry-item-published -->
								<?php
								// カテゴリー１つ目の名前を表示
								$category = get_the_category();
								if ($category[0] ) {
								echo '<small>' . $category[0]->cat_name . '</small>/';
								}
								// カテゴリー２つ目の名前を表示
								$category = get_the_category();
								if ($category[1] ) {
								echo '<small>' . $category[1]->cat_name . '</small>';
								}
								?> 
								 / <small> <i class="icon-comment"></i> 14</small></span>
								<p><?php the_excerpt(); //抜粋を表示 ?></p>
								<a href="#" class="lead">Read More <i class="fas fa-chevron-right"></i></a>
							</div>
						</div>
					</div><!--blog entry-->
							<?php endfor; ?>	
				</div><!--blog row-->
				<?php endif; ?>

			</div><!-- recent blog -->
		</div><!--main-->
	</div>
<?php get_footer(); ?>
